<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\JobService;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private $jobService;

    public function __construct(
        JobService $jobService
    )
    {
        $this->jobService = $jobService;
    }

    public function index()
    {
        $jobs = $this->jobService->adminIndex();

        return view('admin.jobs.index', [
            "jobs" => $jobs
        ]);
    }

    public function add()
    {
        return view('admin.jobs.add');
    }

    public function create(Request $request)
    {
        $this->jobService->adminCreate($request);

        return redirect()->route('admin-jobs');
    }

    public function edit(int $id)
    {
        return view('admin.jobs.edit', [
            'job' => $this->jobService->adminGetById($id)
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->jobService->adminUpdate($request, $id);

        return redirect()->route('admin-jobs');
    }

    public function delete(int $id)
    {
        $this->jobService->adminDelete($id);

        return redirect()->route('admin-jobs');
    }
}
