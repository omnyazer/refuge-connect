<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function createStatic()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chat',
            'age' => 2,
            'description' => 'Coquillette est un chat joueur et affectueux.',
            'photo' => '/images/coquillette.jpg', 
        ]);

        return redirect()->route('animals.index');
    }

    public function editStatic(int $id)
    {
        $animal = Animal::findOrFail($id);

        $animal->update([
            'name' => $animal->name.' modifié',
        ]);

        return redirect()->route('animals.index');
    }

    public function delete(int $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('animals.index');
    }

    public function show(int $id)
    {
        $animal = Animal::findOrFail($id);

        return view('animals.show', [
            'animal' => $animal,
        ]);
    }
}
