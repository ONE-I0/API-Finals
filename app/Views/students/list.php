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
   
  </tbody>
</table>



<?php $this->endSection() ?>