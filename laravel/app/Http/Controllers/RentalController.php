<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentals;
use Illuminate\Support\Facades\Storage;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rentals::select('link')->get();

        foreach ($rentals as $rental)
        {
            $photos[] = Storage::url($rental->link);
        }

        $data = [
            'rental' => $photos,
            'page' => 'rentals',
            'baseUrl' => config('app.url')
        ];

        return view('rentals', compact('data'));
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
                'gallery.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            ]);

            $file = $request->file('rental'.$i);

            if ($file && $file->isValid()) {
                $path = $file->storeAs('web/rentals', $i.'.'.$file->extension(), 'public');
                Rentals::where('id', $i)->update(['link' => $path]);
            }
        }

        // return to the form with a success message and list of saved paths
        return redirect()->back()
            ->with('success', 'Rental photo(s) updated');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
