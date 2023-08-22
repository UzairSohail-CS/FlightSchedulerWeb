<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\flight;
use App\Models\passenger;

class flightController extends Controller
{
    public function create() {
    return view("flight/create");
    return view("flight/save");
}
public function save(Request $request) {

 $Flight = new flight; // Must import the Model file: use App\Student;
 $Flight->id = $request->get('id');
 $Flight->name = $request->get('name');
 $Flight->from_location = $request->get('from_location');
 $Flight->destination = $request->get('destination');
 $Flight->save();

 return redirect('flight/create')->with('status','flight name:'.$Flight->name.'  (Your flight is ready..!!)');
}

public function read() {
 $flight = flight::all(); // Load students using the model ‘Student'

 // Pass the $students to the view, 'student/read'
 return view('flight/read')->with(['flight' => $flight]);

 }
 // This function will update data from the table, students
 public function update($id) {
 $Flight = flight::find($id);
        return view('flight/update')->with(['Flight' => $Flight]);
}

   public function saveUpdatedData(request $updateForm, $id) {
    $Flight = flight::find($id);
    $Flight->id = $updateForm->get('id');
    $Flight->name = $updateForm->get('name');
    $Flight->from_location = $updateForm->get('from_location');
    $Flight->destination = $updateForm->get('destination');
    $Flight->save();
    return redirect('flight/read');
    }

    public function delete($id) {
    flight::destroy($id);

    return redirect('flight/read')->with('status', 'id '.$id.' deleted Successfully!');
     // --------------------------------------
 }

}

