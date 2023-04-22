<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function list()
    {
        return view('jobs.list', [
            'jobs' => Job::all()
        ]);
    }

    public function addForm()
    {
        return view('jobs.add', [
        ]);
    }

    public function add()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'started' => 'required',
            'ended' => 'required',
        ]);

        $job = new Job();
        $job->title = $attributes['title'];
        $job->company = $attributes['company'];
        $job->location = $attributes['location'];
        $job->started = $attributes['started'];
        $job->ended = $attributes['ended'];
        $job->save();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been added!');
    }

    public function editForm(Job $job)
    {
        return view('Jobs.edit', [
            'job' => $job,
        ]);
    }

    public function edit(Job $job)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'started' => 'required',
            'ended' => 'required',
        ]);

        $job->title = $attributes['title'];
        $job->company = $attributes['company'];
        $job->location = $attributes['location'];
        $job->started = $attributes['started'];
        $job->ended = $attributes['ended'];
        $job->save();

        return redirect('/console/jobs/list')
            ->with('message', 'Job has been edited!');
    }

    public function delete(Job $job)
    {
        $job->delete();
        
        return redirect('/console/jobs/list')
            ->with('message', 'job has been deleted!');        
    }
}
