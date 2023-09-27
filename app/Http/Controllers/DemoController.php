<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Inertia\Inertia;

class DemoController extends Controller
{
    public function index()
    {
        return Inertia::render('app/Index', [
            'datas' => [
                'id' => 'demo_id',
                'first_name' => 'first',
                'last_name' => 'last',
            ]
        ]);
    }
}
