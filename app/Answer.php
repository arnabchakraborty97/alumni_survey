<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $primaryKey = 'id';
    public $timestamps = true;

    public function question() {
    	return $this->belongsTo('App\Question');
    }

    public function survey() {
    	return $this->belongsTo('Survey');
    }
}
