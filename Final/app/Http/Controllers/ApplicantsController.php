<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateApplicantsRequest;
use App\Models\Applicants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ApplicantsController extends Controller
{
    public function index() {
        $applicants = Applicants::all();
        return view("applicant_list", ['applicants' => $applicants]);
    }
    public function edit(Applicants $applicants) {
        return view("edit")->with("applicants", $applicants);
    }

    public function update(UpdateApplicantsRequest $request, Applicants $applicants) {
        $applicants -> update($request->all());
        return redirect()->route('applicants.all', $applicants-> id);
    }
}
