<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
//    protected $table = 'tasks';
        protected $fillable = ['task', 'user_id']; // for security purposes,

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
