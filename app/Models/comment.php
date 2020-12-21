<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'user_id', 'comment', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = true;



    //owner
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
