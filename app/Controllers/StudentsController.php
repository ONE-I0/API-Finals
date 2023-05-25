<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;
class StudentsController extends BaseController
{
    public function index()
    {
        return view('students/list');
    }
    public function create_Students()
    {
        $data['studNum'] = '20000'. \uniqid();
        return view('students/add', $data);
    }
    public function store_Students()
    {
        $inserts = new StudentsModel();

        if($img = $this->request->getFile('studentProfile')){
            if($img->isValid() && ! $img->hasMoved()){
                $ProfileName = $img->getRandomName();
                $img->move('Uploads', $ProfileName);
            }
        }
        
        $data = array(
            'student_name' => $this->request->getPost('studentName'),
            'student_number' => $this->request->getPost('studentNumber'),
            'student_age' => $this->request->getPost('studentAge'),
            'student_course' => $this->request->getPost('studentCourse'),
            'student_level' => $this->request->getPost('studentLevel'),
            'student_profile' => $ProfileName,
        );
        
        $inserts->insert($data);
        return redirect()->to('/students')->with('success','Successfully Added');
    }
    public function edit_Students($id)
    {
        
    }
    public function update_Students($id)
    {
        
    }
    public function delete_Students($id)
    {
        
    }
}
