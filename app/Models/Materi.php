<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';
    public $timestamps = false;

    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class,'mapel_id');
    }
}
