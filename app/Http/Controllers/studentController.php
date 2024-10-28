<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function viewFrom(){
        return view('student-reg');
    }
    public function addStudent(){
}
}