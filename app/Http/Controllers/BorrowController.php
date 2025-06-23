<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrow= Borrow::all();
        return Response()->json($borrow,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name'=> 'required|string|max:225',
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id'
            
        ]);
        $borrow= Borrow::create($request->all());
        return response()->json($borrow,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        return response()->json($borrow);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        $borrow->update($request->all());
        return response()->json($borrow,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return response()->json(['message'=> 'Borrow record deleted successfully']);
    }
}
