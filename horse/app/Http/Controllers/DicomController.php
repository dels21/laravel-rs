<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DicomController extends Controller
{
    public function index()
    {
        return view('user.profile');
    }
}