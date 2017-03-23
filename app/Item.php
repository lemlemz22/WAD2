<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateItemsTable extends Model
{
    public $fillable = ['title','description'];
}
