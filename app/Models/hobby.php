<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class hobby extends Model
{
    use HasFactory;

    // BelongsTo使用單數
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
