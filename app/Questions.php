<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected $table = 'questions';

    /**
     * Get the answers record associated with the question.
     */
    public function answers()
    {
        return $this->hasMany('App\Answers','question_id');
    }




}
