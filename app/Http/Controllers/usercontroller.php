<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function registration()
    {
        return view("registration") ;
    }
    public function registration_code()
    {
        return view("registration_code") ;
    }
    public function login()
    {
        return view("login") ;
    }
    public function login_code()
    {
        return view("login_code") ;
    }
    public function all_user_settings()
    {
        return view("all_user_settings") ;
    }
    public function homepage_admin()
    {
        return view("homepage_admin") ;
    }
    public function homepage_teacher()
    {
        return view("homepage_teacher") ;
    }
    public function homepage()
    {
        return view("homepage") ;
    }
    public function problem_settings()
    {
        return view("problem_settings") ;
    }
    public function probsettings_code()
    {
        return view("probsettings_code") ;
    }
    public function coursesettings()
    {
        return view("coursesettings") ;
    }
    public function course_code()
    {
        return view("course_code") ;
    }
    public function contest_setup()
    {
        return view("contest_setup") ;
    }
    public function contest_code()
    {
        return view("contest_code") ;
    }
    public function update_user_code()
    {
        return view("update_user_code") ;
    }
    public function show_all_user()
    {
        return view("show_all_user") ;
    }

}
