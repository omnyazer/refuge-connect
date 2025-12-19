<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
 public function createStatic()
{
    Animal::create([
        'name'        => 'Coquillette',
        'species'     => 'Chien',
        'age'         => 3,
        'description' => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
        'photo'       => '/images/coquillette.png', 
    ]);

    return redirect()->route('home');
}


    public function editStatic(int $id)
    {
        $animal = Animal::findOrFail($id);

        $animal->update([
            'name' => $animal->name . ' modifié',
        ]);

        return redirect()->route('home');
    }

    public function delete(int $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }

    public function show(int $id)
    {
        $animal = Animal::findOrFail($id);

        return view('pages.show', [
            'animal' => $animal,
        ]);
    }
}
