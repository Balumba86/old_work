<?php

namespace App\Services;

use App\Models\OpeningJob;
use Illuminate\Http\Request;

class JobService
{
    public function adminIndex()
    {
        $jobs = OpeningJob::orderBy('id', 'desc')->paginate(10);

        return $jobs;
    }

    public function adminCreate(Request $request)
    {
        $data = $request->all();

        return OpeningJob::create($data);
    }

    public function adminGetById(int $id)
    {
        return OpeningJob::where('id', $id)->first();
    }

    public function adminUpdate(Request $request, int $id)
    {
        $job = OpeningJob::where('id', $id)->first();

        $data = $request->all();

        return $job->update($data);
    }

    public function adminDelete(int $id)
    {
        $job = OpeningJob::where('id', $id)->first();

        return $job->delete();
    }

    //Api

    public function getList()
    {
        return OpeningJob::orderBy('id', 'desc')->get();
    }
}
