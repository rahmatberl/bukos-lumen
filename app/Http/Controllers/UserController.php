<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $this->validate($request, [
            'phoneNum' => 'numeric|required',
            'password' => 'required'
        ]);

        $credentials = request(['phoneNum', 'password']);
        if (!Auth::attempt($credentials)) {}

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'phoneNum' => 'required|numeric',
            'password' => 'required|string|min:6',
            'userLevel' => 'required|numeric'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNum' => $request->phoneNum,
            'password' => Hash::make($request->password),
            'userLevel' => $request->userLevel
        ]);

        $user = User::where('email', $request->email)->first();
        //$user = User::where('phoneNum', $request->phone)->second();

       // $tokenResult = $user->createToken('authToken')->plainTextToken;
        
        return response([
            // 'access_token' => $tokenResult,
            // 'token_type' => 'Bearer',
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
