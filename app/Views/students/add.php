<?php 
    $this->extend('layout/main');
    $this->section('body');
?>
<h1>Add Students!</h1>
<form action="/students/list" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="studentName" class="form-label">Student Name</label>
        <input type="text" class="form-control" name="studentName">
    </div>
    <div class="mb-3">
        <label for="studentNumber" class="form-label">Student Number</label>
        <input type="text" class="form-control" name="studentNumber" value="<?= $studNum; ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="studentAge" class="form-label">Student Age</label>
        <input type="text" class="form-control" name="studentAge">
    </div>
    <div class="mb-3">
        <label for="studentCourse" class="form-label">Student Course</label>
        <input type="text" class="form-control" name="studentCourse">
    </div>
    <div class="mb-3">
        <label for="studentLevel" class="form-label">Student Level</label>
        <input type="text" class="form-control" name="studentLevel">
    </div>
    <div class="mb-3">
        <label for="studentProfile" class="form-label">Student Profile</label>
        <input type="file" class="form-control" name="studentProfile">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>




<?php 
    $this->endSection();
?>