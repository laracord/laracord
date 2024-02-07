<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'username',
        'discord_id',
        'is_admin',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string>
     */
    protected $casts = [
        'is_admin' => 'boolean',
    ];

    /**
     * The highlighted Discord ID.
     *
     * @return string
     */
    public function getHighlightAttribute()
    {
        return "<@{$this->discord_id}>";
    }
}
