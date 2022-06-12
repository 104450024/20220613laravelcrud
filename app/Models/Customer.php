<?php

namespace App\Models;
use IlluminateDatabaseEloquentModel;

use Kyslik\ColumnSortable\Sortable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Sortable;

    protected $fillable=['name','email','address'];

    public $sortable  = ['name', 'email','address'];
}
