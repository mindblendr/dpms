<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use App\Models\User;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class AuthController extends Controller
{

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show()
	{
		$user = User::find(auth()->id());
		return response([
			'data' => $user,
			'status' => 1
		]);
	}

	/**
	 * Store a newly created user.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$fields = $request->validate([
			'name' => 'required|string',
			'username' => 'required|string|unique:users,username',
			'email' => 'required|string|unique:users,email',
			'password' => 'required|string|confirmed',
			'user_type' => 'string',
			'subdomain' => 'string',
		]);

		$user = User::create([
			'name' => $fields['name'],
			'username' => $fields['username'],
			'email' => $fields['email'],
			'password' => bcrypt($fields['password']),
			'user_type' => $fields['user_type'] ?? 'dentist',
			'subdomain' => $fields['subdomain'] ?? null,
		]);

		$token = $user->createToken('myapptoken')->plainTextToken;

		$response = [
			'user' => $user,
			'token' => $token
		];

		if ($user->user_type == 'admin') {
			$user->markEmailAsVerified();
		} else {
			event(new Registered($user));
		}

		return response($response, 201);
	}

	/**
	 * Update the specified user.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request)
	{
		$fields = $request->validate([
			'name' => 'string',
			'email' => 'string|unique:users,email',
			'password' => 'string|confirmed',
			'subdomain' => 'string',
		]);

		$user = User::find(auth()->id());
		return response([
			'status' => $user->update($fields) ? 1 : 0
		]);
	}

	public function login(Request $request)
	{
		$fields = $request->validate([
			'username' => 'required|string',
			'password' => 'required|string',
		]);
		
		// Email check
		$user = User::where(['username' => $fields['username'], 'status' => 1])->first();
		
		// Password check
		if (!$user || !Hash::check($fields['password'], $user->password)) {
			return response([
				'message' => 'Login failed!'
			], 401);
		}

		$token = $user->createToken('myapptoken')->plainTextToken;

		$response = [
			'user' => $user,
			'token' => $token
		];

		return response($response, 201);
	}

	public function logout(Request $request)
	{
		auth()->user()->tokens()->delete();
		return response([
			'message' => 'Logged out!'
		]);
	}
}
