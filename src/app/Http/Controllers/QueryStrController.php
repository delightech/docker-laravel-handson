<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryStrController extends Controller
{
    public function index(Request $request) {
        $data = [
            'msg' => '',
            'id' => $request->id
        ];
        return view('queryStr.index', $data);
    }
}
