<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'TEST ROUTE';
    }
    public function store(Request $request)
    {
        return 'TEST ROUTE POST';
    }
}
