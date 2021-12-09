<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;


class TestController extends Controller
{

    public function test1(){

        return Http::get('https://test.itc-benchmarking.edw.ro/api/v1/countries?page=0');
    }

    public function test2(){

        return Http::get('https://test.itc-benchmarking.edw.ro/api/v1/bso-types?page=0');
    }

    public function test3(){

        return Http::get('https://test.itc-benchmarking.edw.ro/api/v1/institutions?page=0&changed=2021-05-30&country=114&country_iso2=IT&country_iso3=ITA&bso_type=271&id=162');
    }

}
