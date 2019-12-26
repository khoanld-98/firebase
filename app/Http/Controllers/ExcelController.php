<?php

namespace App\Http\Controllers;

use App\Imports\importStudent;
use App\student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    //
    public function index(){
        return view('importExcel');
    }
    public function import(Request $request)
    {

        if ($request->hasFile('import_file')) {
          // Excel::import($import, $request->file('import_file'));
            $array = Excel::toArray([], $request->file('import_file'));

            $array1=$array[0];
            $table=$array1[0];
            return view('table',['arr'=>$array1,'table'=>$table]);
//            for($i=0;$i<count($array1[0]);$i++){
//                echo $array1[0][$i]." ";
//            }
//            echo "<br>";
//            for($i=1;$i<count($array1);$i++){
//                for($j=0;$j<count($array1[$i]);$j++){
//                    echo $array1[$i][$j]." ";
//                }
//                echo "<br>";
//            }
//            foreach($array1 as $arr2){
//                foreach ($arr2 as $arr){
//                    echo $arr." ";
//                }
//                echo "<br>";
//            }
//            $data=new importStudent();
//            $rows = Excel::import($data, $request->file('import_file'));
//            dd ($data);
        }
        }

}
