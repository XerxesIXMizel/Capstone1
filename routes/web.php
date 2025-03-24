<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HTMLcontroller;

route::get('/',[HTMLcontroller::class, 'index']);