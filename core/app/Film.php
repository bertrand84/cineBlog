<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model{
    protected $table = "film";

    //EVITE L'ERREUR 1054
     public $timestamps = false;
}