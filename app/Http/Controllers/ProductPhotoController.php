<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductPhotoRequest;
use App\Http\Requests\DeleteProductPhotoRequest;
use App\Http\Requests\EditProductPhotoRequest;
use App\Http\Requests\StoreProductPhotoRequest;
use App\Http\Requests\UpdateProductPhotoRequest;
use App\Http\Requests\ViewAnyProductPhotoRequest;
use App\Http\Requests\ViewProductPhotoRequest;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ViewAnyProductPhotoRequest $request)
    {
        $productPhotos = ProductPhoto::where('user_id', auth()->user()->id)->get();

        return view('/product-photos/index', ['productPhotos' => $productPhotos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateProductPhotoRequest $request)
    {
        return view('/product-photos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductPhotoRequest $request)
    {
        // Upload the new file
        $file = $request->file('image');
        $filename = $file->store('uploads', 'public');

        $productPhoto = ProductPhoto::create([
            'url' => asset('storage/' . $filename),
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('product-photos.index'))->with(['success' => 'Item saved sucessfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductPhoto $productPhoto, ViewProductPhotoRequest $request)
    {
        return view('/product-photos/show', ['productPhoto' => $productPhoto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductPhoto $productPhoto, EditProductPhotoRequest $request)
    {
        return view('/product-photos/edit', ['productPhoto' => $productPhoto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductPhotoRequest $request, ProductPhoto $productPhoto)
    {
        // Delete the existing file from storage
        $urlParts = explode('/', $productPhoto->url);

        $filename = end($urlParts);

        Storage::disk('public')->delete('uploads/' . $filename);

        // Upload the new file
        $file = $request->file('image');
        $filename = $file->store('uploads', 'public');

        // Update the record with the new file URL
        $productPhoto->url = asset('storage/' . $filename);
        $productPhoto->save();

        return redirect(route('product-photos.index'))->with('success', 'Product photo updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteProductPhotoRequest $request, ProductPhoto $productPhoto)
    {
        $urlsParts = explode('/', $productPhoto->url);
        $filename = end($urlsParts);

        Storage::disk('public')->delete('uploads/' . $filename);

        $productPhoto->delete();

        return redirect(route('product-photos.index'))->with('success', 'Item deleted sucessfully');
    }
}
