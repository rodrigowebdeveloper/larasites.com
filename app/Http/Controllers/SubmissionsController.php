<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Submission;

class SubmissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function showSubmissions(Request $request)
    {
        $submissions = Submission::orderBy('created_at', 'desc')
            ->has('extraction')
            ->with('user', 'extraction')
            ->take(10)
            ->get();

        return view('submissions', compact('submissions'));
    }
}