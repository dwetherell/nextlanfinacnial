<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::paginate(20);
        return view('platform.employers.index', compact('employers'));
    }

    public function show(Employer $employer)
    {
        return view('platform.employers.show', compact('employer'));
    }

    public function create()
    {
        return view('platform.employers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'nullable|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contribution_amount_monthly' => 'nullable|numeric',
        ]);

        Employer::create($validated);

        return redirect()->route('platform.employers.index')->with('success', 'Employer created.');
    }

    public function edit(Employer $employer)
    {
        return view('platform.employers.edit', compact('employer'));
    }

    public function update(Request $request, Employer $employer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'industry' => 'nullable|string|max:255',
            'contact_name' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contribution_amount_monthly' => 'nullable|numeric',
        ]);

        $employer->update($validated);

        return redirect()->route('platform.employers.index')->with('success', 'Employer updated.');
    }

    public function destroy(Employer $employer)
    {
        $employer->delete();
        return redirect()->route('platform.employers.index')->with('success', 'Employer deleted.');
    }
}
