<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Note;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $categories = Category::with('note')->orderBy('name','ASC')->get();        
        $bestNotes = Note::with('author')->with('category')->with('picture')->orderBy('created_at','DESC')->take(4)->get();
        $notes = $category->note()->orderBy('created_at','DESC')->paginate(4);

        return view('layouts.notes.index')->with('categories',$categories)
            ->with('category',$category)
            ->with('notes',$notes)
            ->with('bestNotes',$bestNotes);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
