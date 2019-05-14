<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'name', 'email', 'age','phone','DG','about',

        ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
