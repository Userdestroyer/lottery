<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DrawType;

class DrawTypeController extends Controller
{
    public function index () {
        return DrawType::all();
    }
}