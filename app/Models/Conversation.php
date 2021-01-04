<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_id', 'to_id'
    ];

    public function from()
    {
        return $this->belongsTo('App\Models\User', 'from_id');
    }

    public function to()
    {
        return $this->belongsTo('App\Models\User', 'to_id');
    }
}
