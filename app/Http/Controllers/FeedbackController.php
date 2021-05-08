<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;
use App\Models\Feedback;
use DB;

class FeedbackController extends Controller
{
    public function create()
    {
        $data = DB::table('blogs')->get();
    	return view('pages.input_nourut', compact('data'));
    }

    public function proses(Request $request)
    {
        $loket = $request->loket;
        $no_urut = $request->no_urut;
        $kepuasan = $request->kepuasan;
        
        $update = Feedback::where('instansi', $loket)
                            ->where('no_urut', $no_urut)
                            ->update(['deskripsi' => $kepuasan]);

        return view('pages.feedback');
    }
}
