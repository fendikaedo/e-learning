<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    public $timestamps = false;

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class,'jabatan_id');
    }
}
