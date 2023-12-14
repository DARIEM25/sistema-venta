<?php echo $this->extend('client/Cliente');?>
<?php echo $this->section('contend');?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0 font-weight-bold">Hola, <?php echo session('nombre'); ?> <?php echo session('apellido'); ?></h3>
                <p>Su último acceso: hace 21 horas desde Perú.</p>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  <div class="mb-3 mb-xl-0 pr-1">
                      <div class="dropdown">
                        <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                          <h6 class="dropdown-header">Last 14 days</h6>
                          <a class="dropdown-item" href="#">Last 21 days</a>
                          <a class="dropdown-item" href="#">Last 28 days</a>
                        </div>
                      </div>
                  </div>
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Export</button>
                  </div>
                  <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>info</button>
                  </div>
                </div>
              </div>
            </div>
            
              
              
            
              
            
            
              <div class="col-lg-8 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Solicitud Amistad</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex">
                                <img class="img-sm rounded-circle mb-md-0 mr-2" src="<?php echo base_url();?>public/Dashboard/images/faces/face30.png" alt="profile image">
                                <div>
                                  <div> Compania</div>
                                  <div class="font-weight-bold mt-1">PornHub</div>
                                </div>
                              </div>
                            </td>
                            <td>
                              Budget
                              <div class="font-weight-bold  mt-1">$2322 </div>
                            </td>
                            <td>
                              Status
                              <div class="font-weight-bold text-success  mt-1">88% </div>
                            </td>
                            <td>
                              Deadline
                              <div class="font-weight-bold  mt-1">07 Nov 2019</div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-secondary">Aceptar</button>
                              <button type="button" class="btn btn-sm btn-primary">Rechazar</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex">
                                <img class="img-sm rounded-circle mb-md-0 mr-2" src="<?php echo base_url();?>public/Dashboard/images/faces/face31.png" alt="profile image">
                                <div>
                                  <div> Compania</div>
                                  <div class="font-weight-bold  mt-1">Qorilazo confecciones</div>
                                </div>
                              </div>
                            </td>
                            <td>
                              Budget
                              <div class="font-weight-bold  mt-1">$12022  </div>
                            </td>
                            <td>
                              Status
                              <div class="font-weight-bold text-success  mt-1">70% </div>
                            </td>
                            <td>
                              Deadline
                              <div class="font-weight-bold  mt-1">08 Nov 2019</div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-secondary">Aceptar</button>
                              <button type="button" class="btn btn-sm btn-primary">Rechazar</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex">
                                <img class="img-sm rounded-circle mb-md-0 mr-2" src="<?php echo base_url();?>public/Dashboard/images/faces/face32.png" alt="profile image">
                                <div>
                                  <div> Compania</div>
                                  <div class="font-weight-bold  mt-1">Qorilazito </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              Budget
                              <div class="font-weight-bold  mt-1">$8,725</div>
                            </td>
                            <td>
                              Status
                              <div class="font-weight-bold text-success  mt-1">87% </div>
                            </td>
                            <td>
                              Deadline
                              <div class="font-weight-bold  mt-1">11 Jun 2019</div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-secondary">Aceptar</button>
                              <button type="button" class="btn btn-sm btn-primary">Rechazar</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex">
                                <img class="img-sm rounded-circle mb-md-0 mr-2" src="<?php echo base_url();?>public/Dashboard/images/faces/face33.png" alt="profile image">
                                <div>
                                  <div> Compania</div>
                                  <div class="font-weight-bold  mt-1">Chumpiwalkas </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              Budget
                              <div class="font-weight-bold  mt-1">$5,220 </div>
                            </td>
                            <td>
                              Status
                              <div class="font-weight-bold text-success  mt-1">65% </div>
                            </td>
                            <td>
                              Deadline
                              <div class="font-weight-bold  mt-1">26 Oct 2019</div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-secondary">Aceptar</button>
                              <button type="button" class="btn btn-sm btn-primary">Rechazar</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex">
                                <img class="img-sm rounded-circle mb-md-0 mr-2" src="<?php echo base_url();?>public/Dashboard/images/faces/face34.png" alt="profile image">
                                <div>
                                  <div> Compania</div>
                                  <div class="font-weight-bold  mt-1">Oqe punchu</div>
                                </div>
                              </div>
                            </td>
                            <td>
                              Budget
                              <div class="font-weight-bold  mt-1">$2322 </div>
                            </td>
                            <td>
                              Status
                              <div class="font-weight-bold text-success mt-1">88% </div>
                            </td>
                            <td>
                              Deadline
                              <div class="font-weight-bold  mt-1">07 Nov 2019</div>
                            </td>
                            <td>
                              <button type="button" class="btn btn-sm btn-secondary">Aceptar</button>
                              <button type="button" class="btn btn-sm btn-primary">Rechazar</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <?php echo $this->endSection();?>