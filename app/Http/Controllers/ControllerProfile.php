<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;
use App\Models\Satuan;
use App\Models\Batalyon;
use App\Models\Rank;
use App\Models\Regu;
use Illuminate\Http\Request;

class ControllerProfile extends Controller
{
    public function index(){
    $data = Profile::where('user_id', auth()->id())
                   ->with(['satuan','batalyon','rank','regu'])
                   ->get();

    return view('dashboard.pages.profiles.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.pages.profiles.form', [
            'data'     => null,
            'satuan'   => Satuan::all(),
            'batalyon' => Batalyon::all(),
            'ranks'    => Rank::all(),
            'regu'     => Regu::all(),
        ]);
    }

    public function edit($id)
    {
        return view('dashboard.pages.profiles.form', [
            'data'     => Profile::findOrFail($id),
            'satuan'   => Satuan::all(),
            'batalyon' => Batalyon::all(),
            'ranks'    => Rank::all(),
            'regu'     => Regu::all(),
        ]);
    }

    public function store(Request $request){
    $data = $request->all();

    // ambil user yg sedang login dan masukkan ke field user_id
    $data['user_id'] = Auth::user()->id;


    if (!empty($request->id)) {
        $item = Profile::findOrFail($request->id);
        $item->update($data);
    } else {
        Profile::create($data);
    }

    return redirect()->route('profile_index')->with('success','Data saved');
    }

    public function destroy($id){
    $data = Profile::findOrFail($id);
    $data->delete();

    return redirect()->route('profile_index');

    }
}
