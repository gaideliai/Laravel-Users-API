<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Format and display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request = Http::get(config('services.users.base_URL'));    

        if (0 === strpos($request->header('Content-Type'), 'application/json')) {
            $users = $request->json(['users']);

            $usersFormatted['users'] = [];

            foreach ($users as $user) {
                array_push(
                    $usersFormatted['users'], 
                    ['full_name' => $user['first_name'].' '.$user['last_name']]
                );
            }
        }

        return $usersFormatted;
    }    
}
