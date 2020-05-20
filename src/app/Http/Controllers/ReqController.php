<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReqController extends Controller
{
    public function index(Request $req, Response $res) {
        echo $req->url()."<br>";
        echo $req->fullUrl()."<br>";
        echo $req->path()."<br>";

        echo $res->status()."<br>";
        echo $res->setContent("Aaaa")."<br>";
        echo $res->content()."<br>";
    }
}
