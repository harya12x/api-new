    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
            <div class="card">
              <div class="card-header"> <?= $title ?> </h3>
              </div>
              <div class="card-body table-responsive">
                <table id="myTable" class="table table-bordered table-striped text-center">
                  <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($data as $d) { ?>
                      <tr>
                        <td width="1%"><?= $no++ ?></td>
                        <td><?= ucfirst($d->nama) ?></td>
                        <td><?= ucfirst($d->waktu) ?></td>
                        <td><?= ucfirst($d->keterangan) ?></td>
                        <td> <a onclick="return confirm('apakah anda yakin ingin menghapus ini?')" href="<?= base_url('admin/absen_delete/' . $d->id_absen) ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>