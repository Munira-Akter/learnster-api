<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$this->router->get('/', fn () => response()->json([
    'name' => config('app.name'),
    'version' => config('app.version'),
    'front_end_url' => config('app.front_end_url'),
]));
