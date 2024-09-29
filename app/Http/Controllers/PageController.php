<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }
    public function home()
    {
        return view("pages.home");
    }
    public function contact(){
        return view("pages.contact");
    }


    

    public function transcedence()
    {
        return view("pages.transcedence");
    }

    public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }
    public function vision()
    {
        return view("pages.vision");
    }
    
    public function showRotatingPages()
{
    return view('pages.works');
}


    public function signup()
    {
        return view("pages.sign-up-static");
    }
    public function aboutUs()
    {
        return view("pages.aboutUs");

}
}