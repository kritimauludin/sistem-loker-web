<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"><i class="fab fa-atlassian"> LoKarya</i></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#jumbotron-page" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#company" class="nav-link text-uppercase font-weight-bold">Company</a></li>
                    <li class="nav-item"><a href="#find-job" class="nav-link text-uppercase font-weight-bold">Job Seekers</a></li>
                    <li class="nav-item"><a href="<?= base_url('/') ?>auth" class="btn btn-outline mr-10">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="row text-center">
    <!--Jumbotron-->
    <div class="container mb-10 jumbotron-page" id="jumbotron-page">
        <div class="pt-5 text-white col-12">
            <header class="py-5 row mt-5">
                <div class="col-lg-8">
                    <img class="img-responsive" width="100%" src="<?= base_url('assets/') ?>img/landing/people.png" alt="">
                </div>
                <div class="col-lg-4 text-jumbotron" data-aos="fade-up">
                    <div class="text-jumbotron text-left">
                        <h1 class="display-4">Hello, Lokerss!</h1>
                        <p class="lead mb-0">This website will help you <strong>find a job</strong>, or help your company <strong>find suitable new employees.</strong><br></p>
                        <br>
                    </div>
                    <a href="<?= base_url('auth/registration') ?>" class="btn btn-secondary btn-md" role="button">Register</a>
                    <a href="<?= base_url('guest') ?>" class="btn btn-secondary btn-md" role="button">Find Job</a>
                </div>
            </header>
        </div>
    </div>

    <div class="bg-job" id="company">
        <img src="<?= base_url('assets/img/landing/bg.jpg') ?>" width="100%">
        <div class="container mt-20">
            <div class="job row ">
                <img src="<?= base_url('assets/') ?>img/landing/run.png" data-aos="fade-down">
                <div class="col-lg-4 col-sm-12">
                    <div class="row mb-2">
                        <div class="text-job text-center" data-aos="fade-up">
                            <p class="text-white">
                                <br>
                                <br>
                                In the process of posting a job, we have a form that makes it very easy for you as part of a company that is looking for employees and this form is very easy to understand.
                            </p>
                            <a href="" data-toggle="modal" data-target="#showFormJobModal" class="btn btn-secondary btn-md" role="button">Show Form Job</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-job  text-center" data-aos="fade-up">
                            <p class="text-white">
                                <br>
                                <br>
                                In the process of posting a job, we have a form that makes it very easy for you as part of a company that is looking for employees and this form is very easy to understand.
                            </p>
                            <a href="" data-toggle="modal" data-target="#showFormJobModal" class="btn btn-secondary btn-md" role="button">Show Form Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12 text-center job-search border-content" id="find-job">
            <div class="row">
                <div class="col-lg-3 col-sm-12" data-aos="flip-left">
                    <p class="text-white col-12 text-job-search-left ">
                        We provide a very complete view for job seekers, starting from changing your profile photo and so on. You can also see job vacancies from a full page through the sidebar on the left. but access is only obtained if you have registered on this website.
                        <br>
                    </p>
                    <a href="<?= base_url('auth/registration') ?>" class="btn btn-secondary btn-md" role="button">Register now</a>
                </div>
                <div class="col-lg-5 mx-auto" data-aos="fade-up">
                    <img class="img-search" src=" <?= base_url('assets/') ?>img/landing/run.jpg" alt="">
                </div>
                <div class="col-lg-3 col-sm-12" data-aos="flip-right">
                    <p class="text-white col-12 text-job-search-right ">
                        If you don't want to register now you can see the latest jobs and you just have to choose a job that suits your expertise. in this view there are limitations because our system reads you as a guest, if no problem click the button below and you will be redirected to the job page.
                        <br>
                    </p>
                    <a href="<?= base_url('guest') ?>" class="btn btn-secondary btn-md" role="button">Find job now</a>
                </div>
            </div>

        </div>
    </div>


    <footer class=" col-12 sticky-footer bg-white mt-4">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Lokarya 2020</span>
            </div>
        </div>
    </footer>
</div>


<!-- Modal -->
<div class="modal fade" id="showFormJobModal" tabindex="-1" aria-labelledby="showFormJobModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showFormJobModalLabel">Add New Job</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Name Job" readonly>
                </div>
                <div class=" form-group">
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Category</option>
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
                                    <input type="file" readonly class="custom-file-input" id="img_poster" name="img_poster">
                                    <label class="custom-file-label" for="img_poster">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textarea">Deskripsi: </label>
                    <textarea class="form-control" rows="3" readonly id="deskripsi" name="deskripsi" placeholder="Your job description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="provider" name="provider" value="Your Company Name" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="location" name="location" value="Your Company Address" readonly>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>