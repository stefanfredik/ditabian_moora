<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"><?= $penduduk['nama_lengkap']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">NIK</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['nik'] ?></p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">No. KK</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['no_kk'] ?></p>
                    </div>
                </div>


                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['nama_lengkap'] ?></p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Jenis Kelamin</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['jenis_kelamin'] ?></p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Tanggal Lahir</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['tanggal_lahir'] ?></p>
                    </div>
                </div>

                <hr>

                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Alamat</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['alamat'] ?></p>
                    </div>
                </div>


                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Desa</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['desa'] ?></p>
                    </div>
                </div>


                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Kecamatan</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['kecamatan'] ?></p>
                    </div>
                </div>


                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Kabupaten</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['kabupaten'] ?></p>
                    </div>
                </div>


                <div class="row mb-1">
                    <div class="col-md-4">
                        <label class="form-label">Provinsi</label>
                    </div>
                    <div class="col-md-8">
                        <p><?= $penduduk['provinsi'] ?></p>
                    </div>
                </div>

                <hr>
                <h5>Data Kriteria</h5>
                <div class="border rounded p-3">
                    <?php foreach ($dataKriteria as $dt) : ?>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label class="form-label"><?= $dt['keterangan'] . ' - ' . $dt['kriteria']; ?></label>
                            </div>

                            <div class="col-md-8">
                                <?php
                                $k = $dt['keterangan'];
                                foreach ($dataSubkriteria as $sk) :
                                    if ($dt['id'] == $sk['id_kriteria']) {
                                        if (isset($penduduk[$k])) {
                                            echo ($penduduk[$k] == $sk['id']) ? '<p>' . $sk['subkriteria'] . '</p>' : false;
                                        } else {
                                            'Data Belum Lengkap';
                                        }
                                    }
                                endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <!-- <button onclick="edit('<?= $meta['url'] ?>',this)" data-id="<?= $penduduk['id']; ?>" type="submit" class="btn btn-primary">Edit</button> -->
            </div>
        </div>
    </div>
</div>