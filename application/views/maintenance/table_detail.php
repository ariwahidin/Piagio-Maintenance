<div class="row">
    <div class="col-md-8">
        <div class="table-responsive" style="max-height: 300px;">
            <table style="font-size: 12px;" class="table table-sm table-bordered table-striped table-responsive align-middle mb-0" id="tableDetail">
                <thead>
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">ITEM CHECKED</th>
                        <th scope="col">CONDITION</th>
                        <th scope="col">DESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($item->result() as $data) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->{'ITEM CHECKED'} ?></td>
                            <td><?= $data->{'CONDITION'} ?></td>
                            <td><?= $data->{'DESCRIPTION'} ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <?php
            if (!is_null($photo)) {
            ?>
                <img class="card-img-top img-fluid" src="<?= base_url() ?>uploads/<?= $photo->file_name ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text mb-2">Keterangan gambar : </p>
                    <p class="card-text"><strong><?= $photo->img_ket ?>.</strong></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>