<?php

namespace App\Http\Controllers;

use App\Models\Alumnus;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hitungalumni()
    {   

    $alumniByAngkatan = Alumnus::select('angkatan')
                               ->selectRaw('COUNT(*) as jumlah_alumni')
                               ->groupBy('angkatan')
                               ->get();

    $alumniByDepartemen = Alumnus::select('departemen', 'angkatan')
        ->selectRaw('COUNT(*) as jumlah_alumni')
        ->groupBy('departemen', 'angkatan')
        ->get();

    $alumniByProdi = Alumnus::select('prodi', 'angkatan')
        ->selectRaw('COUNT(*) as jumlah_alumni')
        ->groupBy('prodi', 'angkatan')
        ->get();

    // Format data untuk angkatan
    $formattedAngkatan = [];
    foreach ($alumniByAngkatan as $data) {
        $formattedAngkatan[$data->angkatan] = $data->jumlah_alumni;
    }

    $formattedDepartemen = [];

    foreach ($alumniByDepartemen as $data) {
        $departemen = $data->departemen;
        $angkatan = $data->angkatan;
        $jumlahAlumni = $data->jumlah_alumni;

        if (!isset($formattedDepartemen[$departemen])) {
            $formattedDepartemen[$departemen] = [];
        }

        $formattedDepartemen[$departemen][$angkatan] = $jumlahAlumni;
    }

    $formattedProdi = [];

    foreach ($alumniByProdi as $data) {
        $prodi = $data->prodi;
        $angkatan = $data->angkatan;
        $jumlahAlumni = $data->jumlah_alumni;

        if (!isset($formattedProdi[$prodi])) {
            $formattedProdi[$prodi] = [];
        }

        $formattedProdi[$prodi][$angkatan] = $jumlahAlumni;
    }

    

    $selectedDepartment = $_GET['departemen'] ?? null; // Ambil nilai departemen dari formulir (jika ada)

        if ($selectedDepartment) {
            // Departemen telah dipilih, Anda dapat menyesuaikan data berdasarkan departemen yang dipilih
            switch ($selectedDepartment) {
                case 'Ilmu Ekonomi':
                    // Proses data departemen Ilmu Ekonomi
                    $alumniData = $data['departemen']['Ilmu Ekonomi'] ?? null;
                    break;
                case 'Manajemen':
                    // Proses data departemen Manajemen
                    $alumniData = $data['departemen']['Manajemen'] ?? null;
                    break;
                case 'Akuntansi':
                    // Proses data departemen Akuntansi
                    $alumniData = $data['departemen']['Akuntansi'] ?? null;
                    break;
                default:
                    // Departemen tidak valid, mungkin melakukan penanganan kesalahan atau menampilkan data umum
                    $alumniData = null;
                    break;
            }
        } else {
            // Tidak ada departemen yang dipilih, mungkin menampilkan data umum
            $alumniData = null;
        }


    $data = [
        'angkatan' => $formattedAngkatan,
        'departemen' => $formattedDepartemen,
        'prodi' => $formattedProdi
    ];

        // dd($data);
        return response()->json($data);

    }
}
