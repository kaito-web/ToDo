<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;


class Folder extends Model
{
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

}
