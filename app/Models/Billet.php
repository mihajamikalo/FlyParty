<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'email',
        'phone',
        'NbrTicket',
        'demande',

    ];


}
