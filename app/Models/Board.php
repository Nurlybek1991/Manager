<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = ['title','user_id'];

    protected $hidden = [
        'created_at',
        'update_at',

    ];
//    public function tasks()
//    {
//        return $this->HasMany(Task::class)->orderBy('sort');
//    }

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
