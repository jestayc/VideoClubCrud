<?php

namespace sysMovie;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='tbl_movie';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
        'title',
        'year',
        'director',
        'poster',
        'rented',
        'synopsis',
        'timestamps'

    ];
}
