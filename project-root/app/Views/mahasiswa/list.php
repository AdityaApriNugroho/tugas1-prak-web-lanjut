<div class='p-5'>
<a href="/create" type="button" class="btn btn-dark mb-3">Create</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Created At</th>
      <th scope="col">Update At</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($mahasiswa as $mhs) : ?>
    <tr>
      <td><?=$mhs['npm'] ?></td>
      <td><?=$mhs['nama'] ?></td>
      <td><?=$mhs['alamat'] ?></td>
      <td><?=$mhs['created_at'] ?></td>
      <td><?=$mhs['update_at'] ?></td>
    </tr>
    <?php $no++; endforeach; ?>
  </tbody>
</table>