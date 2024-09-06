<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title','board_id'];

    protected $hidden = [
        'created_at',
        'update_at',
    ];
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

}
