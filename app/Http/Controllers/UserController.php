<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tampilan; // Pastikan ini mengarah ke model yang benar

class UserController extends Controller
{
    public function index()
    {
        $tampilans = Tampilan::all();
        return view('tampilan', compact('tampilans'));
    }
}
