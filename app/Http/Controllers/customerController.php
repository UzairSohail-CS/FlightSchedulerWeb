<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    public function create() {
    return view("customer/create");
    return view("customer/save");
}
public function save(Request $request) {

 $Customer = new customer; // Must import the Model file: use App\Student;
 $Customer->id = $request->get('id');
 $Customer->name = $request->get('name');
 $Customer->email = $request->get('email');
 $Customer->password = $request->get('password');
 $Customer->address = $request->get('address');
 $Customer->phone_no = $request->get('phone_no');

 $Customer->save();

 return redirect('customer/create')->with('status','customer name:'.$Customer->name.'  (Customer Added Successfully)');
}

public function read() {
 $customer = customer::all(); // Load students using the model ‘Student'

 // Pass the $students to the view, 'student/read'
 return view('customer/read')->with(['customer' => $customer]);

 }
 // This function will update data from the table, students
 public function update($id) {
 $Customer = customer::find($id);     	// Load students using the model 'Student'
// Pass the $students to the view, 'student/read'
        return view('customer/update')->with(['Customer' => $Customer]);
}

// ----------------------------------------------------

   // This function will save the data from the 'update' form into the table, students
   public function saveUpdatedData(request $updateForm, $id) {
    $Customer = customer::find($id);     // Load students using the model 'Student'
//
//     $Customer->user_id = $updateForm->get('user_id');
//     $Customer->name = $updateForm->get('name');
//     $Customer->email = $updateForm->get('email');
//
    $Customer->id = $updateForm->get('id');
    $Customer->name = $updateForm->get('name');
    $Customer->email = $updateForm->get('email');
//     $Customer->password = $updateForm->get('password');
    $Customer->address = $updateForm->get('address');
    $Customer->phone_no = $updateForm->get('phone_no');
    $Customer->save();
    return redirect('customer/read');
    }

    public function delete($id) {
     // Delete the row pointed to by this CNIC
    customer::destroy($id);
     // --------------------------------------
    // Help on the following code is given at the following URL
    // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
    //
    return redirect('customer/read')->with('status', 'id '.$id.' deleted Successfully!');
     // --------------------------------------
 }

}

