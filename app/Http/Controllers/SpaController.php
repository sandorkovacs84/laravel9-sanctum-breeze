<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class SpaController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Spa/Index', [

        ]);
    }
}
