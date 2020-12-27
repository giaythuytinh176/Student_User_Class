<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->belongsTo(stdClass::class, "id");
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'class_id',
        'address',
        'phone',
        'birthday',
        'email',
    ];
}
