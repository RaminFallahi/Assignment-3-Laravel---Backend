<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class skillsController extends Controller
{
    public function list()
    {
        return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }

    public function addForm()
    {
        return view('skills.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'level' => 'required',
        ]);

        $skill = new Skill();
        $skill->title = $attributes['title'];
        $skill->level = $attributes['level'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been added!');
    }

    public function editForm(Skill $skill)
    {
        return view('skills.edit', [
            'skill' => $skill,
        ]);
    }

    public function edit(Skill $skill)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'level' => 'required',
        ]);

        $skill->title = $attributes['title'];
        $skill->level = $attributes['level'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been updated!');
    }

    public function delete(Skill $skill)
    {
        $skill->delete();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');
    }
}
