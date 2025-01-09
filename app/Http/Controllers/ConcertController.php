<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
{
    $concerts = Concert::with('bands')->get();
    return view('concerts.index', compact('concerts'));
}

public function show($id)
{
    $concert = Concert::with('bands')->findOrFail($id);
    return view('concerts.show', compact('concert'));
}
}
