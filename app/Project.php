<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
}
