<?php

namespace App\Http\Controllers;
use Carbon;

use Illuminate\Http\Request;

use App\Models\Rekap;
use App\Models\Feedback;
use App\Models\Post;
use DB;

class FormController extends Controller
{
    public function create()
    {
        $data = DB::table('blogs')->get();
        return view('pages.form', compact('data'));
    }

    public function proses(Request $request)
    {
        
        $rekap = Rekap::create([
                                'name' => request('name'),
                                'address' => request('address'),
                                'instansi' => request('instansi'),
                                'noktp' => request('noktp'),
                                'notelp' => request('notelp'),
                                'email' => request('email'),
                                'loket' => request('loket'),
                                'keperluan' => request('keperluan')
                                ]);
        if($rekap){
            // $mytime = Carbon\Carbon::now()->toDateTimeString();
            $mydate =  Carbon\Carbon::now()->toDateString();
            // $datarekap = Rekap::select('max(id)')
            //                     ->where('name', request('name'))
            //                     ->where('loket', request('loket'))
            //                     ->where('keperluan', request('keperluan'));
            $all = Feedback::all()
                            ->where('date', $mydate);
            $no_urut2 = 1;
            foreach($all as $key => $a)
            {
                if(request('loket') >= 1 and request('loket') <= 13)
                {
                    $abj_loket = 'A';
                    if($all[$key]->no_urut == NULL)
                        $no_urut2 = 1;
                    else
                        $no_urut2 = $all[$key]->no_urut+1;
                    // $view_no_urut = 'A'+$no_urut;
                }
                elseif(request('loket') == 14 or request('loket') == 15)
                {
                    $abj_loket = 'B';
                    if($all[$key]->no_urut == NULL)
                        $no_urut2 = 1;
                    else
                        $no_urut2 = $all[$key]->no_urut+1;
                    // $view_no_urut = 'B'+$no_urut;
                }
                elseif(request('loket') >= 16 and request('loket') <= 25)
                {
                    $abj_loket = 'C';
                    if($all[$key]->no_urut == NULL)
                        $no_urut2 = 1;
                    else
                        $no_urut2 = $all[$key]->no_urut+1;
                    // $view_no_urut = 'C'+$no_urut;
                }
                elseif(request('loket') == 26)
                {
                    $abj_loket = 'D';
                    if($all[$key]->no_urut == NULL)
                        $no_urut2 = 1;
                    else
                        $no_urut2 = $all[$key]->no_urut+1;
                    // $view_no_urut = 'D'+$no_urut;
                }
                
            }

            $feedback = Feedback::create([
                'instansi' => request('loket'),
                'date' => $mydate,
                'no_urut' => $no_urut2
            ]);
                           
            return view('pages.proses', compact('abj_loket','no_urut2'));
            
        }
    }
    
}

