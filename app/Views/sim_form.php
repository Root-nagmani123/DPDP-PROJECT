<?= $this->extend('layouts/base')?>
<?= $this->section('content')?> 
 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Apply for new SIM</h4>
                  </div>
                  <div class="card-body">
                    <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name<code>*</code></label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Gender <code>*</code></label>
                      <select class="form-control" required>
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Date Of Birth<code>*</code></label>
                      <input id="last_name" type="date" class="form-control" name="last_name" >
                    </div>
                  </div>
                   <div class="row">
                  <div class="form-group col-6">
                    <label for="email">Email <code>*</code></label>
                    <input id="email" type="email" class="form-control" name="email" >
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="email">Phone No.</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="email">Address</label>
                    <textarea class="form-control" name="email"></textarea>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Identification Card<code>*</code></label>
                      <input id="password" type="file" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password" >
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Photo<code>*</code></label>
                      <input id="password2" type="file" class="form-control" name="password-confirm" >
                    </div>
                  </div>
                 <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-5 col-lg-5"></label>
                      <div class="col-sm-12 col-md-5">
                        <a class="btn btn-primary" href="sim.html">submit</a>
                      </div>
                    </div>
                </form>
                    </div>
                  </div>

                  
                </div>
            </div>
          </div>
        </section>
      </div>
<?= $this->endSection()?>
