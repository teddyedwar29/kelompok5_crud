<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function userPage() {
        return view('user.user');
    }
    public function homeGuest() {
        return view('guest.homeGuest');
    }
}
