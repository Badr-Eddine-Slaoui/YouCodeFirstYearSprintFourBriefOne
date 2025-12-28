<?php

namespace App\Controllers;

use App\Requests\LoginRequest;
use App\Requests\RegisterRequest;
use Foundations\Controllers\Controller;
use Foundations\Helpers\Auth;
use Foundations\Helpers\Session;
use Foundations\Request\Request;

class AuthController extends Controller {
    public function login() {
        return view("auth.login");
    }

    public function register() {
        return view("auth.register");
    }

    public function registerSubmit(RegisterRequest $request) {
        $data = $request->except(["password_confirmation", "terms"]);
        if(Auth::register($data)) {
            redirect("login");
        } else {
            redirect("register");
        }
    }

    public function loginSubmit(LoginRequest $request) {
        if(Auth::login($request->email, $request->password)) {
            redirect("home");
        } else {
            Session::flash("error","Invalid credentials");
            redirect("login");
        }
    }

    public function logout() {
        if(Auth::logout()) {
            redirect("login");
        } else {
            redirect("home");
        }
    }
}