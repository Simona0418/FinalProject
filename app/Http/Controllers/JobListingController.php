<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsListing;
use App\Http\Requests\JobRequest;
use Carbon\Carbon;
use App\Models\ContactFormMessage;


class JobListingController extends Controller
{
    public function index()
    {  
        $jobs = JobsListing::all();
        $columns = ['Title', 'Description', 'Type', 'Work Mode', 'Location'];

        $fields = ['title', 'description', 'type', 'work_mode', 'location'];

        $data = $jobs;

        $editRoute = 'jobs.edit';
        $deleteRoute = 'jobs.destroy';
        $createRoute = 'jobs.create';
        $entityName = 'Job';

        return view('dashboard.jobs.index', compact( 'jobs', 'columns', 'fields', 'data', 'editRoute', 'deleteRoute', 'createRoute', 'entityName'));
    }




public function dashboard()
{
    $monthLabels = [];
    $jobListingsData = [];

    for ($i = 0; $i < 12; $i++) {
        $month = Carbon::now()->subMonths($i)->format('F Y');
        $monthLabels[] = $month;

        $jobListingsCount = JobsListing::whereYear('created_at', Carbon::now()->subMonths($i)->year)
            ->whereMonth('created_at', Carbon::now()->subMonths($i)->month)
            ->count();
        
        $jobListingsData[] = $jobListingsCount;
    }

    $monthLabels = array_reverse($monthLabels);
    $jobListingsData = array_reverse($jobListingsData);

    $messages = ContactFormMessage::whereNull('deleted_at')->orderBy('id', 'DESC')->take(5)->get();

    $unreadCount = ContactFormMessage::where('is_read', false)->whereNull('deleted_at')->count();

    return view('dashboard.dashboard', compact('monthLabels', 'jobListingsData', 'messages', 'unreadCount'));
}


    
    public function edit($id)
    {
        $job = JobsListing::findOrFail($id); 
        $fields = [
        ['type' => 'text', 'name' => 'title', 'label' => 'Job Title', 'value' => $job->title],
        ['type' => 'textarea', 'name' => 'description', 'label' => 'Job Description', 'value' => $job->description],
        ['type' => 'select', 'name' => 'type', 'label' => 'Job Type', 'options' => ['Full time' => 'Full time', 'Part time' => 'Part time'], 'value' => $job->type],
        ['type' => 'select', 'name' => 'work_mode', 'label' => 'Work Mode', 'options' => ['On-site' => 'On-site', 'Hybrid' => 'Hybrid'], 'value' => $job->work_mode],
        ['type' => 'text', 'name' => 'location', 'label' => 'Job Location', 'value' => $job->location],
    ];
        return view('dashboard.jobs.edit', compact('job', 'fields'));
    }

    public function update(JobRequest $request, $id)
    {
        $job = JobsListing::findOrFail($id);
        $job->update($request->validated());

        return redirect()->route('jobs.index')->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        $job = JobsListing::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully!');
    }

    public function create(){

        $fields = [
        ['type' => 'text', 'name' => 'title', 'label' => 'Job Title', 'value' => ''],
        ['type' => 'textarea', 'name' => 'description', 'label' => 'Job Description', 'value' => ''],
        ['type' => 'select', 'name' => 'type', 'label' => 'Job Type', 'options' => ['Full time' => 'Full time', 'Part time' =>'Part time'], 'value' => ''],
        ['type' => 'select', 'name' => 'work_mode', 'label' => 'Work Mode', 'options' => ['On-site' => 'On-site', 'Hybrid' =>'Hybrid'], 'value' => ''],
        ['type' => 'text', 'name' => 'location', 'label' => 'Job Location', 'value' => ''],
        ];
        return view('dashboard.jobs.create', compact('fields'));
    }

    public function store(JobRequest $request)
    {
        $job = new JobsListing($request->validated());
        $job->save();

        return redirect()->route('jobs.index')->with('success', 'Job created successfully!');
    }
    }

