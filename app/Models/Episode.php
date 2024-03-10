<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // use HasFactory;
    protected $fillable = ['title', 'description', 'broadcasted_at'];

    // ここにprogram関連関係を定義
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
