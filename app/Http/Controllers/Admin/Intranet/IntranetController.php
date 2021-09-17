<?php

namespace App\Http\Controllers\Admin\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntranetController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function file1() {
        return view('Admin.intranet.file_1');
    }
    public function file2() {
        return view('Admin.intranet.file_2');
    }
    public function file3() {
        return view('Admin.intranet.file_3');
    }
    public function file4() {
        return view('Admin.intranet.file_4');
    }
}