<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use App\Address;
use Auth;

class YourAccountController extends Controller
{
	public function loginsecurity(){

		$users = User::find(Auth::user()->id)->id;

		$this->validate(request(),[
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed'
			]);

		User::where('id',$users)->update(request(['name','email','password']));
		 // =>  Hash::make('password')
		// create(request(['name','email','password']))

		return redirect('/your-account');
	}

	public function addresses(){
		$users = User::find(Auth::user()->id)->addresses;
		return view('Boot.addresses', compact('users'));
	}

	public function addressesadd(){
		// dd(request()->all());
		$this->validate(request(),[
			'user_id' => 'required',
			'pincode' => 'required|numeric|digits:6',
			'address' => 'required',
			'city' => 'required',
			'state' => 'required'
			]);
		Address::create(request(['user_id','pincode','address','city','state']));
		\Session::flash('message.level', 'success');
		\Session::flash('message.content','Address added Successfully !!!');
		return back();
	}

	public function addressesupdate($userId, $id){

		$this->validate(request(),[
			'user_id' => 'required',
			'pincode' => 'required|numeric|digits:6',
			'address' => 'required',
			'city' => 'required',
			'state' => 'required'
			]);

		Address::where('user_id',$userId)->where('id',$id)->update(request(['name','email','password']));
		return $addresses;
		return view('', compact('users'));
	}
}
