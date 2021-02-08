<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

use App\Http\Requests\Admin\File\ReqInsertFiles;

use App\Helpers\HelpAdmin;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function allFiles() {
        $bar = DIRECTORY_SEPARATOR;

        $inserted_files = File::allFiles(storage_path("app{$bar}public{$bar}inserted_files"));
        $old_files = File::allFiles(storage_path("app{$bar}public{$bar}old_system_images"));
        $full_files = array_merge($inserted_files, $old_files);

        $data['all_files'] = collect($full_files)
        ->filter(function ($file) {
            return in_array($file->getExtension(), ['png', 'jpg', 'jpeg', 'pdf', 'xls', 'docx', 'gif', 'txt']);
            // return $file;
        })
        ->sortByDesc(function ($file) {
            return $file->getCTime();
        })
        ->map(function ($file) use($bar) {
            $bar = DIRECTORY_SEPARATOR;
            $filtered_name = str_replace("app{$bar}public{$bar}", '', strstr($file->getPathName(), "app{$bar}public"));

            $new_name = str_replace('\\', '/', $filtered_name);
            $full_path = asset(HelpAdmin::getStorageUrl().$new_name);

            $pathinfo = pathinfo($full_path);
            $pathinfo['path_name'] = $file->getPathName();
            $pathinfo['full_path'] = $full_path;
            $pathinfo['filtered_name'] = $filtered_name;
            return $pathinfo;
        });
        // dd($data['all_files'][0]);
        
        return view('Admin.files.all_files', compact('data'));
    }

    public function insertFiles(ReqInsertFiles $req) {
        $data = $req->all();
        
        // dd($data);

        foreach ($data['new_files'] as $key => $file) {
            $path_info = pathinfo($file->getClientOriginalName());
            $filename_slug = str_slug($path_info['filename']).".{$path_info['extension']}";

            $file_path = 'inserted_files/'.date('Y').'/'.date('m');
            $file->storeAs($file_path, $filename_slug);
        }
        
        session()->flash('notification', 'success:'.count($data['new_files']).' novo(s) arquivos foram inseridos!');
        return redirect()->route('adm.files.all_files');
    }

    public function alert(Request $req) {
        $data = $req->all();

        $file = pathinfo($data['path']);
        $file['path'] = $data['path'];

        return view('Admin.files.alert', compact('file')); 
    }
    public function delete(Request $req)
    {
        $data = $req->all();
        
        Storage::delete($data['path']);

        session()->flash('notification', 'success:Arquivo excluido!');
        return redirect()->route('adm.files.all_files');
    }
}
