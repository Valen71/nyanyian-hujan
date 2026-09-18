<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    /**
     * Menampilkan semua iklan.
     */
    public function index()
    {
        $advertisements = Advertisement::latest()->paginate(10);

        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Menampilkan form tambah iklan.
     */
    public function create()
    {
        return view('admin.advertisements.create');
    }

    /**
     * Menyimpan iklan baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:30720',
            'link' => 'nullable|url|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('advertisements', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');

        Advertisement::create($validated);

        return redirect()
            ->route('admin.advertisements.index')
            ->with('success', 'Iklan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail iklan.
     */
    public function show(Advertisement $advertisement)
    {
        return view('admin.advertisements.show', compact('advertisement'));
    }

    /**
     * Menampilkan form edit iklan.
     */
    public function edit(Advertisement $advertisement)
    {
        return view('admin.advertisements.edit', compact('advertisement'));
    }

    /**
     * Memperbarui iklan.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:30720',
            'link' => 'nullable|url|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'is_active' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {

            if ($advertisement->image) {
                Storage::disk('public')->delete($advertisement->image);
            }

            $validated['image'] = $request->file('image')
                ->store('advertisements', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');

        $advertisement->update($validated);

        return redirect()
            ->route('admin.advertisements.index')
            ->with('success', 'Iklan berhasil diperbarui.');
    }

    /**
     * Menghapus iklan.
     */
    public function destroy(Advertisement $advertisement)
    {
        if ($advertisement->image) {
            Storage::disk('public')->delete($advertisement->image);
        }

        $advertisement->delete();

        return redirect()
            ->route('admin.advertisements.index')
            ->with('success', 'Iklan berhasil dihapus.');
    }
}