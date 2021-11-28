<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DentistController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$users = User::paginate();
		return response([
			'data' => $users,
			'status' => 1
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		return response([
			'data' => $user,
			'status' => 1
		]);
	}

	/**
	 * Update the specified user.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param $user
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$user = User::find($id);
		return response([
			'status' => $user->update($request->all()) ? 1 : 0
		]);
	}


	/**
	 * Remove the specified user.
	 *
	 * @param $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		return response([
			'status' => $user->delete() ? 1 : 0
		]);
	}
}
