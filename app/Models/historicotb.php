<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historicotb extends Model
{
    use HasFactory;
    protected $fillable = ['nomeFK','colesterol_HDL','colesterol_LDL','glicemia','pressao'];
}
