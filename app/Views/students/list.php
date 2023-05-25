<?php 
    $this->extend('layout/main');
    $this->section('body');
?>
<?php if(session()->getFlashdata('success')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       <?= session()->getFlashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

<h1>List of Students</h1>
<a href="/students/add" class="btn btn-primary">Add Students</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Number</th>
      <th scope="col">Student Age</th>
      <th scope="col">Student Course</th>
      <th scope="col">Student Level</th>
      <th scope="col">Student Profile</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($students as $stud): ?>
    <tr>
      <th scope="row"><?= $stud['id']; ?></th>
      <td><?= $stud['student_name']; ?></td>
      <td><?= $stud['student_number']; ?></td>
      <td><?= $stud['student_age']; ?></td>
      <td><?= $stud['student_course']; ?></td>
      <td><?= $stud['student_level']; ?></td>
      <td><img src="/Uploads/<?= $stud['student_profile']; ?>"alt="" width="100"></td>
      <td>
            <a href=""></a>
            <a href="/students/edit/<?= $stud['id']; ?>" class="btn btn-primary">Edit</a>
            <a href="/students/delete/<?= $stud['id']; ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<?php $this->endSection() ?>