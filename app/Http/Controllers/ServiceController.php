<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::orderBy('created_at', 'DESC')->get();
  
        return view('services.index', compact('service'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create($request->all());
 
        return redirect()->route('services')->with('success', 'Service added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::findOrFail($id);
  
        return view('services.show', compact('service'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
  
        return view('services.edit', compact('service'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::findOrFail($id);
  
        $service->update($request->all());
  
        return redirect()->route('services')->with('success', 'Service updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Service = Service::findOrFail($id);
  
        $Service->delete();
  
        return redirect()->route('services')->with('success', 'Service deleted successfully');
    }
}
