<?php 
    $this->extend('layout/main');
    $this->section('body');
?>
<h1><i class="fa-solid fa-user">Update Students!</i></h1>
<br>
<form action="/students/update/<?= $student['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="studentName" class="form-label">Student Name</label>
        <input type="text" class="form-control" name="studentName" value="<?= $student['student_name']; ?>">
    </div>
    <div class="mb-3">
        <label for="studentNumber" class="form-label">Student Number</label>
        <input type="text" class="form-control" name="studentNumber" value="<?= $student['student_number']; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="studentAge" class="form-label">Student Age</label>
        <input type="text" class="form-control" name="studentAge" value="<?= $student['student_age']; ?>">
    </div>
    <div class="mb-3">
        <label for="studentCourse" class="form-label">Student Course</label>
        <input type="text" class="form-control" name="studentCourse" value="<?= $student['student_course']; ?>">
    </div>
    <div class="mb-3">
        <label for="studentLevel" class="form-label">Student Level</label>
        <input type="text" class="form-control" name="studentLevel" value="<?= $student['student_level']; ?>">
    </div>
    <div class="mb-3">
        <label for="studentProfile" class="form-label">Student Profile</label>
        <input type="file" class="form-control" name="studentProfile" value="<?= $student['student_profile']; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>




<?php 
    $this->endSection();
?>