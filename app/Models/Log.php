<?php

namespace App\Models;

use App\Listeners\LogDeleted;
use App\Listeners\LogSaved;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Log extends Model
{
    use HasFactory, Notifiable;

    protected $dispatchesEvents = [
        'saved' => LogSaved::class,
        'deleted' => LogDeleted::class,
    ];
}
