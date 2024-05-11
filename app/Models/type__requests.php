<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type__requests extends Model
{
    use HasFactory;
    protected $table = 'type__requests';
    protected $primaryKey = 'id';
    protected $fillable = ['NameRequest',];
}