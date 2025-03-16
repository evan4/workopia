<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(): View
    {
      $title = 'Available Jobs';
      $jobs = [
        'Web developer',
        'Database Admin',
        'Software Engineer'
      ];
      return view('jobs.index', compact('title', 'jobs') );
    }

    public function create(): View
    {
      $title = 'Create New Job';
      return view('jobs.create', compact('title') );
    }
    
    public function show(string $id): View
    {
      return view('jobs.show', compact('id') );
    }

    public function store(Request $request)
    {
     $title = $request->input('title');
     return "title - $title";
    }
    
}
