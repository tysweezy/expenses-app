<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expense';

    public function project()
    {
        $this->belongsTo('App\Project');
    }
}
