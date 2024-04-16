<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLinkRequest;
use App\Http\Requests\DeleteLinkRequest;
use App\Http\Requests\EditLinkRequest;
use App\Http\Requests\ShowLinkRequest;
use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Http\Requests\ViewAnyLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ViewAnyLinkRequest $request)
    {
        $links = Link::where('user_id', auth()->user()->id)->get();

        return view('/links/index', ['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateLinkRequest $request)
    {
        return view('/links/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        $link = Link::create([
            'text' => $request->validated('text'),
            'url' => $request->validated('url'),
            'user_id' => auth()->user()->id,
        ]);

        return redirect(route('links.index'))->with(['success' => 'Item saved sucessfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link, ShowLinkRequest $request)
    {
        return view('/links/show', ['link' => $link]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link, EditLinkRequest $request)
    {
        return view('/links/edit', ['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $link->update([
            'text' => $request->validated('text'),
            'url' => $request->validated('url'),
        ]);

        return redirect(route('links.index'))->with(['success' => 'Item updated sucessfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link, DeleteLinkRequest $request)
    {
        $link->delete();

        return redirect(route('links.index'))->with(['success' => 'Item deleted sucessfully.']);
    }
}
