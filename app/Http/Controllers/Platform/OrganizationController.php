<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;
use Illuminate\Support\Str;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::latest()->paginate(20);
        return view('platform.organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('platform.organizations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:organizations,slug',
            'description' => 'nullable|string|max:2000',
            'logo_path' => 'nullable|image|max:2048',
        ]);

        // If no slug, generate from name
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['name']);

        // Handle logo upload
        if ($request->hasFile('logo_path')) {
            $validated['logo_path'] = $request->file('logo_path')->store('org-logos', 'public');
        }

        Organization::create($validated);

        return redirect()->route('platform.organizations.index')->with('success', 'Organization created.');
    }

    public function show(Organization $organization)
    {
        return view('platform.organizations.show', compact('organization'));
    }

    public function edit(Organization $organization)
    {
        return view('platform.organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:organizations,slug,' . $organization->id,
            'description' => 'nullable|string|max:2000',
            'logo_path' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['name']);

        if ($request->hasFile('logo_path')) {
            $validated['logo_path'] = $request->file('logo_path')->store('org-logos', 'public');
        }

        $organization->update($validated);

        return redirect()->route('platform.organizations.index')->with('success', 'Organization updated.');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('platform.organizations.index')->with('success', 'Organization deleted.');
    }
}
