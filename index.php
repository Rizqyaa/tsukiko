<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fufufu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <?php 
$db = new PDO("mysql:host=localhost;dbname=fumafu", 'root', '');
$query = $db->query('select * from mahasiswa');

?>
<div class="container-sm ">
<div class="d-grid gap-2 col-6 mx-auto ">
<a href="tambah.php" class="btn mb-1 bg-primary bg-gradient text-white w-25 " id="insert">Insert<span class="badge text-bg-secondary">+</span></a>

</div>
<table class="table table-light table-borderless container text-center border border-2 shadow p-3 mb-5 bg-body w-50 p-3">
  <thead>
    <tr class="table-dark">
        <th>Id</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody class="">
    <?php
    while ($data = $query->fetch()):?>
    <tr>

        
        <td><?= $data['id']?></td>
        
        <td><?= $data['nama']?></td>

        <td><?= $data['jurusan']?></td>
        
        <td>
        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-secondary"> Update </a>
        
        <a href="prodelete.php?id=<?= $data['id']; ?>" class="btn btn-danger"> Delete </a>
        </td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</div>
  </body>
</html>