<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimonialRequest;
use App\Http\Requests\DeleteTestimonialRequest;
use App\Http\Requests\EditTestimonialRequest;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Http\Requests\ViewAnyTestimonialRequest;
use App\Http\Requests\ViewTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ViewAnyTestimonialRequest $request)
    {
        $testimonials = Testimonial::where('user_id', auth()->user()->id)->get();

        return view('/testimonials/index', ['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateTestimonialRequest $request)
    {
        return view('/testimonials/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $testimonial  = Testimonial::create([
            'author' => $request->validated('author'),
            'text' => $request->validated('text'),
            'user_id' => auth()->user()->id
        ]);

        return redirect(route('testimonials.index'))->with(['success' => 'Item saved sucessfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial, ViewTestimonialRequest $request)
    {
        return view('/testimonials/show', ['testimonial' => $testimonial]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial, EditTestimonialRequest $request)
    {
        return view('/testimonials/edit', ['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update([
            'author' => $request->validated('author'),
            'text' => $request->validated('text'),
        ]);

        return redirect(route('testimonials.index'))->with(['success' => 'Item updated sucessfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial, DeleteTestimonialRequest $request)
    {
        $testimonial->delete();

        return redirect(route('testimonials.index'))->with(['success' => 'Item deleted sucessfully.']);
    }
}
