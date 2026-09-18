<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ship;
use Illuminate\Http\Request;

class ShipController extends Controller
{
    public function index()
    {
        $ships = Ship::latest()->get();

        return view('admin.ships.index', compact('ships'));
    }

    public function create()
    {
        return view('admin.ships.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:30720',

            'image_url' => 'nullable|url',

            'status' => 'required|boolean',
        ]);

        /*
        |--------------------------------------------------------------------------
        | GAMBAR
        |--------------------------------------------------------------------------
        */

        // Kalau user upload gambar dari komputer
        if ($request->hasFile('image')) {

            $validated['image'] = $request
                ->file('image')
                ->store('ships', 'public');

        }
        // Kalau user menggunakan URL gambar
        elseif ($request->filled('image_url')) {

            $validated['image'] = $validated['image_url'];
        }

        // image_url bukan kolom database
        unset($validated['image_url']);


        Ship::create($validated);

        return redirect()
            ->route('admin.ships.index')
            ->with('success', 'Kapal berhasil ditambahkan.');
    }

    public function show(Ship $ship)
    {
        //
    }

    public function edit(Ship $ship)
    {
        return view('admin.ships.edit', compact('ship'));
    }

    public function update(Request $request, Ship $ship)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:30720',

            'image_url' => 'nullable|url',

            'status' => 'required|boolean',
        ]);

        /*
        |--------------------------------------------------------------------------
        | GAMBAR BARU
        |--------------------------------------------------------------------------
        */

        // Kalau upload gambar baru dari komputer
        if ($request->hasFile('image')) {

            // Hapus gambar lama kalau gambar lama berasal dari komputer
            if (
                $ship->image &&
                !filter_var($ship->image, FILTER_VALIDATE_URL) &&
                file_exists(
                    storage_path('app/public/' . $ship->image)
                )
            ) {
                unlink(
                    storage_path('app/public/' . $ship->image)
                );
            }

            $validated['image'] = $request
                ->file('image')
                ->store('ships', 'public');
        }

        // Kalau menggunakan URL gambar
        elseif ($request->filled('image_url')) {

            // Hapus gambar lama kalau gambar lama berasal dari komputer
            if (
                $ship->image &&
                !filter_var($ship->image, FILTER_VALIDATE_URL) &&
                file_exists(
                    storage_path('app/public/' . $ship->image)
                )
            ) {
                unlink(
                    storage_path('app/public/' . $ship->image)
                );
            }

            $validated['image'] = $validated['image_url'];
        }

        // image_url bukan kolom database
        unset($validated['image_url']);


        $ship->update($validated);

        return redirect()
            ->route('admin.ships.index')
            ->with('success', 'Data kapal berhasil diperbarui.');
    }

    public function destroy(Ship $ship)
{
    // Cek apakah kapal masih memiliki booking
    if ($ship->bookings()->exists()) {

        return redirect()
            ->route('admin.ships.index')
            ->with('error', 'Kapal tidak dapat dihapus karena masih memiliki data booking.');
    }

    // Hapus file gambar lokal jika ada
    if (
        $ship->image &&
        !filter_var($ship->image, FILTER_VALIDATE_URL) &&
        file_exists(
            storage_path('app/public/' . $ship->image)
        )
    ) {
        unlink(
            storage_path('app/public/' . $ship->image)
        );
    }

    // Hapus kapal
    $ship->delete();

    return redirect()
        ->route('admin.ships.index')
        ->with('success', 'Data kapal berhasil dihapus.');
}
}