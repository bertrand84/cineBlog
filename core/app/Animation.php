<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Animation extends Model{
    protected $table = "animation";

    //EVITE L'ERREUR 1054
     public $timestamps = false;
}