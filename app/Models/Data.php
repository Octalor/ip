<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Data extends Model
{
    use HasFactory, Notifiable;
    
    protected $fillable = [
        'organisation',
            'rubric',
            'description',
            'role',
            'timedata',
            'montant',
            'account',
            'tranche',
            'notes',
    ];
}
