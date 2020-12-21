<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'user_id', 'content'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\comment', 'post_id', 'id');
    }
}
