<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class HostingController extends Controller
{
    private const ALLOWED_ICON_EXTENSIONS = [
        'svg',
        'png',
        'jpg',
        'jpeg',
        'jfif',
        'webp',
        'gif',
        'bmp',
        'avif',
        'ico',
    ];

    public function index()
    {
        $hostings = Hosting::latest()->paginate(10);

        return view('admin.hostings.index', compact('hostings'));
    }

    public function create()
    {
        return view('admin.hostings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => ['required', 'file', 'mimes:svg,png,jpg,jpeg,jfif,webp,gif,bmp,avif,ico', 'max:4096'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', 'unique:hostings,slug'],
        ]);

        $icon = $request->file('icon');

        if (! $icon || ! $icon->isValid()) {
            return back()->withErrors(['icon' => 'Please upload a valid icon image.'])->withInput();
        }

        $validated['icon'] = $this->storeIconFile($icon);

        Hosting::create($validated);

        return redirect()->route('admin.hostings.index')->with('success', 'Hosting created successfully.');
    }

    public function edit(Hosting $hosting)
    {
        return view('admin.hostings.edit', compact('hosting'));
    }

    public function update(Request $request, Hosting $hosting)
    {
        $validated = $request->validate([
            'icon' => ['nullable', 'file', 'mimes:svg,png,jpg,jpeg,jfif,webp,gif,bmp,avif,ico', 'max:4096'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255', 'alpha_dash', 'unique:hostings,slug,' . $hosting->id],
        ]);

        if ($request->hasFile('icon')) {
            if ($hosting->icon) {
                Storage::disk('public')->delete($hosting->icon);
            }

            $icon = $request->file('icon');

            if (! $icon || ! $icon->isValid()) {
                return back()->withErrors(['icon' => 'Please upload a valid icon image.'])->withInput();
            }

            $validated['icon'] = $this->storeIconFile($icon);
        }

        $hosting->update($validated);

        return redirect()->route('admin.hostings.index')->with('success', 'Hosting updated successfully.');
    }

    public function destroy(Hosting $hosting)
    {
        if ($hosting->icon) {
            Storage::disk('public')->delete($hosting->icon);
        }

        $hosting->delete();

        return redirect()->route('admin.hostings.index')->with('success', 'Hosting deleted successfully.');
    }

    private function storeIconFile($icon): string
    {
        $extension = strtolower((string) $icon->getClientOriginalExtension());

        if (! in_array($extension, self::ALLOWED_ICON_EXTENSIONS, true)) {
            $extension = strtolower((string) $icon->guessExtension());
        }

        if (! in_array($extension, self::ALLOWED_ICON_EXTENSIONS, true)) {
            $extension = 'png';
        }

        $directory = storage_path('app/public/hostings/icons');

        if (! File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $fileName = Str::uuid()->toString() . '.' . $extension;
        $icon->move($directory, $fileName);

        return 'hostings/icons/' . $fileName;
    }
}
