<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomData;


class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('custom_data');
    }
    public function index(Request $request)
    {
        $custom_data = CustomData::all();
        return view('custom_data',["custom_data" => $custom_data]);
    }
}
