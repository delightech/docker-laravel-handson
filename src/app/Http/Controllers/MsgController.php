<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function index($id=1) {
      $data = [
        'msg' => 'From server-side',
        'id'  => $id
      ];
      return view('msg.index', $data);
    }
}
