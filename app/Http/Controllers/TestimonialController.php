<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialRequest;
use PHPUnit\Event\Code\Test;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $columns = ['Testimonial Text', 'Client Name', 'Client Position', 'Client Company'];
        $fields = ['testimonial_text', 'client_name', 'client_position', 'client_company'];
        $data = $testimonials;
        $editRoute = 'testimonials.edit';
        $deleteRoute = 'testimonials.destroy';
        $createRoute = 'testimonials.create';
        $entityName = 'Testimonial';
        return view('dashboard.testimonials.index', compact('testimonials', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $fields = [
            ['type' => 'textarea', 'name' => 'testimonial_text', 'label' => 'Testimonial Text', 'value' => $testimonial->testimonial_text],
            ['type' => 'text', 'name' => 'client_name', 'label' => 'Client Name', 'value' => $testimonial->client_name],
            ['type' => 'text', 'name' => 'client_position', 'label' => 'Client Position', 'value' => $testimonial->client_position],
            ['type' => 'text', 'name' => 'client_company', 'label' => 'Client Company', 'value' => $testimonial->client_company],
            ['type' => 'text', 'name' => 'client_profile_picture', 'label' => 'Client Profile Picture', 'value' => $testimonial->client_profile_picture],
        ];

        return view('dashboard.testimonials.edit', compact('testimonial', 'fields'));
    }

    public function update(TestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->validated());
        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    public function create()
    {
        $fields = [
            ['type' => 'textarea', 'name' => 'testimonial_text', 'label' => 'Testimonial Text', 'value' => ''],
            ['type' => 'text', 'name' => 'client_name', 'label' => 'Client Name', 'value' => ''],
            ['type' => 'text', 'name' => 'client_position', 'label' => 'Client Position', 'value' => ''],
            ['type' => 'text', 'name' => 'client_company', 'label' => 'Client Company', 'value' => ''],
            ['type' => 'text', 'name' => 'client_profile_picture', 'label' => 'Client Profile Picture', 'value' => ''],
        ];

        return view('dashboard.testimonials.create', compact('fields'));
    }

    public function store(TestimonialRequest $request)
    {
        $testimonial = new Testimonial($request->validated());
        $testimonial->save();
        return redirect()->route('dashboard.testimonials.index')->with('success', 'Testimonial created successfully!');
    }
}