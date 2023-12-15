<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\citizen;
  
  class citizencontrol extends Controller
  {
    public function submit(Request $request)
    {
      $data = [
        'nik' => $request->input('nik'),
        'nama' => $request->input('nama'),
        'provinsi' => $request->input('provinsi'),
        'kota' => $request->input('kota'),
        'no_telepon' => $request->input('no_telepon'),
    ];

        return view('dashboardadmin', compact('data'));
    }
  }
?>