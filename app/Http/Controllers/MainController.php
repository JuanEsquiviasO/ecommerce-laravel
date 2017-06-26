<?php

namespace App\Http\Controllers;

use Iluminate\Http\Requesr;

use App\Http\Request;

class MainController extends Controller {
	public function home() {
		return view('main.home', ["name" => "Fokker"]);
	}
}