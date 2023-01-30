<?php

namespace App\Http\Controllers;

use App\TbsMasuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index(Request $request)
	{
		$tbsMasuk = TbsMasuk::get()->count();
		$view = [
			'title'			=> 'Dashboard',
		];

		return view('admin.pages.dashboard.index')->with($view);
	}
}
