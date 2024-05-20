<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;
use App\Models\Picture;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('note')->orderBy('name','ASC')->get();
        $bestCategories = Category::with('note')->orderBy('name','ASC')->take(3)->get();
        $notes = Note::with('author')->with('category')->with('picture')->orderBy('created_at','DESC')->get();
        $bestNotes = Note::with('author')->with('category')->with('picture')->orderBy('created_at','DESC')->take(4)->get();

        return view('layouts.home.index')->with('categories',$categories)->with('bestNotes',$bestNotes)->with('bestCategories',$bestCategories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::orderBy('name','ASC')->get();
        $categories = Category::orderBy('name','ASC')->get();
        return view('welcome')->with('authors',$authors)->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        if(!$request->hasFile('image')) {
            return 'error';
        }

        $file = $request->file('image');
        $destinationPath = 'images-notes/';
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        $filename = time().'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
        $newImage = $destinationPath.$filename;

        $picture = new Picture(); 
        $picture->title = $newImage;
        $picture->save(); 

        $latestPicture = Picture::latest()->first();

        $note = new Note(); 

        $note->title = $request->title;
        $note->description = $request->description;
        $note->categories_id = $request->categories_id;
        $note->pictures_id = $latestPicture->id; 
        $note->authors_id = $request->authors_id;

        $note->save();

        return back()->with('success','¡Nota creada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        $categories = Category::with('note')->orderBy('name','ASC')->get();
        $bestNotes = Note::with('author')->with('category')->with('picture')->orderBy('created_at','DESC')->take(4)->get();

        return view('layouts.notes.details.index')->with('note',$note)->with('categories',$categories)->with('bestNotes',$bestNotes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
