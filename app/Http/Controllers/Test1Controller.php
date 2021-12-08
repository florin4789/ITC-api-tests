<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;


class Test1Controller extends Controller
{

    public function test1(){

        return Http::get('https://test.itc-benchmarking.edw.ro/api/v1/countries?page=0');
    }

}
