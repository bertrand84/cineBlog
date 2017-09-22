<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Actudvd extends Model{
    protected $table = "actudvd";

    //EVITE L'ERREUR 1054
    public $timestamps = false;
}