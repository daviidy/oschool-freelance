<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title', 'type', 'number_proposals', 'description', 'price'];

    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }
}
