<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'uuid',
        'client_id',
        'product_id',
        'rate',
        'opinion'
    ];

    public function client():BelongsTo{
        return $this->belongsTo(Client::class);
    }
}
