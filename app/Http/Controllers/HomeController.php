<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//設定回傳預設首頁
class HomeController extends Controller
{
    public function index()
    {
returnview('welcome');
}
}


