<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\attendant;
use App\Models\type;


class attendantController extends Controller
{
    public function create() {
    $Type = type::all(); // Load all departments. To add in the dropdown
    return view ("attendant/create")->with(['Type' => $Type]);
}
public function save(Request $request) {

 $Attendant = new attendant; // Must import the Model file: use App\Student;
 $Attendant->id = $request->get('id');
 $Attendant->name = $request->get('name');
 $Attendant->seat_no = $request->get('seat_no');
 $Attendant->type_id = $request->get('type');
 $Attendant->save();

 return redirect('attendant/create')->with('status','Attendant name:'.$Attendant->name.'  (Your flight is ready..!!)');
}

public function read() {
 $attendant = attendant::all(); // Load students using the model ‘Student'

 // Pass the $students to the view, 'student/read'
 return view('attendant/read')->with(['attendant' => $attendant]);

 }
 // This function will update data from the table, students
 public function update($id) {
 $Attendant = attendant::find($id);     	// Load students using the model 'Student'
// Pass the $students to the view, 'student/read'
        return view('attendant/update')->with(['Attendant' => $Attendant]);
}

// ----------------------------------------------------

   // This function will save the data from the 'update' form into the table, students
   public function saveUpdatedData(request $updateForm, $id) {
    $Attendant = attendant::find($id);
    $Attendant->id = $updateForm->get('id');
    $Attendant->name = $updateForm->get('name');
    $Attendant->seat_no = $updateForm->get('seat_no');
    $Attendant->save();
    return redirect('attendant/read');
    }

    public function delete($id) {
    attendant::destroy($id);
    return redirect('attendant/read')->with('status', 'id '.$id.' deleted Successfully!');
     // --------------------------------------
 }

}

