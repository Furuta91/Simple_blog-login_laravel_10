<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'body' => 'required',
        ],[
            'title.required' => 'Judul postingan harus diisi.',
            'image.required' => 'Gambar postingan harus diunggah.',
            'image.image' => 'Gambar harus format jpg, jpeg, png',
            'body.required' => 'Isi postingan harus diisi.'
        ]);

       
        $upload_image =  $request->image->store('images');

         //simpan ke database
        $admin = Admin::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'image' => $upload_image,
            'body' => $request->input('body'),
        ]);

        //flash message
        if($admin){
            return redirect()->route('admins.index')->with('success','Berhasil Diposting');
        }
        else{
            return redirect()->back()->with('error','Gagal Diposting');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admins.edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'body' => 'required',
        ],[
            'title.required' => 'Judul postingan harus diisi.',
            'image.required' => 'Gambar postingan harus diunggah.',
            'image.image' => 'Gambar harus format jpg, jpeg, png',
            'body.required' => 'Isi postingan harus diisi.'
        ]);

       
        $upload_image =  $request->image->store('images');

         //simpan ke database
        $admin->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'image' => $upload_image,
            'body' => $request->input('body'),
        ]);

        if($request->hasFile('image')){
            if(Storage::delete($admin->image)){
                $image = $request->image->store('images');
            }
        }

        //flash message
        if($admin){
            return redirect()->route('admins.index')->with('success','Berhasil Diposting');
        }
        else{
            return redirect()->back()->with('error','Gagal Diposting');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admins = Admin::destroy($id);
        $admins = Admin::all();   
        return view('admins.index', ['admins' => $admins]);
    }
}
