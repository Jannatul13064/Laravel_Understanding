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


    public function user_one_to_one()
    {

        return $this->hasOne(User::class, 'products_id', 'id');
        // return $this->hasOne(User::class, 'id');
    }
    public function user_one_to_many()
    {
        return $this->hasMany(User::class, 'products_id', 'id');
    }

    public function many_to_many()
    {
        return $this->belongsToMany(User::class, 'product_user', 'product_id', 'user_id');
    }
}
