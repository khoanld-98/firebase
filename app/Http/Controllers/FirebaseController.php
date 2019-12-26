<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class FirebaseController extends Controller
{
    public function index() {
        $data=[
            'id' => '1',
            'tittle'=>'khá bảnh đi tù 10 năm 6 tháng',
            'content' => 'điệu múa quạt sẽ bị thất truyền 10 năm ',
            'create' => '10-12-2019',
            'user_id'=> '1'
        ];
//
        $id=13;
        $this->database->getReference('post/'.$id)->set($data);//->remove();
        echo "thành công";
    }
    public function getData(){
//        $values=$this->database->getReference('User')->orderByKey()->getValue();
//        foreach ($values as $key => $value){
//            echo "<br>". $key ."<br>";
//            foreach ($value as $keys => $vl){
//                echo $keys . " = " . $vl. " ";
//            }
//        }
       // $valuess=$this->database->getReference('User')->orderByChild('tittle')->getValue();
        $valuess=$this->database->getReference('User')->getValue();
        dd($valuess);
    }
    public function insert(){
        return view('insert_firabase');
    }
    public function  postInsert(Request $request){

        $data = [
            'tittle' => $request->tittle,
            'content' => $request->contents,
            'mm'    => $request->mm
        ];
        $this->database->getReference('User/'.$request->tittle)->set($data);
        echo 'thanh cong';
    }
    public function show(){
        $value=$this->database->getReference('User')->getValue();
        return view('show',['value'=>$value]);
    }
}
