<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::find(1);
        $data = [
            'page' => 'home',
            'hero' => Storage::url($hero->link),
        ];
        
        return view('home', compact('data'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'hero' => 'required|image|mimes:jpeg,jpg,png,gif,svg'
            ]);    
        
            $file = $request->file('hero');

            if ($file && $file->isValid()) {
                $path = $file->storeAs('web', 'hero.'.$file->extension(), 'public');
                Hero::where('id', 1)->update(['link' => $path]);
                
                return redirect('/')->with('success', 'Hero banner updated');
            }
        
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
