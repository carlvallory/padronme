<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function check(Request $request){
        //here
        if ($request->ajax()) {

            \Log::debug($request);
            if(!empty($request->ssn)) {
                \Log::debug($request->ssn);
                $result = $this->check_ssn($request->ssn);
            }
            if(!empty($request->matricula)) {
                \Log::debug($request->matricula);
                $result = $this->check_matricula($request->matricula);
            }
            

            if ($result) {
                \Log::debug($result);
                return response()->json([
                    'success' => true,
                    'result' => $result
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'msg' => 'Error.'
                ]);
            }
        }
    }

    private function check_ssn($integer){
        if(is_numeric($integer)){
            DB::enableQueryLog();
            $result = Registro::where('ssn', $integer)
                                    ->first();

            \Log::info(DB::getQueryLog());

            if($result){
                return $result;
            }
        }

        return false;
    }

    private function check_matricula($integer){
        if(is_numeric($integer)){
            DB::enableQueryLog();
            $result = Registro::where('matricula', $integer)
                                    ->first();

            \Log::info(DB::getQueryLog());

            if($result){
                return $result;
            }
        }

        return false;
    }
}
