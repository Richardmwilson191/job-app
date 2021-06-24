<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use App\Models\JobLocation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPosts = JobPosts::orderBy('created_at', 'desc')->get();
        return Inertia::render('Jobs/Index', [
            'jobPosts' => $jobPosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Jobs/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $this->validate($request, [
            'title' => 'required',
            'jobtype' => 'required',
            'description' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'street' => 'required',
        ]);

        $jobPost = JobPosts::create([
            'title' => $request->input('title'),
            'posted_by_id' => auth()->user()->id,
            'job_type' => 1,
            'job_location_id' => 1,
            'description' => $request->input('description'),
        ]);

        JobLocation::create([
            'id' => $jobPost->id,
            'street_address' => $request->input('street'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
        ]);



        return redirect('jobs/create')
            ->with('message', 'Your post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
