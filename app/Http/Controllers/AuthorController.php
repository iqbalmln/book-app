<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::all();
        return view('user.authors.index', [
            'authors' => $author
        ]);
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
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email_address' => 'required|string|email|unique:authors',
            'biodata' => 'nullable|string',
            'profile_picture' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        $profile_picture = null;
        if ($request->hasFile('profile_picture')) {
            $profile_picture = time();
            $profile_picture .= '.' . $request->profile_picture->extension();

            $request->profile_picture->storeAs('public/images/authors', $profile_picture);
        }
        
        $author = Author::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'biodata' => $request->biodata,
            'profile_picture' => $profile_picture
        ]);

        if (!$author) {
            return redirect()
                ->route('authors.index')
                ->with('error', 'Unexpected error occurred.');
        }

        return redirect()
            ->route('authors.index')
            ->with('success', 'Authors created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Authors  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authors  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('user.authors.edit', [
            'author' => $author
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authors  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email_address' => 'required|string|email|unique:authors,email_address,' . $author->id,
            'biodata' => 'nullable|string',
            'profile_picture' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->profile_picture != null) {
            Storage::delete($author->profile_picture);
    
            $profile_picture = time();
            $profile_picture .= '.' . $request->profile_picture->extension();
    
            $request->profile_picture->storeAs('public/images/authors', $profile_picture);
            $author->profile_picture = $profile_picture;
        }

        $author->first_name = $request->first_name;
        $author->last_name = $request->last_name;
        $author->email_address = $request->email_address;
        $author->biodata = $request->biodata;
        $author->save();
        
        return redirect()
            ->route('authors.index')
            ->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authors  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author_picture = $author->profile_picture;
        Storage::delete($author_picture);

        $author->delete();
        
        return redirect()
            ->route('authors.index')
            ->with('success', 'Author deleted successfully.');
    }
}
