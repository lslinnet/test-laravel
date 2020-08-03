<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index() {
        $urls = Url::query()->orderBy('id', 'desc')->get();
        return view("index", ['urls' => $urls]);
    }
}
