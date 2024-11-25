<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
	{
		$user = User::get();

		return view('user.index', ['user' => $user]);
	}

	public function tambah()
	{

		return view('user.form');
	}

	public function simpan(Request $request)
	{
		$data = [
			'nama' => $request->nama,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'level' => $request->level,
		];

		user::create($data);

		return redirect()->route('user');
	}

	public function edit($id)
	{
		$user = user::find($id);

		return view('user.form', ['user' => $user]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'nama' => $request->nama,
			'email' => $request->email,
			'level' => $request->level,
		];

		user::find($id)->update($data);

		return redirect()->route('user');
	}

	public function hapus($id)
	{
		user::find($id)->delete();

		return redirect()->route('user');
	}
}
