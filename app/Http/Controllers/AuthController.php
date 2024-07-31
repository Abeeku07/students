<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function getLoginPage()
        {
            return view ('auth.login');
        }

    /*  public function getIndexPage()
        {
            return view ('students.index');
        } */

    public function getCoursePage()
        {
            return view ('courses.login');
        }

}