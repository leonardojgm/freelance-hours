<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    //public function index(Request $request)
    {
        //return self::class;
        //return WelcomeController::class;
        //return view('welcome');

        // $user = User::query()->create([
        //     'name' => 'Rafael',
        //     'email' => 'rafael@email.com',
        //     'password' => 'jeremias',
        // ]);

        $user = User::find(1);

        //var_dump($user);

        //dump($user);
        //die();

        //dd($user);

        //$user->email_verified_at = now()->subMonths(10);
        //$user->save();
        //$user->update(['email_verified_at' => now()->subMonths(10)]);

        //dd($user->email_verified_at->diffForHumans());

        //Auth::login($user);

        //Auth::logout();

        //return view('teste.jeremias');
        return view('welcome');
    }
}
