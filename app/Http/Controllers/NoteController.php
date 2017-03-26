<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Note;

class NoteController extends Controller
{
    public function index()
    {
    	$notes = Note::all();
    	return view('notebooks.index', compact('notes'));
    }

    public function show($id)
    {
    	$note = Note::find($id);
    	return view('show', compact('note'));
    }

    public function create()
    {
        return view('notebooks.create');
    }

    public function store(Request $request)
    {
        $note = Note::create($request->all());

        return redirect('notebooks');
    }

    public function edit($id)
    {
       $note = Note::find($id);

        return view('notebooks.edit', compact('note'));
    }

    public function update(Request $request, $id)
    {
        Note::find($id)->update($request->all());
         return redirect('notebooks');
    }

    public function destroy($id)
    {
        Note::find($id)->delete();
         return redirect('notebooks');
    }

}
