<?php

namespace App\Models;

use Auth;
use App\Models\User;
use App\Models\Message;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function chatWith($user_id)
    {
        if (Auth::id() < $user_id) {
            $conversation = Conversation::where('from_id', Auth::id())
                                        ->where('to_id', $user_id)
                                        ->first();

            return Message::where('conversation_id', $conversation->id)
                            ->get();
        }
        
        $conversation = Conversation::where('from_id', $user_id)
                                    ->where('to_id', Auth::id())
                                    ->first();

        return Message::where('conversation_id', $conversation->id)
                        ->get();
    }
}
