<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Channels;

class Videos extends Model
{
    use HasFactory;

    public function channel(){
        return $this->belongsTo(Channels::class);
    }
}
