<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class QueueTestController extends Controller
{
    public function send()
    {
        SendEmailJob::dispatch('test@example.com');
        return 'Dispatched!';
    }
}
