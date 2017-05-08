<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TeacherController extends Controller
{
    public function index(){
    	return view('backend.pages.teacher.teacher');
    }

    public function getListTeacher(){
        $list_user = DB::table('teacher')->get();
        return $list_user;
    }

    public function getAddTeacher(){
    	return view('backend.pages.teacher.add');
    }
}
