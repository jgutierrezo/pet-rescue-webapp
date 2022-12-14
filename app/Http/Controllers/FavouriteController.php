<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function edit(Request $request)
    {
        $pets = DB::table('pets')
            ->join('favourites', 'pets.id', '=', 'favourites.pet_id')
            ->join('users', 'pets.user_id', '=', 'users.id')
            ->where('favourites.user_id', $request->user()->id)
            ->select('pets.id','pets.pet_name', 'pets.pet_image', 'pets.gender', 'users.city')
            ->get();
        return view(
            'pets.favourites',
            [
                'user' => $request->user(),
                'pets' => $pets
            ]
        );
    }
}
