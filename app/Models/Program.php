<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    use HasFactory;

    public function academy(): BelongsTo
    {
        return $this->belongsTo(Academy::class);
    }

    public function signatureProgram(): HasMany
    {
        return $this->hasMany(SignatureProgram::class);
    }
}
