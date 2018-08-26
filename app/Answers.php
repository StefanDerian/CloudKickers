<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    //
    protected $table = 'answers';


    /**
     * Get the answers record associated with the question.
     */
    public function questions()
    {
        return $this->hasOne('App\Questions','question_id');
    }
}
