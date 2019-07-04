<?php

namespace Project383\Google2fa\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class User2fa
 * @package Project383\Google2fa\Models
 */
class User2fa extends Model
{
    /**
     * @var string
     */
    protected $table   = 'user_2fa';

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(config('383project2fa.models.user'));
    }
}