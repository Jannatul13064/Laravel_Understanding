<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //what are the possibilities! in Model.
    // protected $table = 'abc';

    protected $table = 'products';
    protected $fillable = ['name', 'price', 'quantity', 'created_at', 'updated_at']; ///insert to the DB permission

    // protected $primarykey = 'id';

    // protected $keytype = 'string';

    // public $incrementing = false;


    public function user()
    {

        // return $this->hasOne(User::class, 'products_id', 'id'); -->Why its not worked properly?
        return $this->hasOne(User::class, 'id');
    }
}