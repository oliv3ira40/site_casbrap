<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\User;
use App\Models\Site\RegistrationUpdate;

class RegistrationUpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function list(Request $req) {
        $filters = $req->all();
        $data['post'] = RegistrationUpdate::orderBy('created_at', 'desc');
        
        if (count($filters)) {
            if (isset($filters['search']) AND $filters['search'] != null) {
                $data['post'] = $data['post']->where('email', 'like', '%'.$filters['search'].'%');
            }
        }
        $data['post'] = $data['post']->paginate(10);

        return view('Admin.site.registration_update.list', compact('data', 'filters'));
    }
}
