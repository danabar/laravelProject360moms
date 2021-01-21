<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function path()
    {
        return url('/category/' . $this->id);
    }

    public function to_do_lists ()
    {
        return $this->hasMany(to_do_lists::class);
    }

}
