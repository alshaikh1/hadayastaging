<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ManyRetrieve;

class OccasionProducts extends Model
{
    // Table Name
    protected $table = 'hd_products';
    // Primary Key
    public $primaryKey = 'id';
	
    // Timestamps
    //public $timestamps = true;

    public function occasionproductsretrieve($id){
        //return $this->belongsTo('App\User');
		//return $this->belongsTo('App\ManyRetrieve');
		//return $this->hasMany('App\ManyRetrieve', $id);		
		//return $this->hasMany("App\ManyRetrieve", "occ_id", "product_id");
		//return $this->hasMany("App\ManyRetrieve::occasionproductsretrieve()", "occ_id", "id");
		//$manyRetrieve = new ManyRetrieve();
		//$OccasionProducts = $manyRetrieve->load('1');
		//return $this->hasMany('App\ManyRetrieve');
    }
	
}
