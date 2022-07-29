<?php

namespace App\Http\Controllers;

use App\Jobs\TestSendEmail;
use Illuminate\Http\Request;

class TestQueueEmails extends Controller
{
    public function sendTestEmails()
    {
        $this->dispatch(new TestSendEmail());
    }
}
