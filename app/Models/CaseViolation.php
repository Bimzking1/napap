<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseViolation extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $keyType = "int";

    protected $table = "case_violations";
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function prisoner(): HasMany {
        return $this->hasMany(Narapidana::class);
    }
}
