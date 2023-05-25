<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'is_complete',
    ];

    protected $guard = [
        'id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
