<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuctionRequest;
use App\Models\Auction;
use App\Models\Category;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_index = Category::latest()->take(2)->get();
        $auctions = Auction::all();
        return view('auctions.index', compact('auctions', 'categories_index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('auctions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuctionRequest $request)
    {
        $auction = Auction::create($request->validated());

        if($request->has('categories')){
            $auction->categories()->attach($request->categories);
        }

        return redirect('auctions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        return view('auctions.show', compact('auction'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        $categories = Category::all();
        return view('auctions.edit', compact('auction', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuctionRequest $request, Auction $auction)
    {
        $auction->update($request->validated());

        if($request->has('categories')){
            $auction->categories()->sync($request->categories);
        }
        return redirect('auctions');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        $auction->categories()->detach();
        $auction->delete();

        return redirect('auctions');
    }

}
