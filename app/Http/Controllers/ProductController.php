<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Kreait\Firebase\Contract\Database;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct(Database $database)
  {
      $this->database = $database;
      $this->tablename = "Admins";
      //making table name global
  }
    public function Index(){

        // $prod = Product::all();
//    $prod = Product::orderby('price')->get();
// $prod = Product::orderby('price','desc')->get();
 // $prod = Product::where('type','pineapple')->get();
 //get data
 $Admins = $this->database->getReference( $this->tablename)->getValue();
 $total_contacts =$reference= $this->database->getReference( $this->tablename)->getSnapshot()->numChildren();
     return view('table',compact('Admins','total_contacts'));
   

}


public function create(){

   return view('form');
}
public function store(Request $request){

// $ref_tablename='/-NGu3Chx-q8TQE5c0qqM';
$postData = [
'pname'=>$request->product_name,
'cellno'=>$request->cell_no,
'quantity'=>$request->product_quan,
'product_category'=>$request->product_cat,

];
$postRef = $this->database ->getReference($this->tablename)->push($postData);
if($postRef){
  return redirect('/')->with('status','Admin addedd successfully');
}
else{
  return redirect('/')->with('status','Admin not addedd successfully');
}
}
  



// public function show($id){
//    $prod = Product::find($id);
//    return view('detail',['products'=>$prod]);
//  }




 public function edit($id){
   $key =$id;

   $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();
   if($editdata)
   {
    return view('edit',compact('editdata','key'));
   }
   else{
    return redirect('/')->with('status','Admin Id not found');
   }
   
 }

 public function update(Request $request,$id){
  $key =$id;
  $updateData = [
    'pname'=>$request->product_name,
    'cellno'=>$request->cell_no,
    'quantity'=>$request->product_quan,
    'product_category'=>$request->product_cat,
    
    ];
  $resupdated=$this->database->getReference($this->tablename.'/'.$key)->update($updateData);
  if( $resupdated){
    return redirect('/')->with('status','Admin updated successfully');
  }
  else{
    return redirect('/')->with('status','Admin not updated successfully');
 }
}

 public function destroy($id){
  $key =$id;
  $resdelete=$this->database->getReference($this->tablename.'/'.$key)->remove();
   $prod = Product::destroy($id);
 if( $resdelete){
    return redirect('/')->with('status','Admin updated successfully');
  }
  else{
    return redirect('/')->with('status','Admin not updated successfully');
 }
 }
}
