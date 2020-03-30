<?php

namespace Ayorindecodes\Requestlogger\Entity;

use Illuminate\Database\Eloquent\Model;

class RequestLogger extends Model
{
    /**
     * The attributes that are mass assignable.
     *  @var array
     */
    protected $fillable= [
        'url', 'method', 'ip', 'agent', 'header_token', 'user_id', 'payload_request', 'payload_response', 'duration'
    ];
}
