<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Data Mekanik</h1>

<?php if(session()->getFlashdata('message')) : ?>
        
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message');?>
    </div>

<?php endif; ?>

<div class="mb-2">
    <a href="<?= base_url('admin/mekanik/create');?>" class="btn btn-primary">Tambah Data</a>
</div>

<div>
    <table class="table table-bordered">
      <thead class="text-center">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Handphone</th>
            <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php $i = 1; ?>
        <?php foreach ($mekanik as $m) : ?>
        <tr>
            <th class="text-center" scope="row"><?= $i++; ?></th>
            <td><?= $m['nama_mekanik']; ?></td>
            <td><?= $m['alamat']; ?></td>
            <td><?= $m['no_hp']; ?></td>
            <td class="text-center">
            <a href="/admin/mekanik/<?= $m['id']; ?>" class="btn btn-success">Detail</a>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>

<?= $this->endSection(); ?>