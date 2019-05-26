<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

public $table ="produits";
public $fillable =["libelle","prix"];

}
