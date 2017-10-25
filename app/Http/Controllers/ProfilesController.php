<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Activity;

class ProfilesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profiles.show', [
          'profileUser' => $user,
          'activities' => Activity::feed($user)
        ]);
    }

}
