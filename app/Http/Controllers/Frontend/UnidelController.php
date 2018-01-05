<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Profile;


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
        $data = Profile::find('2');
        return view('frontend.digital_electronics')
                         ->with('data',$data);
    }

    public function electroslush()
    {
        $data = Profile::find('1');
        
        return view('frontend.electroslush')
                    ->with('data',$data);
    }
    public function matrikon_softdel()
    { 
        $data = Profile::find('3');
        return view('frontend.matrikon_softdel')
                    ->with('data',$data);
    }
    public function ssd_drives()
    {
        $data = Profile::find('4');
        return view('frontend.ssd_drives')
                ->with('data',$data);
    }
    public function eurotherm_del()
    {
        $data = Profile::find('5');
        return view('frontend.eurotherm_del')
                  ->with('data',$data);
    }

    public function land_del_infrared()
    {
        return view('frontend.land_del_infrared');
    }
    

  }
