<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        dd($googleUser->getAvatar());
        $data = User::Where('email', $googleUser->email)->first();
        if($data){
            Auth::login($data);
            return redirect()->route('/');
        }else{
            $data = User::create([
                 'name' => $googleUser->name,
                 'email'=>$googleUser->email,
                 'password'=>'default_password',
                 'role' => 'user',
                 'avatar' => $googleUser->avatar,
            ]);
            Auth::login($data);
            return redirect()->route('/');
        }


    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(User $user)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(User $user)
    // {
    //     //
    // }
}
