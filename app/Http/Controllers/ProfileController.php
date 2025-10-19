<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Profile;
use App\Models\Satuan;
use App\Models\Batalyon;
use App\Models\Rank;
use App\Models\Regu;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
    
    // Upload photo profile
    public function uploadPhoto(Request $request)
{
    $request->validate([
        'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $user = Auth::user();

    // Hapus foto lama jika perlu
    $user->photo = null;

    // Simpan file sebagai Base64 string
    $image = $request->file('photo');
    $imageData = base64_encode(file_get_contents($image->getRealPath()));
    $user->photo = 'data:' . $image->getMimeType() . ';base64,' . $imageData;

    $user->save();

    return back()->with('success', 'Profile photo updated successfully!');
}



}
