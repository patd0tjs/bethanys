<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {        // // Example predefined name
        $request->validate([
            'hero' => 'required|mimes:jpeg,jpg'
        ]);    

        try {
            $fileName = 'hero.jpg';
            $request->file('hero')->storeAs('web', $fileName, 'public');
            return redirect('/employee')->with('success', 'Hero banner updated');
        
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured while uploading the image.');
        }
    }
}
