<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefNota extends Model
{
    use HasFactory;
    protected $table = 'ref_nota';
    protected $connection = 'sqlite';
}
