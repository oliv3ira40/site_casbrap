<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Helpers\Site\HelpPosts;
use App\Helpers\Site\HelpSite;
use App\Helpers\HelpAdmin;

use App\Models\Site\Post\Post;
use App\Models\Site\Home\SliderSite;
use App\Models\Site\Post\FeaturedPost;
use App\Models\Admin\Wallet\CasembrapaWallet;

class SiteController extends Controller
{
    public function __construct() {
        // $this->middleware('auth');
    }



    // set_time_limit(10000000000);
    public function index(Request $req) {
        // $req->session()->forget('temporary_user');
        // Auth::logout();


        $data['sliders_site'] = SliderSite::orderBy('created_at', 'desc')->get();
        // dd(\Auth::user());

        return view('Site.index', compact('data'));
    }

    public function recaptcha() {
        return view('Site.recaptcha');
    }
    
    // STATICS
    public function about() {
        return view('Site.statics.about');
    }
    public function administrativeCouncil() {
        return view('Site.statics.administrative_council');
    }
    public function fiscalCouncil() {
        return view('Site.statics.fiscal_council');
    }
    public function executiveBoard() {
        return view('Site.statics.executive_board.executive_board');
    }
    public function executiveBoardAlan_Adr() {
        return view('Site.statics.executive_board.alan_adr');
    }
    public function executiveBoardEuripedes_Rdnj() {
        return view('Site.statics.executive_board.euripedes_rdnj');
    }
    public function executiveBoardCarlosAHS() {
        return view('Site.statics.executive_board.carlos_ahs');
    }
    public function recipient() {
        return view('Site.statics.recipient');
    }
    public function managementReport() {
        return view('Site.statics.management_report');
    }
    public function financialStatement() {
        return view('Site.statics.financial_statement');
    }
    public function accreditation() {
        return view('Site.statics.accreditation');
    }
    public function ombudsman() {
        return view('Site.statics.ombudsman');
    }
    public function reciprocityNetwork() {
        return view('Site.statics.reciprocity_network');
    }
    public function refund() {
        return view('Site.statics.refund');
    }
    public function providerReplacement() {
        return view('Site.statics.provider_replacement');
    }
    public function beneficiaryForm() {
        return view('Site.statics.beneficiary_form');
    }
    public function callCenter() {
        return view('Site.statics.call_center');
    }
    public function medicalGuide() {
        return view('Site.statics.medical_guide');
    }
    public function coronavirus() {
        $data['first_post'] = Post::whereIn('id', ['300', '255', '259', '239', '242'])->orderBy('created_at', 'desc')->get();
        $data['latest_posts'] = Post::whereIn('id', ['250', '245', '244'])->orderBy('created_at', 'desc')->get();

        return view('Site.statics.coronavirus', compact('data'));
    }
    public function duplicateBillet() {
        return view('Site.statics.duplicate_billet');
    }
    public function lgpd() {
        return view('Site.statics.lgpd');
    }
    public function extraordinaryGeneralMeeting() {
        return view('Site.statics.extraordinary_general_meeting');
    }
    // STATICS




    



    // MODELO CONTROLLER
    // public function nomeDaFunção() {
    //     return view('caminho_da_pagina_criada_em_html');
    // }
    // STATICS
};