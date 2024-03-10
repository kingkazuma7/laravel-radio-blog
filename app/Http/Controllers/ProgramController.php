<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('episodes.transcripts')->get();
        // dd($programs);
        return view('programs.index', compact('programs'));
    }
}
