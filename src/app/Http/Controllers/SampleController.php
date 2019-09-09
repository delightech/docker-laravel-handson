<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    // http://localhost:10080/sample
    public function index() {
        return "<html><body><h1>Sample!</h1></body></html>";
    }

    // http://localhost:10080/sample/test/aaa
    public function test($no='no param') {
        return "<html><body><h1>Sample!test!${no}</h1></body></html>";
    }
}
