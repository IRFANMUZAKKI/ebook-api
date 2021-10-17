<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119094',
            'Nama' => 'Irfan Muzakki',
            'Gender' => 'Laki - laki',
            'Phone' => '081391593984',
            'Class' => 'XII RPL 3'
        ]);
}


}