<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Industry;
use App\Http\Requests\PartnerRequest;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::with('industry')->get();
        $columns = ['Company Name', 'Industry', 'Collaboration Description'];
        $fields = ['company_name', 'industry.name', 'collaboration_description'];
        $data = $partners;
        $editRoute = 'partners.edit';
        $deleteRoute = 'partners.destroy';
        $createRoute = 'partners.create';
        $entityName = 'Partner';
        return view('dashboard.partners.index', compact('partners', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        $industries = Industry::all();
        $fields = [
            [
                'type' => 'text',
                'name' => 'company_name',
                'label' => 'Company Name',
                'value' => $partner->company_name,
            ],
            [
                'type' => 'select',
                'name' => 'industry_id',
                'label' => 'Industry',
                'options' => $industries->pluck('name', 'id')->toArray(),
                'value' => $partner->industry_id,
            ],
            [
                'type' => 'text',
                'name' => 'logo',
                'label' => 'Logo',
                'value' => $partner->logo,
            ],
            [
                'type' => 'textarea',
                'name' => 'collaboration_description',
                'label' => 'Collaboration Description',
                'value' => $partner->collaboration_description,
            ],
        ];
        return view('dashboard.partners.edit', compact('partner', 'industries', 'fields'));
    }

    public function update(PartnerRequest $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->update($request->validated());
        return redirect()->route('dashboard.partners.index')->with('success', 'Partner updated successfully!');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->route('dashboard.partners.index')->with('success', 'Partner deleted successfully!');
    }

    public function create()
    {
        $industries = Industry::all();
        $fields = [
            [
                'type' => 'text',
                'name' => 'company_name',
                'label' => 'Company Name',
                'value' => '',
            ],
            [
                'type' => 'select',
                'name' => 'industry_id',
                'label' => 'Industry',
                'options' => $industries->pluck('name', 'id')->toArray(),
                'value' => '',
            ],
            [
                'type' => 'text',
                'name' => 'logo',
                'label' => 'Logo',
                'value' => '',

            ],
            [
                'type' => 'textarea',
                'name' => 'collaboration_description',
                'label' => 'Collaboration Description',
                'value' => '',

            ],
        ];
        return view('dashboard.partners.create', compact('industries', 'fields'));
    }

    public function store(PartnerRequest $request)
    {
        $partner = new Partner($request->validated());
        $partner->save();
        return redirect()->route('dashboard.partners.index')->with('success', 'Partner created successfully!');
    }
}
