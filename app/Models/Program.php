<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Episode; // Episodeクラスをインポート

class Program extends Model
{
    // use HasFactory;
    protected $fillable = ['name', 'description'];

    // ここにepisodes関連関係を定義
    public function episodes()
    {
        return $this->hasMany(Episode::class); // これでEpisodeクラスが定義されていることが認識される
    }
}
