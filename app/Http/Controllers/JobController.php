<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
      $title = 'Create New Job';
      return view('jobs.create', compact('title') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
