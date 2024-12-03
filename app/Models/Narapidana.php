<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narapidana extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $table = 'narapidana';
    protected $fillable = [
        'name',
        'age',
        'gender',
        'case',
        'sentence',
        'created_at',
        'updated_at'
    ];

    public function violation(){
        return $this->belongsTo(CaseViolation::class, 'case');
    }
}
