<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function all()
    {
        return Students::all();
    }

    public function getStudentsById(Request $request)
    {
        return Students::getStudents($request->student_id);
    }
}
