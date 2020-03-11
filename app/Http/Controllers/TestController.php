<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class TestController extends Controller
{
    public function index()
    {
        $jsonData = file_get_contents(base_path('/resources/upload/data.json'));

        $data = json_decode($jsonData);

        $dataCollection = collect($data);

        return view('welcome', ['data'=>$dataCollection]);
    }
}
