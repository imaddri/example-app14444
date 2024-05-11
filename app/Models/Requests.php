<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $primaryKey = 'id';
    protected $fillable = [
    'Registration_number',
    'request_type',
    'reponce_type',
    'reason_of_rejecting_negative_request',
    'fils','request_accept',
    'request_no_accept',
];
}