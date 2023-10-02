<?php

namespace App\Models;

// use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model{
    use HasFactory;

    // the attribute that are mass assignable

    // @var array 

    protected $fillable = [
        'name', 'detail'
    ];
}

