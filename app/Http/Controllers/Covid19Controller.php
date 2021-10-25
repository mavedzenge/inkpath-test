<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Covid19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // making api call to get covid data back
        $json = Http::get('https://akashraj.tech/corona/api');

        // decoding json string
        $response = json_decode($json);

        return view('covid19', ['response' => $response]);
    }
}
