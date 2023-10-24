<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Result;

class FormController extends Controller
{
    public function index(){
        // $data = DB::table('data')->get();
        // return view('form', ['data' => $data]);
            $results = Result::all();
        return view('result', compact('results'));
    }

    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'notelp' => 'required|numeric',
                'berat' => 'required|numeric|between:2.50,99.99',
                'bukti' => 'required|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'notelp.required' => 'Nomor telepon wajib diisi',
                'berat.required' => 'Berat laundry wajib diisi',
                'berat.between' => 'Berat laundry minimal 2.5 KG dan maksimal 9.99 KG!',
                'bukti.required' => 'Masukkan bukti pembayaran',
                'bukti.mimes' => 'Format file yang diterima adalah .png, .jpg, dan .jpeg',
                'bukti.max' => 'Ukuran maksimal 2 MB'
            ]
        );

        $bukti_bayar = $request->file('bukti');
        $name = $request->input('nama'); 
        $notelp = $request->input('notelp'); 

        if ($bukti_bayar != NULL && $name != null && $notelp != null) {
            $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
            $file_name = $name . '_' . $notelp . '.' . $bukti_bayar->extension();
            $bukti_bayar->move(public_path('img'), $file_name);
        }

        $results = [
            'user_id' => Auth::user()->id,
            'nama' => $name,
            'notelp' => $notelp,
            'berat' => $request->berat,
            'layanan' => $request->layanan,
            'bukti' => $file_name
        ];

        Result::Create($results);

        return redirect('/result')->with(['results' => $results, 'status' => 'Form berhasil disubmit!']);
    }

    public function show($id){
        $results = Result::findOrFail($id);

        return view('result', [
            'results' => $results
        ]);
    }

    public function edit($id) {
        $results = Result::findOrFail($id);

        return view('editForm', [
            'results' => $results
        ]);
    }

    public function update(Request $request, $id) {
        $request->validate(
            [
                'nama' => 'required',
                'notelp' => 'required|numeric',
                'berat' => 'required|numeric|between:2.50,99.99',
                'bukti' => 'required|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'nama.required' => 'Nama wajib diisi',
                'notelp.required' => 'Nomor telepon wajib diisi',
                'berat.required' => 'Berat laundry wajib diisi',
                'berat.between' => 'Berat laundry minimal 2.5 KG dan maksimal 9.99 KG!',
                'bukti.required' => 'Masukkan bukti pembayaran',
                'bukti.mimes' => 'Format file yang diterima adalah .png, .jpg, dan .jpeg',
                'bukti.max' => 'Ukuran maksimal 2 MB'
            ]
        );

        $bukti_bayar = $request->file('bukti');
        $name = $request->input('nama'); 
        $notelp = $request->input('notelp'); 

        if ($bukti_bayar != NULL && $name != null && $notelp != null) {
            $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
            $file_name = $name . '_' . $notelp . '.' . $bukti_bayar->extension();
            $bukti_bayar->move(public_path('img'), $file_name);
        
        
            Result::findOrFail($id)->update([
                'nama' => $name,
                'notelp' => $notelp,
                'berat' => $request->berat,
                'layanan' => $request->layanan,
                'bukti' => $file_name
            ]);
        }
        

        // $results = [
        //     'user_id' => Auth::user()->id,
        //     'nama' => $name,
        //     'notelp' => $notelp,
        //     'berat' => $request->berat,
        //     'layanan' => $request->layanan,
        //     'bukti' => $file_name
        // ];

        // Result::Create($results);

        // return redirect('/result')->with(['results' => $results, 'status' => 'Form berhasil disubmit!']);
        $results = Result::all();
        return view('result', compact('results'));
    }

    public function destroy($id)
    {
        Result::findOrFail($id)->delete();
         
        return redirect('/result');
    }
}