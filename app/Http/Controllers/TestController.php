<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index()
    {
        $jsonData = Storage::get('data.json');

        $data = json_decode($jsonData);

        $dataCollection = collect($data);

        //TODO: Convert to Eloquent model


        return view('welcome', ['data'=>$dataCollection]);
    }
}
