<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller {
    public function dataKaryawan() {
        $karyawan = Karyawan::all();
        return view('layouts.karyawan.index', compact('karyawan'));
        // return $karyawan;
    }

    public function addData() {

        return view('layouts.karyawan.add');
    }

    public function storeData(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_bergabung' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('add-data-karyawan')
                ->withErrors($validator)
                ->withInput();
        }

        $birth_date = Carbon::parse($request->tanggal_lahir);
        $join_date = Carbon::parse($request->tanggal_bergabung);

        $karyawan = DB::table('table_karyawan')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $birth_date->format('Y-m-d'),
            'tanggal_bergabung' => $join_date->format('Y-m-d')
        ]);

        if ($karyawan) {
            return redirect('karyawan')->with('message', 'Success Add Data!');
        } else {
            return redirect('add-data-karyawan')->with('error', 'Error Add Data');
        }
    }
}
