<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UndanganController extends Controller
{
    public function index()
    {
       
        $undangan = Undangan::all();
        return view('admin.pages.undangans.index', compact('undangan'));
    }

    public function create()
    {
        return view('undangans.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_pengantin_pria' => 'required|string|max:255',
        'nama_pengantin_pria_lengkap' => 'required|string|max:255',
        'nama_ortu_pria' => 'required|string|max:255',
        
        'nama_pengantin_wanita' => 'required|string|max:255',
        'nama_pengantin_wanita_lengkap' => 'required|string|max:255',
        'nama_ortu_wanita' => 'required|string|max:255',

        'tanggal_pernikahan' => 'required|date',
        'foto_pengantin_pria' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'foto_pengantin_wanita' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'background_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'background_foto_kedua' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
        'lokasi_pernikahan_lat' => 'required|numeric',
        'lokasi_pernikahan_lng' => 'required|numeric',

        'jam_resepsi' => 'required|date_format:H:i',
       
        'nama_jalan' => 'required|string|max:255',
    ]);

    $fotoPengantinPria = $request->file('foto_pengantin_pria') ? $request->file('foto_pengantin_pria')->store('photos', 'public') : null;
    $fotoPengantinWanita = $request->file('foto_pengantin_wanita') ? $request->file('foto_pengantin_wanita')->store('photos', 'public') : null;
    $backgroundFoto = $request->file('background_foto') ? $request->file('background_foto')->store('backgrounds', 'public') : null;
    $backgroundFotoKedua = $request->file('background_foto_kedua') ? $request->file('background_foto_kedua')->store('backgrounds', 'public') : null;

    Undangan::create([
        'nama_pengantin_pria' => $request->nama_pengantin_pria,
        'nama_pengantin_pria_lengkap' => $request->nama_pengantin_pria_lengkap,
        'nama_ortu_pria' => $request->nama_ortu_pria,
        'nama_pengantin_wanita' => $request->nama_pengantin_wanita,
        'nama_pengantin_wanita_lengkap' => $request->nama_pengantin_wanita_lengkap,
        'nama_ortu_wanita' => $request->nama_ortu_wanita,
        'foto_pengantin_pria' => $fotoPengantinPria,
        'foto_pengantin_wanita' => $fotoPengantinWanita,
        'background_foto' => $backgroundFoto,
        'background_foto_kedua' => $backgroundFotoKedua,
        'tanggal_pernikahan' => $request->tanggal_pernikahan,
        'lokasi_pernikahan_lat' => $request->lokasi_pernikahan_lat,
        'lokasi_pernikahan_lng' => $request->lokasi_pernikahan_lng,
        'jam_resepsi' => $request->jam_resepsi,
        'nama_jalan' => $request->nama_jalan,
    ]);

    return redirect()->route('admin.home')->with('success', 'Undangan created successfully.');
}



public function show($nama_pengantin_pria, $nama_pengantin_wanita)
{

    Carbon::setLocale('id'); // Mengatur locale ke bahasa Indonesia
    
    $undangans = Undangan::where('nama_pengantin_pria', $nama_pengantin_pria)
                          ->where('nama_pengantin_wanita', $nama_pengantin_wanita)
                          ->get();

    foreach ($undangans as $undangan) {
        if ($undangan->tanggal_pernikahan) {
            $tanggal = Carbon::parse($undangan->tanggal_pernikahan);
            $undangan->nama_hari = $tanggal->isoFormat('dddd'); // Mendapatkan nama hari
            $undangan->nama_bulan = $tanggal->translatedFormat('F'); // Mendapatkan nama bulan
        } else {
            $undangan->nama_hari = 'Tanggal tidak tersedia';
            $undangan->nama_bulan = 'Bulan tidak tersedia';
        }
    }


    return view('admin.pages.undangans.indexundangan', compact('undangans'));
}


    public function edit(Undangan $undangan)
    {
        return view('undangans.edit', compact('undangan'));
    }

    public function update(Request $request, Undangan $undangan)
    {
        $request->validate([
            'nama_pengantin_pria' => 'required|string|max:255',
            'nama_pengantin_wanita' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        $undangan->nama_pengantin_pria = $request->nama_pengantin_pria;
        $undangan->nama_pengantin_wanita = $request->nama_pengantin_wanita;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads', 'public');
            $undangan->foto = basename($path);
        }

        $undangan->save();

        return redirect()->route('undangans.index')->with('success', 'Undangan berhasil diperbarui.');
    }

    public function destroy(Undangan $undangan)
    {
        if ($undangan->foto) {
            \Storage::delete('public/uploads/' . $undangan->foto);
        }
        $undangan->delete();
        return redirect()->route('undangans.index')->with('success', 'Undangan berhasil dihapus.');
    }

   

    public function indexPublic($nama_pengantin_pria, $nama_pengantin_wanita)
    {
        Carbon::setLocale('id'); // Mengatur locale ke bahasa Indonesia
    
        $undangans = Undangan::where('nama_pengantin_pria', $nama_pengantin_pria)
                              ->where('nama_pengantin_wanita', $nama_pengantin_wanita)
                              ->get();
    
        foreach ($undangans as $undangan) {
            if ($undangan->tanggal_pernikahan) {
                $tanggal = Carbon::parse($undangan->tanggal_pernikahan);
                $undangan->nama_hari = $tanggal->isoFormat('dddd'); // Mendapatkan nama hari
                $undangan->nama_bulan = $tanggal->translatedFormat('F'); // Mendapatkan nama bulan
            } else {
                $undangan->nama_hari = 'Tanggal tidak tersedia';
                $undangan->nama_bulan = 'Bulan tidak tersedia';
            }
        }
    
        return view('admin.pages.undangans.indexundangan', compact('undangans'));
    }
    
    
    
}
