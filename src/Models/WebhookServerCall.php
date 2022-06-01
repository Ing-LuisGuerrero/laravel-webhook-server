<?php

namespace Spatie\WebhookServer\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $url
 * @property array|null $headers
 * @property array|null $payload
 * @property string|null $exception
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class WebhookServerCall extends Model
{
    use HasFactory;

    protected $casts = [
        'headers' => 'array',
        'payload' => 'array',
    ];
}
