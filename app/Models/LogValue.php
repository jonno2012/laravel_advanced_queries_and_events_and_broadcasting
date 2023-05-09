<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Events\LogSaved;
use App\Events\LogDeleted;

class LogValue extends Model
{
    use HasFactory, Notifiable;

    protected $dispatchesEvents = [
        'saved' => LogSaved::class,
        'deleted' => LogDeleted::class,
    ];
}
