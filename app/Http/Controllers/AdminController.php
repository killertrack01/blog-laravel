<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
}
