<?php

namespace App\Http\Controllers\SiteOne;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class SiteOneController extends Controller
{
    public function home()
    {
        return view('SiteOne.home');
    }
    public function Services()
    {
        return view('SiteOne.Services');
    }

    public function Portfolio()
    {
        return view('SiteOne.Portfolio');
    }

    public function about()
    {
        return view('SiteOne.about');
    }
    public function Team()
    {
        return view('SiteOne.Team');
    }


    public function contact()
    {
        return view('SiteOne.contact');
    }

   function postcontact(Request $request)  {
    dd($request-> all());
   }
}

