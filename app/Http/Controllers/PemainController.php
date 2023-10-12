<?php

namespace App\Http\Controllers;

use App\Models\Pemain; 
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePemainRequest;
use App\Http\Requests\UpdatePemainRequest;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('pemains.index', [
            'pemains' => Pemain::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('pemains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePemainRequest $request) : RedirectResponse
    {
        Pemain::create($request->all());
        return redirect()->route('pemains.index')
                ->withSuccess('New pemain is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemain $pemain) : View
    {
        return view('pemains.show', [
            'pemain' => $pemain
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $pemain) : View
    {
        return view('pemains.edit', [
            'pemain' => $pemain
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePemainRequest $request, Pemain $pemain) : RedirectResponse
    {
        $pemain->update($request->all());
        return redirect()->back()
                ->withSuccess('Pemain is updated successfully.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemain $pemain)
    {
        $pemain->delete();
        return redirect()->route('pemains.index')
                ->withSuccess('Pemain is deleted successfully.');
    }
}
