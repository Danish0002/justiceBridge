<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function legalAid()
    {
        return view('legal-aid');
    }

    public function rehabilitation()
    {
        return view('rehabilitation');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function awareness()
    {
        return view('awareness');
    }
}
