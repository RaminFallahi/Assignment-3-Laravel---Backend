<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationsController extends Controller
{
    public function list()
    {
        return view('educations.list', [
            'educations' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('educations.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'school' => 'required',
            'level' => 'required',
            'title' => 'required',
            'started' => 'required',
            'ended' => 'required',
        ]);

        $education = new Education();
        $education->school = $attributes['school'];
        $education->level = $attributes['level'];
        $education->title = $attributes['title'];
        $education->started = $attributes['started'];
        $education->ended = $attributes['ended'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('educations.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {
        $attributes = request()->validate([
            'school' => 'required',
            'level' => 'required',
            'title' => 'required',
            'started' => 'required',
            'ended' => 'required',
        ]);

        $education->school = $attributes['school'];
        $education->level = $attributes['level'];
        $education->title = $attributes['title'];
        $education->started = $attributes['started'];
        $education->ended = $attributes['ended'];
        $education->save();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been updated!');
    }

    public function delete(Education $education)
    {
        $education->delete();

        return redirect('/console/educations/list')
            ->with('message', 'Education has been deleted!');
    }
}
