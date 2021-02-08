<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Helpers\HelpAdmin;
use App\Helpers\HelpMenuAdmin;
use App\Helpers\Site\Wallet\HelpWalletCasembrapa;
use App\Helpers\Site\Wallet\HelpWalletCassi;
use App\Helpers\Wallet\HelpWallet;

use App\Models\Admin\Avatar;
use App\Models\Admin\User;
use App\Models\Admin\Group;
use App\Models\Admin\CreatedPermission;
use App\Models\Admin\Permission;
use App\Models\Admin\State;

use App\Models\Site\Post\Post;
use App\Models\Site\Post\FeaturedPost;
use App\Models\Site\Post\StatusPost;
use App\Models\Site\Post\CategoryPost;
use App\Models\Site\Post\PostHasCategoryPost;
use App\Models\Site\Post\TagPost;
use App\Models\Site\Post\PostHasTagPost;
use App\Models\Site\Wallet\CasembrapaWallet;
use App\Models\Site\Wallet\CassiWallet;
use App\Models\Site\Home\SliderSite;

use Carbon\Carbon;
use PhpParser\Node\Stmt\Foreach_;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index(Request $req) {
        // set_time_limit(999999999999999999);
        // if (HelpAdmin::IsUserDeveloper()) {
            // dd(\Request::ip());
            // dd(HelpWallet::generatePdfWalletsForThisUser('90071000'));
        // }

        if (HelpAdmin::IsUserDeveloper()) {
            $data['user'] = \Auth::user();
            $data['latest_users'] = User::orderBy('created_at', 'desc')->withTrashed()
                ->limit(50)->get();
            $data['count_users'] = User::count();
            $data['count_groups'] = Group::count();
            $data['count_permissions'] = CreatedPermission::count();

            return view('Admin.index', compact('data'));
            
        } elseif (HelpAdmin::IsUserAdministrator()) {
            $data['user'] = \Auth::user();
            $data['latest_users'] = User::orderBy('created_at', 'desc')->withTrashed()
                ->limit(50)->get();
            $data['count_users'] = User::count();
            $data['count_posts'] = Post::count();

            // dd($data);

            return view('Admin.index', compact('data'));
        } elseif (HelpAdmin::IsUserCollaborator()) {
            $data['latest_posts'] = Post::select(
                'id',
                'title',
                'image_banner',
                'image_spotlight',
                'created_by_id',
                'status_post_id',
            )->orderBy('created_at', 'desc')->limit(50)->get();

            $data['count_posts'] = Post::count();
            $data['count_featured_post'] = FeaturedPost::count();
            $data['count_slider_site'] = SliderSite::count();

            // dd($data);
            return view('Admin.index', compact('data'));
        } else {
            return view('Admin.index');
        }
    }

    public function withoutPermission()
    {
        return view('Admin.without_permission');
    }
}