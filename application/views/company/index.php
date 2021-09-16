<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newJobModal">Add New Job</a>
            <table class="table table-hover" id="tableJob">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Poster</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Category</th>
                        <th scope="col">Provider</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($job as $j) : ?>
                        <tr>
                            <th scope="row"><?= $i ?> </th>
                            <th scope="row"><?= $j['title'] ?> </th>
                            <th scope="row"><img src="<?= base_url('assets/img/provider/') . $j['img_poster']; ?>" style="width: 120px; height: 130px"></th>
                            <th scope="row"><?= word_limiter($j['deskripsi'], 30, ' ...'); ?> </th>
                            <th scope="row"><?= $j['category_id'] ?> </th>
                            <th scope="row"><?= $j['provider'] ?> </th>
                            <th scope="row"><?= $j['date_created'] ?> </th>
                            <th scope="row">
                                <a href="" data-toggle="modal" data-target="#updateJobModal<?= $j['id']; ?>" class="badge badge-success">edit</a>
                                <a class="badge badge-danger" href="<?= base_url(); ?>company/deletejob/<?= $j['id']; ?> ">delete</a>
                            </th>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newJobModal" tabindex="-1" aria-labelledby="newJobModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newJobModalLabel">Add New Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('company'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Name Job">
                </div>
                <div class=" form-group">
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        <?php foreach ($category as $c) : ?>
                            <option value="<?= $c['id'] ?>"><?= $c['category'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        Image Poster
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img_poster" name="img_poster">
                                    <label class="custom-file-label" for="img_poster">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textarea">Deskripsi: </label>
                    <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="provider" name="provider" value="<?= $user['company']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="location" name="location" value="<?= $user['address']; ?>" readonly>
                </div>
                <div class="form-group">
                    <select name="salary" id="salary" class="form-control">
                        <option value="">Select Salary</option>
                        <option value="0-1.000.000">0-1.000.000</option>
                        <option value="1.000.000-2.000.000">1.000.000-2.000.000</option>
                        <option value="2.000.000-3.000.000">1.000.000-3.000.000</option>
                        <option value="3.000.000-4.000.000">3.000.000-4.000.000</option>
                        <option value=">4.000.000">>4.000.000</option>
                        <option value="discussed">Discussed</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact" name="contact" value="<?= $user['email']; ?>" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $i = 0; ?>
<?php foreach ($job as $j) : $i++ ?>
    <div class="modal fade" id="updateJobModal<?= $j['id']; ?>" tabindex="-1" aria-labelledby="updateJobModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('company/updatejob'); ?>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $j['id']; ?>" hidden>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $j['title']; ?>">
                    </div>
                    <div class=" form-group">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="<?= $j['category_id']; ?>"><?= $c['category']; ?></option>
                            <?php foreach ($category as $c) : ?>
                                <option value="<?= $c['id'] ?>"><?= $c['category'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?= base_url('assets/img/provider/') . $j['img_poster']; ?> " class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textarea">Desription: </label>
                        <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi"><?= $j['deskripsi']; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>