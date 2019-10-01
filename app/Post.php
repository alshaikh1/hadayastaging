<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Post extends Model
{
    // Table Name
    protected $table = 'hd_occasions';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
	public $title = 'login';

    public function products(){
        //return $this->belongsTo('App\User');
//	    return $this->belongsToMany("App\OccasionProducts");

    }
	
}
