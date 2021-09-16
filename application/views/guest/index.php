<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h3 mb-4 text-gray-800"><?= $title; ?></h2>

    <div class="row">
        <div class="col-lg-8">
            <?php $i = 1; ?>
            <?php foreach ($job as $j) : ?>
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <a href="" data-toggle="modal" data-target="#detailJobModal<?= $j['id']; ?>">
                            <h5 class="card-title"><?= $j['title'] ?></h5>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="" class="card-text"> <i class="fas fa-fw fa-map-marked-alt"></i> <?= $j['location']; ?> -</a>
                        <a href="" class="card-text"><?= $j['provider'] ?></a>
                        <p class="card-text"><i class="fas fa-fw fa-money-bill-wave"></i> Rp <?= $j['salary'] ?></p>
                        <p class="card-text"><?= word_limiter($j['deskripsi'], 25, ' ....'); ?> <a href="<?= base_url('auth') ?>">for detail information, please login.</a> </p>
                    </div>
                    <div class=" card-footer">
                        <p class="card-text"><small class="text-muted">update at <?= $j['date_created']; ?></small></p>

                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach ?>
        </div>
        <div class="col-4">
            <h5>Space Iklan</h5>
            <?php $i = 1; ?>
            <?php foreach ($job as $j) : ?>
                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title"><?= $j['title'] ?></h5>
                    </div>
                    <div class="card-body">
                        <img src="<?= base_url('assets/img/iklan/iklan.png') ?>" width="100%">
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!--Modal-->
<?php $i = 0; ?>
<?php foreach ($job as $j) : $i++ ?>
    <div class="modal fade" id="detailJobModal<?= $j['id']; ?>" tabindex="-1" aria-labelledby="detailJobModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailJobModalLabel">Detail Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card border-info mb-3">
                        <div class="card-header">
                            <h5 class="card-title"><?= $j['title'] ?></h5>
                        </div>
                        <div class="card-body">
                            <a href="" class="card-text"> <i class="fas fa-fw fa-map-marked-alt"></i> <?= $j['location']; ?> -</a>
                            <a href="" class="card-text"><?= $j['provider'] ?></a>
                            <p class="card-text"><i class="fas fa-fw fa-money-bill-wave"></i> Rp <?= $j['salary'] ?></p>
                            <p class="card-text"><?= word_limiter($j['deskripsi'], 25, ' ....'); ?> <a href="<?= base_url('auth') ?>">for detail information, please login.</a> </p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">update at <?= $j['date_created']; ?></small></p>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>