<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
