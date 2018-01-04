<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class UnidelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function digital_electronics()
    {
        return view('frontend.digital_electronics');
    }

    public function electroslush()
    {
        return view('frontend.electroslush');
    }
    public function matrikon_softdel()
    {
        return view('frontend.matrikon_softdel');
    }
    public function ssd_drives()
    {
        return view('frontend.ssd_drives');
    }
    public function eurotherm_del()
    {
        return view('frontend.eurotherm_del');
    }

  }
