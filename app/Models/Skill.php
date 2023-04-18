<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//for the relationship between the Skill and project models
use Illuminate\Database\Eloquent\Relations\HasMany;


class Skill extends Model
{
    use HasFactory;
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
