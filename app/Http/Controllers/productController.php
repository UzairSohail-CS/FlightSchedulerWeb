<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;

class productController extends Controller
{
    public function create() {
    $brand = brand::all(); // Load all departments. To add in the dropdown
    return view ("product/create")->with(['brand' => $brand]);
}

public function save(Request $request) {

 $Product = new product; // Must import the Model file: use App\Student;
 $Product->id = $request->get('id');
 $Product->price = $request->get('price');
 $Product->name = $request->get('name');
 $Product->size = $request->get('size');
 $Product->brands_id = $request->get('brand');
 $Product->save();

 return redirect('product/create')->with('status','product name:'.$Product->name.'  (Product Added Successfully)');
}

public function read() {
 $product = product::all(); // Load students using the model ‘Student'

 // Pass the $students to the view, 'student/read'
 return view('product/read')->with(['product' => $product]);

 }
 // This function will update data from the table, students
 public function update($id) {
 $Product = product::find($id);     	// Load students using the model 'Student'
// Pass the $students to the view, 'student/read'
        return view('product/update')->with(['Product' => $Product]);
}

// ----------------------------------------------------

   // This function will save the data from the 'update' form into the table, students
   public function saveUpdatedData(request $updateForm, $id) {
    $Product = product::find($id);     // Load students using the model 'Student'
//
//     $Customer->user_id = $updateForm->get('user_id');
//     $Customer->name = $updateForm->get('name');
//     $Customer->email = $updateForm->get('email');
//
    $Product->id = $updateForm->get('id');
    $Product->price = $updateForm->get('price');
    $Product->name = $updateForm->get('name');
//     $Customer->password = $updateForm->get('password');
    $Product->size = $updateForm->get('size');
//     $Customer->phone_no = $updateForm->get('phone_no');
    $Product->save();
    return redirect('product/read');
    }

    public function delete($id) {
     // Delete the row pointed to by this CNIC
    product::destroy($id);
     // --------------------------------------
    // Help on the following code is given at the following URL
    // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
    //
    return redirect('product/read')->with('status', 'id '.$id.' deleted Successfully!');
     // --------------------------------------
 }

}

