<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\Admin;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index');
    }

    public function about()
    {
        return view('dashboards.about');
    }

    public function seni()
    {
        return view('dashboards.seni');
    }

    public function blog()
    {
        $admins = Admin::all();
        return view('dashboards.blog', ['admins' => $admins]);
    }

    public function kontak()
    {
        return view('dashboards.kontak');
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
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'pesan' => 'required',
            'email' => 'required',
        ]);

        //simpan ke database
        $dashboards = Dashboard::create([
            'name' => $request->input ('name'),
            'username' => $request->input ('username'),
            'pesan' => $request->input ('pesan'),
            'email' => $request->input ('email'),

        ]);

        //flash message
        if($dashboards){
            return redirect()->route('dashboards.kontak')->with('success','Berhasil Mengirim Pesan');
        }
        else{
            return redirect()->back()->with('error','Pesan Gagal Dikirim');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
?>