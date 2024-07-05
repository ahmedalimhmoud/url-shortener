<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'urls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['url', 'slug', 'ip_address'];

    /**
     * Interact with the user's password.
     */
    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => url('shorten/' . $value)
        );
    }
}
