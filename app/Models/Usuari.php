<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    public $timestamps = true;
    use HasFactory;
    protected $table = 'tl_carvil';
    protected $fillable = [
        'id',
        'nom',
        'cognoms',
        'email',
        'timestamps',
    ];}
