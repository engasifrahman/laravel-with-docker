<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //


    public function A() {
        // Implement method A here
        return 'This is A';
    }

    public function B() {
        // Implement method B here
        return 'This is B';
    }

    public function C() {
        // Implement method C here
        return 'This is C';
    }

    private function C_Helper() {
        // Implement helper method of method C here
    }

    public function D() {
        // Implement method D here
        return 'This is D';
    }
}
