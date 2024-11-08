<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('about_us');
    }

    public function homePage()
    {
        return view('home_page');
    }

    public function listTour()
    {
        return view('list_tour');
    }

    public function listHotel()
    {
        return view('list_hotel');
    }
}
