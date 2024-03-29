  <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">

          <div class="col-xl-10 col-lg-12 col-md-9">

              <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                  <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                          <div class="col-lg">
                              <div class="p-5">
                                  <div class="text-center">
                                      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                  </div>
                                  <form class="user" method="post" action="<?= base_url('auth/registration') ?> ">
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                                          <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" <?= set_value('email'); ?>>
                                          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-sm-6 mb-3 mb-sm-0">
                                              <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                          </div>
                                          <div class="col-sm-6">
                                              <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-sm-6 mb-3">
                                              <div class="form-check">
                                                  <input class="form-check-input" onclick="regInput(this)" type="radio" name="role" id="role" value="2" checked>
                                                  <label class="form-check-label" for="role">
                                                      Registration User
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="col-sm-6 mb-3">
                                              <div class="form-check">
                                                  <input class="form-check-input " onclick="regInput(this)" type="radio" name="role" id="role" value="3">
                                                  <label class="form-check-label" for="role">
                                                      Registration Company
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div id="provider-input">
                                          <div class="form-group">
                                              <input type="text" class="form-control form-control-user" id="company" name="company" placeholder="Company name">
                                              <?= form_error('company', '<small class="text-danger pl-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <div class="row">
                                                  <div class="col-8">
                                                      <input type="text" name="address" id="address" class="form-control form-control-user" value="<?= $address ?>">
                                                  </div>
                                                  <div class="col">
                                                      <input type="number" name="zip" id="zip" class="form-control form-control-user" placeholder="Zip">
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <button href="submit" class="btn btn-primary btn-user btn-block">
                                          Register Account
                                      </button>
                                  </form>
                                  <hr>
                                  <div class="text-center">
                                      <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                  </div>
                                  <div class="text-center">
                                      <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>