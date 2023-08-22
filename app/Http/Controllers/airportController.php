<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\airport;
// use App\Models\traveller;
class airportController extends Controller
{
    public function create() {
    return view("airport/create");
    return view("airport/save");
}
public function save(Request $request) {

 $Airport = new airport; // Must import the Model file: use App\Student;
 $Airport->id = $request->get('id');
 $Airport->name = $request->get('name');
 $Airport->number = $request->get('number');
 $Airport->air = $request->get('air');
 $Airport->save();

 return redirect('airport/create')->with('status','airport name:'.$Airport->name.'  (Your airline data is saved..!!)');
}

public function read() {
 $airport = airport::all(); // Load students using the model ‘Student'

 // Pass the $students to the view, 'student/read'
 return view('airport/read')->with(['airport' => $airport]);

 }
 // This function will update data from the table, students
 public function update($id) {
 $Airport = airport::find($id);
        return view('airport/update')->with(['Airport' => $Airport]);
}

   public function saveUpdatedData(request $updateForm, $id) {
    $Airport = airport::find($id);
    $Airport->id = $updateForm->get('id');
    $Airport->name = $updateForm->get('name');
    $Airport->number = $updateForm->get('number');
    $Airport->air = $updateForm->get('air');
    $Airport->save();
    return redirect('airport/read');
    }

    public function delete($id) {
    airport::destroy($id);

    return redirect('airport/read')->with('status', 'id '.$id.' deleted Successfully!');
     // --------------------------------------
 }

}

