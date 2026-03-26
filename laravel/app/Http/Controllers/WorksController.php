<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Works::select('link')->get();

        foreach ($works as $work)
        {
            $photos[] = Storage::url($work->link);
        }

        $data = [
            'gallery' => $photos,
            'page' => 'works',
            'baseUrl' => config('app.url')
        ];

        return view('gallery', compact('data'));
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
        for($i = 1; $i <= 21; $i++){

            $request->validate([
                'gallery.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg',
            ]);

            $file = $request->file('gallery'.$i);

            if ($file && $file->isValid()) {
                $path = $file->storeAs('web/gallery', $i.'.'.$file->extension(), 'public');
                Works::where('id', $i)->update(['link' => $path]);
            }
        }

        // return to the form with a success message and list of saved paths
        return redirect()->back()
            ->with('success', 'Gallery photo(s) updated');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getAllPhotos(){
        $galleries = Works::select('link')->get();
        return view('works', compact('data'));
    }
}
