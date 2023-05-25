<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;
class StudentsController extends BaseController
{
    public function index()
    {
        $fetchStudents = new StudentsModel();
        $data['students'] = $fetchStudents->findAll();

        return view('students/list', $data);
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
        $fetchStudent = new StudentsModel();
        $data['student'] = $fetchStudent->where('id', $id)->first();

        return view('students/edit', $data);
    }
    public function update_Students($id)
    {
        $updates = new StudentsModel();
        $db = db_connect();
        if($img = $this->request->getFile('studentProfile')){
            if($img->isValid()&& ! $img->hasMoved()){
                $ProfileName = $img->getRandomName();
                $img->move('Uploads', $ProfileName);
            }
        }
        if(!empty($_FILES['studentProfile']['name'])){
            $db->query("UPDATE tbl_students SET student_profile = '$ProfileName' WHERE id = '$id' ");
        }

        $data = array(
            'student_name' => $this->request->getPost('studentName'),
            'student_number' => $this->request->getPost('studentNumber'),
            'student_age' => $this->request->getPost('studentAge'),
            'student_course' => $this->request->getPost('studentCourse'),
            'student_level' => $this->request->getPost('studentLevel'),
        );

        $updates->update($id, $data);
        return redirect()->to('/students')->with('success','Successfully Updated');
    }
    public function delete_Students($id)
    {
        
    }
}
