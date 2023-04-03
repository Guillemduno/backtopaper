<?php

namespace App\Http\Controllers;

use App\Models\Characther;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CharactherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characther::all();
        return view('characther.index', ['characthers'=>$characters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'imageFile' => 'required',
                'description' => 'required|max:255'
            ]
        );

        $characther = Characther::findOrFail($request->id);

        if ($request->hasFile('imageFile')) {
            $file = $request->file('imageFile');
            $path =  $file->storeAs('images', $characther->id.".".$file->extension());
        }

        $characther->description = $request->description;
        $characther->imageFile = $path;
        $characther->save();

        return redirect('/characther/show/'.$characther->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Characther::findOrFail($id);
        return view('characther.show', ['characther'=>$character]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $characther = Characther::findOrFail($id);
        return view('characther.edit', ['characther' => $characther]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = Characther::findOrFail($id);
        $character->delete();
        return redirect(route('characther.index'));
    }
}
