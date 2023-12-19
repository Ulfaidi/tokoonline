<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function profil()
    {
        $user = auth()->user();
        $customer = $user->customer; // Ganti dengan hubungan yang sesuai pada model User
        return view('website.profil', compact('user', 'customer'));
    }
    
}
