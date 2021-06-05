<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter152 extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $primarykey = 'dokter_id';
    // protected $keytype = 'string';
    protected $fillable = [
        'id',
        'nama',
        'jabatan',
    ];
}
