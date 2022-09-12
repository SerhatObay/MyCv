<?php

namespace App\Http\Controllers;

use App\Models\Messages;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $message=Messages::where('read',0)->orderBy("created_at","DESC");
        return view('backend.index');
    }
}
