<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\View\View;

class ContactSubmissionController extends Controller
{
    public function index(): View
    {
        return view('admin.contact-submissions.index', [
            'submissions' => ContactSubmission::query()->latest()->paginate(15),
        ]);
    }

    public function show(ContactSubmission $contactSubmission): View
    {
        return view('admin.contact-submissions.show', [
            'submission' => $contactSubmission,
        ]);
    }
}
