<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::latest()->paginate(20);

        return view('animal', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenis' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg|max:2048',
            'audio' => 'audio|audio|mimes:mp3',
            
        ]);


        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/image/';
            $animalImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $animalImage);
            $input['image'] = "$animalImage";
        }

        if ($audio = $request->file('audio')) {
            $destinationPath = 'assets/audio/';
            $animalAudio = date('YmdHis') . "." .$audio->getClientOriginalExtension();
            $audio->move($destinationPath, $animalAudio);
            $input['audio'] = "$animalAudio";
        }

        Animal::create($input);

        return redirect()-> route('index')->with('Success', 'Animal success upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return view('show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        $request->validate([
            'name' => 'required',
            'jenis' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/image/';
            $animalImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $animalImage);
            $input['image'] = "$animalImage";
        }

        $animal->update($input);
        return redirect()-> route('index')->with('Success', 'Animal success update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */

    public function destroy(Animal $animal)
    {
        $animal->delete();
        
        return redirect()-> route('index')->with('Success', 'Animal success update');
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $animal = Animal::where('name', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $animal = Animal::all();
        }

        return view('search', ['animals' => $animal]);
    }
}