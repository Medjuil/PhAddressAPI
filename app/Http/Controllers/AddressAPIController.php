<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressAPIController extends Controller
{
    public function getCountry(){
        return Country::all(); 
        // return view('user.auth.user-verification',['country' => $country])->with('status', true);
      //   return response()->json([
      //      'success' => $country,
      //   ]);
     }
  
     public function getRegion($id){
  
  
        return $regions =  DB::table('regions')->select('*')->where('country_code', $id)->get();
      //   return response()->json([
      //      'success' => $regions,
      //   ]);
  
      //   if($regions->fails()){
      //      return response()->json()->errors()->toArray();
      //   }
  
     }
  
     public function getProvince($id){
        $provinces = DB::table('provinces')->select('*')->where('region_code', $id)->get();
  
        return response()->json([
           'success' => $provinces,
        ]);
  
        if($provinces->fails()){
           return response()->json()->errors()->toArray();
        }
     }
  
     public function getMunicipality($id){
        $municipalities =  DB::table('municipalities')->select('*')->where('province_code', $id)->get();
  
        return response()->json([
           'success' => $municipalities,
        ]);
  
        if($municipalities->fails()){
           return response()->json()->errors()->toArray();
        }
     }
  
     public function getBarangay($id){
        $barangays = DB::table('barangays')->select('*')->where('municipality_code', $id)->get();
  
        return response()->json([
           'success' => $barangays,
        ]);
  
        if($barangays->fails()){
           return response()->json()->errors()->toArray();
        }
     }
}
