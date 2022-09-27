<?= $this->extend('template')?>
<?= $this->section('content')?>
<div class='p-5'>
<a href="/create" type="button" class="btn btn-dark mb-3"><i class="fa fa-plus"></i>Create</a>
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
      <td>
        <div class="d-flex">
          <a class="btn btn-warning mr-3" href="/edit/<?=$mhs['id'] ?>">Edit</a>
          <form action="/delete/<?= $mhs['id'] ?>" method="post">
            <input hidden name="_method" value="DELETE" type="hidden">
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
          </form>
        </div>
      </td>
    </tr>
    <?php $no++; endforeach; ?>
  </tbody>
</table>
<?= $this->endSection()?>