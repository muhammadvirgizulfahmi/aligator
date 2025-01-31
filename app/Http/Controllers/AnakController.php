<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Anak;
use App\Models\Perkembangan;
use App\Models\Parameter;
use App\Models\Recommendation;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    
    
    
    public function index()
    {
        return view("data_anak");
    }

    public function showChildrenProfile()
    {
        $user = auth()->user(); // Get the authenticated user

        if (auth()->user()->role === User::ROLE_DOKTER) {
            $children = Anak::with('wali')->get();
        } else {
            $children = Anak::with('wali')->where('id_wali', auth()->id())->get();
        }
    
        // If no children, pass an empty collection to the view
        if ($children->isEmpty()) {
            $children = collect(); // Return an empty collection if no children
        }

        // Return the view and pass the children data
        return view('data_anak', compact('children'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
        
         
         return view("pengguna.data_anak_create");
        // return view('admin.umkm.create', compact('kabkotas','kategori_umkms','pembinas'));
     }

     public function edit(string $id)
     {
         // Find the anak record by id
         $anak = Anak::findOrFail($id);
     
         // Retrieve all perkembangan for this anak
         $perkembangan = Perkembangan::where('id_anak', $id)->get();
     
         // Retrieve doctor recommendations for this anak
         $doctorRecommendations = Recommendation::where('id_anak', $id)->get();
     
         // Get the latest perkembangan based on the highest id (most recent)
         $latestPerkembangan = Perkembangan::where('id_anak', $id)
             ->orderBy('id', 'desc') // Order by id to get the most recent record
             ->first();
     
         // Generate system recommendations
         $systemRecommendations = [];
     
         if ($latestPerkembangan) {
             // Match with the parameter table based on umur
             $parameter = Parameter::where('umur', $latestPerkembangan->umur)->first();
     
             if ($parameter) {
                 // Generate recommendations based on the comparison
                 if ($latestPerkembangan->lingkarKepala < $parameter->lingkarKepala) {
                     $systemRecommendations[] = "[Lingkar Kepala] Konsultasi medis untuk pemeriksaan lebih lanjut guna memastikan tidak ada masalah neurologis atau genetik, sekaligus mengevaluasi kebutuhan stimulasi perkembangan otak.";
                 }
     
                 if ($latestPerkembangan->tinggiBadan < $parameter->tinggiBadan) {
                     $systemRecommendations[] = "[Tinggi Badan] Optimalkan asupan nutrisi, khususnya protein dan vitamin D, untuk mendukung pertumbuhan tulang dan jaringan.";
                 }
     
                 if ($latestPerkembangan->beratBadan < $parameter->beratBadan) {
                     $systemRecommendations[] = "[Berat Badan] Tambahkan kalori padat nutrisi ke dalam makanan anak, seperti alpukat, telur, kacang-kacangan, atau minyak zaitun, untuk meningkatkan berat badan secara sehat.";
                 }
             }
         }
     
         // Pass the data and recommendations to the view
         return view('pengguna.data_anak_edit', compact('perkembangan', 'anak', 'systemRecommendations', 'doctorRecommendations'));
     }
     
     public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jenisKelamin' => 'required|string'
        ]);

        // Add the authenticated user's id as the 'id_wali'
        $validated['id_wali'] = auth()->user()->id;

        Anak::create($validated);
        return redirect('/data-anak');
    }

    /**
     * Display the specified resource.
     */
    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anak = Anak::findOrFail($id);

        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'tgl_lahir' => 'required|date',
            'jenisKelamin' => 'required|string'
        ]);

        // Update data pengguna
        $anak->update($validated);

        return redirect('/data-anak');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // First, delete the related 'perkembangan' records
        Perkembangan::where('id_anak', $id)->delete();
    
        // Then, delete the 'anak' record
        Anak::destroy($id);
    
        // Redirect back to the list of children with a success message
        return redirect()->route('data_anak');
    }

}

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Kelurahan;

// class KelurahanController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $kelurahans = Kelurahan::all();
//         return view('admin.kelurahan.index', compact('kelurahans'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('admin.kelurahan.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         // validasi form input
//         $validated = $request->validate([
//             'nama' => 'required|string',
//             'nama_kecamatan' => 'required|string'
//         ]);

//         Kelurahan::create($validated);
//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil ditambahkan');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         return view('admin.kelurahan.show', compact('kelurahan'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         return view('admin.kelurahan.edit', compact('kelurahan'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $validated = $request->validate([
//             'nama' => 'required|string',
//             'nama_kecamatan' => 'required|string'
//         ]);

//         $kelurahan = Kelurahan::find($id);
//         $kelurahan->update($validated);
//         // Kelurahan::create($id);
//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil diperbarui');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         $kelurahan->delete();

//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil diperbarui');
//     }
// }