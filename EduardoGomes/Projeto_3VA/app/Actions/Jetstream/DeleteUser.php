<?php

namespace App\Actions\Jetstream;

use App\Models\Discipline;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {   
        $disciplines = Discipline::where('user_id', '=', $user->id)->get();
        for ($i=0; $i < sizeof($disciplines); $i++) { 
            $disciplines[$i]->delete();
        }
        $user->delete();
    }
}
