<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';
    public $timestamps = FALSE;
    
}
