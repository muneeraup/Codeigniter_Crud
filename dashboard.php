<?php require_once __DIR__ . '/./common/header.php' ?>


<!-- Add Modal -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('add/data') ?>" method="post" id="save_data" onsubmit="return false;">
        <div class="modal-body">
          <div class="row">
            <input type="hidden" name="id" id="id_add">

            <div class="col-md-12">
              <div class="error-message">

              </div>
            </div>

            <div class="col-md-4">
              <label for=""> First Name</label>
              <input type="text" id="add_model_name" name="fname" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">Last Name</label>
              <input type="text" id="add_model_lname" name="lname" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Company name</label>
              <input type="text" id="add_model_company" name="companyname" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Email</label>
              <input type="text" id="add_model_email" name="email" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">Phone</label>
              <input type="text" id="add_model_phone" name="phone" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Mobile</label>
              <input type="text" id="add_model_mobile" name="mobile" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Address</label>
              <input type="text" id="add_model_address" name="address" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">City</label>
              <input type="text" id="add_model_city" name="city" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">State</label>
              <input type="text" id="add_model_state" name="state" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Zip</label>
              <input type="text" id="add_model_zip" name="zip" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Country Code</label>
              <select class="form-control valid" id="add_model_country" name="country" aria-invalid="false">

                <option value="93">Afghanistan +93</option>
                <option value="358">Aland Islands +358</option>
                <option value="355">Albania +355</option>
                <option value="213">Algeria +213</option>
                <option value="1684">American Samoa +1684</option>
                <option value="376">Andorra +376</option>
                <option value="244">Angola +244</option>
                <option value="1264">Anguilla +1264</option>
                <option value="672">Antarctica +672</option>
                <option value="1268">Antigua and Barbuda +1268</option>
                <option value="54">Argentina +54</option>
                <option value="374">Armenia +374</option>
                <option value="297">Aruba +297</option>
                <option value="61">Australia +61</option>
                <option value="43">Austria +43</option>
                <option value="994">Azerbaijan +994</option>
                <option value="1242">Bahamas +1242</option>
                <option value="973">Bahrain +973</option>
                <option value="880">Bangladesh +880</option>
                <option value="1246">Barbados +1246</option>
                <option value="375">Belarus +375</option>
                <option value="32">Belgium +32</option>
                <option value="501">Belize +501</option>
                <option value="229">Benin +229</option>
                <option value="1441">Bermuda +1441</option>
                <option value="975">Bhutan +975</option>
                <option value="591">Bolivia +591</option>+
              </select>
            </div>
            <div class="col-md-4">
              <label for="">Status</label>
              <select class="form-control valid" name="is_active" id="add_model_status" aria-invalid="false">
                <option value="" disabled=""> -- Select --</option>
                <option value="Active" selected>Active
                </option>
                <option value="InActive">Inactive
                </option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" id="add-save" class="btn btn-info ">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Add Modal -->


<!-- Edit Modal -->

<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('add/data') ?>" method="post" id="save_form" onsubmit="return false;">
        <div class="modal-body">
          <div class="row">
            <input type="hidden" name="id" id="id_edit">

            <div class="col-md-12">
              <div class="error-message">

              </div>
            </div>

            <div class="col-md-4">
              <label for=""> First Name</label>
              <input type="text" id="model_name" name="fname" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">Last Name</label>
              <input type="text" id="model_lname" name="lname" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Company name</label>
              <input type="text" id="model_company" name="companyname" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Email</label>
              <input type="text" id="model_email" name="email" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">Phone</label>
              <input type="text" id="model_phone" name="phone" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Mobile</label>
              <input type="text" id="model_mobile" name="mobile" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Address</label>
              <input type="text" id="model_address" name="address" class="form-control"><br>
            </div>
            <div class="col-md-4">
              <label for="">City</label>
              <input type="text" id="model_city" name="city" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">State</label>
              <input type="text" id="model_state" name="state" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Zip</label>
              <input type="text" id="model_zip" name="zip" class="form-control">
            </div>
            <div class="col-md-4">
              <label for="">Country Code</label>
              <select class="form-control valid" id="add_model_country" name="country" aria-invalid="false">

                <option value="93">Afghanistan +93</option>
                <option value="358">Aland Islands +358</option>
                <option value="355">Albania +355</option>
                <option value="213">Algeria +213</option>
                <option value="1684">American Samoa +1684</option>
                <option value="376">Andorra +376</option>
                <option value="244">Angola +244</option>
                <option value="1264">Anguilla +1264</option>
                <option value="672">Antarctica +672</option>
                <option value="1268">Antigua and Barbuda +1268</option>
                <option value="54">Argentina +54</option>
                <option value="374">Armenia +374</option>
                <option value="297">Aruba +297</option>
                <option value="61">Australia +61</option>
                <option value="43">Austria +43</option>
                <option value="994">Azerbaijan +994</option>
                <option value="1242">Bahamas +1242</option>
                <option value="973">Bahrain +973</option>
                <option value="880">Bangladesh +880</option>
                <option value="1246">Barbados +1246</option>
                <option value="375">Belarus +375</option>
                <option value="32">Belgium +32</option>
                <option value="501">Belize +501</option>
                <option value="229">Benin +229</option>
                <option value="1441">Bermuda +1441</option>
                <option value="975">Bhutan +975</option>
                <option value="591">Bolivia +591</option>+
              </select>
            </div>
            <div class="col-md-4">
              <label for="">Status</label>
              <select class="form-control valid" name="is_active" id="model_status" aria-invalid="false">
                <option value="" disabled=""> -- Select --</option>
                <option value="Active" selected>Active
                </option>
                <option value="InActive">Inactive
                </option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="edit_close" data-dismiss="modal">Close</button>
          <button type="button" id="update_data" class="btn btn-success ">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Edit Modal -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-xl-4">
          <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
              <div class="row">
                <div class="col-7">
                  <div class="text-primary p-3">
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p>Dynamo Dashboard</p>
                  </div>
                </div>
                <div class="col-5 align-self-end">
                  <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-sm-4">
                  <div class="avatar-md profile-user-wid mb-4">
                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                  </div>
                  <h5 class="font-size-15 text-truncate">Henry Price</h5>
                  <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                </div>

                <div class="col-sm-8">
                  <div class="pt-4">

                    <div class="row">
                      <div class="col-6">
                        <h5 class="font-size-15">125</h5>
                        <p class="text-muted mb-0">Projects</p>
                      </div>
                      <div class="col-6">
                        <h5 class="font-size-15">$1245</h5>
                        <p class="text-muted mb-0">Revenue</p>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Monthly Earning</h4>
              <div class="row">
                <div class="col-sm-6">
                  <p class="text-muted">This month</p>
                  <h3>$34,252</h3>
                  <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                  <div class="mt-4">
                    <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mt-4 mt-sm-0">
                    <div id="radialBar-chart" class="apex-charts"></div>
                  </div>
                </div>
              </div>
              <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="row">
            <div class="col-md-4">
              <div class="card mini-stats-wid">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium">Orders</p>
                      <h4 class="mb-0">1,235</h4>
                    </div>

                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                      <span class="avatar-title">
                        <i class="bx bx-copy-alt font-size-24"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mini-stats-wid">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium">Revenue</p>
                      <h4 class="mb-0">$35, 723</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                      <span class="avatar-title rounded-circle bg-primary">
                        <i class="bx bx-archive-in font-size-24"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mini-stats-wid">
                <div class="card-body">
                  <div class="media">
                    <div class="media-body">
                      <p class="text-muted fw-medium">Average Price</p>
                      <h4 class="mb-0">$16.2</h4>
                    </div>

                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                      <span class="avatar-title rounded-circle bg-primary">
                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end row -->

          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex flex-wrap">
                <h4 class="card-title mb-4">Email Sent</h4>
                <div class="ms-auto">
                  <ul class="nav nav-pills">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Week</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Month</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Year</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Social Source</h4>
              <div class="text-center">
                <div class="avatar-sm mx-auto mb-4">
                  <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                    <i class="mdi mdi-facebook text-primary"></i>
                  </span>
                </div>
                <p class="font-16 text-muted mb-2"></p>
                <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
              </div>
              <div class="row mt-4">
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span class="avatar-title rounded-circle bg-primary font-size-16">
                        <i class="mdi mdi-facebook text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Facebook</h5>
                    <p class="text-muted mb-0">125 sales</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span class="avatar-title rounded-circle bg-info font-size-16">
                        <i class="mdi mdi-twitter text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Twitter</h5>
                    <p class="text-muted mb-0">112 sales</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="social-source text-center mt-3">
                    <div class="avatar-xs mx-auto mb-3">
                      <span class="avatar-title rounded-circle bg-pink font-size-16">
                        <i class="mdi mdi-instagram text-white"></i>
                      </span>
                    </div>
                    <h5 class="font-size-15">Instagram</h5>
                    <p class="text-muted mb-0">104 sales</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-5">Activity</h4>
              <ul class="verti-timeline list-unstyled">
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="media">
                    <div class="me-3">
                      <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                    </div>
                    <div class="media-body">
                      <div>
                        Responded to need “Volunteer Activities
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="media">
                    <div class="me-3">
                      <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                    </div>
                    <div class="media-body">
                      <div>
                        Everyone realizes why a new common language would be desirable... <a href="#">Read more</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list active">
                  <div class="event-timeline-dot">
                    <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                  </div>
                  <div class="media">
                    <div class="me-3">
                      <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                    </div>
                    <div class="media-body">
                      <div>
                        Joined the group “Boardsmanship Forum”
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="media">
                    <div class="me-3">
                      <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                    </div>
                    <div class="media-body">
                      <div>
                        Responded to need “In-Kind Opportunity”
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="text-center mt-4"><a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Top Cities Selling Product</h4>

              <div class="text-center">
                <div class="mb-4">
                  <i class="bx bx-map-pin text-primary display-4"></i>
                </div>
                <h3>1,456</h3>
                <p>San Francisco</p>
              </div>

              <div class="table-responsive mt-4">
                <table class="table align-middle table-nowrap">
                  <tbody>
                    <tr>
                      <td style="width: 30%">
                        <p class="mb-0">San Francisco</p>
                      </td>
                      <td style="width: 25%">
                        <h5 class="mb-0">1,456</h5>
                      </td>
                      <td>
                        <div class="progress bg-transparent progress-sm">
                          <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="mb-0">Los Angeles</p>
                      </td>
                      <td>
                        <h5 class="mb-0">1,123</h5>
                      </td>
                      <td>
                        <div class="progress bg-transparent progress-sm">
                          <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p class="mb-0">San Diego</p>
                      </td>
                      <td>
                        <h5 class="mb-0">1,026</h5>
                      </td>
                      <td>
                        <div class="progress bg-transparent progress-sm">
                          <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">User Data</h4>
              <div class="col-lg-12">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#AddModal" class="float-right btn btn-primary btn-sm" style="margin: 4px;"><i class="fa fa-plus"></i> Add</a>
              </div><br><br>
              <div class="table-responsive">

                <table  id="datatable-buttons" class="table dt-responsive nowrap w-100">
                  <thead class="table-light">
                    <tr>
                      <th class="align-middle">ID</th>
                      <th class="align-middle">First Name</th>
                      <th class="align-middle">Last Name</th>
                      <th class="align-middle">Company Name</th>
                      <th class="align-middle">Email</th>
                      <th class="align-middle">Phone</th>
                      <th class="align-middle">Mobile</th>
                      <th class="align-middle">Address</th>
                      <th class="align-middle">City</th>
                      <th class="align-middle">State</th>
                      <th class="align-middle">Zip</th>
                      <th class="align-middle">Country Code</th>
                      <th class="align-middle">status</th>
                      <th class="align-middle">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php


                    foreach ($Registration as $row) : ?>

                      <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->first_name; ?></td>
                        <td><?php echo $row->last_name; ?></td>
                        <td><?php echo $row->company_name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->mobile; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <td><?php echo $row->city; ?></td>
                        <td><?php echo $row->state; ?></td>
                        <td><?php echo $row->zip; ?></td>
                        <td><?php echo $row->country_code; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td>
                          <a href="javascript:void(0)" onclick="showdata('<?= $row->id ?>')" class="btn btn-primary btn-sm waves-effect waves-light" title="Edit"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                          <a href="javascript:void(0)" onclick="del('<?= $row->id ?>')" class="btn btn-danger btn-sm waves-effect waves-light" title="delete"><i class="fas fa-trash-alt" aria-hidden="true"></i></a>
                        </td>

                      </tr>
                    <?php endforeach; ?>

                    <!-- <tr>

                      <td>
                        <span class="badge badge-pill badge-soft-success font-size-11">active</span>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <!-- end table-responsive -->
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  <!-- Transaction Modal -->
  <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog" aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
          <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

          <div class="table-responsive">
            <table class="table align-middle table-nowrap">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <div>
                      <img src="assets/images/product/img-7.png" alt="" class="avatar-sm">
                    </div>
                  </th>
                  <td>
                    <div>
                      <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                      <p class="text-muted mb-0">$ 225 x 1</p>
                    </div>
                  </td>
                  <td>$ 255</td>
                </tr>
                <tr>
                  <th scope="row">
                    <div>
                      <img src="assets/images/product/img-4.png" alt="" class="avatar-sm">
                    </div>
                  </th>
                  <td>
                    <div>
                      <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                      <p class="text-muted mb-0">$ 145 x 1</p>
                    </div>
                  </td>
                  <td>$ 145</td>
                </tr>
                <tr>
                  <td colspan="2">
                    <h6 class="m-0 text-right">Sub Total:</h6>
                  </td>
                  <td>
                    $ 400
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <h6 class="m-0 text-right">Shipping:</h6>
                  </td>
                  <td>
                    Free
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <h6 class="m-0 text-right">Total:</h6>
                  </td>
                  <td>
                    $ 400
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <!-- subscribeModal -->
  <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-4">
            <div class="avatar-md mx-auto mb-4">
              <div class="avatar-title bg-light rounded-circle text-primary h1">
                <i class="mdi mdi-email-open"></i>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-xl-10">
                <h4 class="text-primary">Subscribe !</h4>
                <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay update.</p>

                <div class="input-group bg-light rounded">
                  <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">

                  <button class="btn btn-primary" type="button" id="button-addon2">
                    <i class="bx bxs-paper-plane"></i>
                  </button>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->
  <?php require_once __DIR__ . '/./common/footer.php' ?>



  <script type="text/javascript">
    $(document).ready(function() {




      $('#add-save').on('click', function() {
        // alert('test');

        var first_name = $('#add_model_name').val();
        var last_name = $('#add_model_lname').val();
        var company_name = $('#add_model_company').val();
        var email = $('#add_model_email').val();
        var phone = $('#add_model_phone').val();
        var mobile = $('#add_model_mobile').val();
        var address = $('#add_model_address').val();
        var city = $('#add_model_city').val();
        var state = $('#add_model_state').val();
        var zip = $('#add_model_zip').val();
        var country_code = $('#add_model_country').val();
        var status = $('#add_model_status').val();

        // alert(first_name + '---' +last_name + '---' +company_name + '---' +email + '---' +mobile );

        if (first_name != "" && last_name != "" && company_name != "" && email != "" && phone != "" && mobile != "" && address != "" && city != "" && state != "" && zip != "" && country_code != "" && status != "") {

          $("#add-save").attr("disabled", "disabled");
          $.ajax({
            url: "<?php echo base_url("add/data"); ?>",
            type: "POST",
            data: {
              type: 1,
              fname: first_name,
              lname: last_name,
              companyname: company_name,
              email: email,
              phone: phone,
              mobile: mobile,
              address: address,
              city: city,
              state: state,
              zip: zip,
              country: country_code,
              status: status,
            },
            cache: false,
            success: function(dataResult) {
              var dataResult = JSON.parse(dataResult);
              if (dataResult.statusCode == 200) {
                $("#add-save").removeAttr("disabled");
                $('#save_data').find('input:text').val('');
                $("#success").show();
                $('#success').html('Data added successfully !');

                // $('#AddModal').modal('hide'); //hiding modal
                // $('html').find('.modal-backdrop').remove();
                // $('html').find('.modal-open').removeClass("modal-open");
                // const el = document.querySelector('body')
                // el.style.removeProperty('overflow');
                window.location="http://192.168.18.65/test/muneer/dashboard"
                // window.location.href = '<?php base_url() ?> dashboard';

              } else if (dataResult.statusCode == 201) {
                alert("Error occured !");
              }
              window.location="http://192.168.18.65/test/muneer/dashboard"

              // window.location.href = '<?php base_url() ?> dashboard';
            }
          });
        } else {
          alert('Please fill all the field !');
        }

      });
    });

    // showing data from database

    function showdata(id) {
      $("#EditModal").modal('show');
      let userId = id;
      $.post('<?= base_url('displydata/update') ?>', {
        userId: id
      }, function(res) {
        var userRecord = JSON.parse(res);

        let created_at = userRecord.created_at
        $('#model_name').val(userRecord.first_name);
        $('#model_lname').val(userRecord.last_name);
        $('#model_company').val(userRecord.company_name);
        $('#model_email').val(userRecord.email);
        $('#model_phone').val(userRecord.phone);
        $('#model_mobile').val(userRecord.mobile);
        $('#model_address').val(userRecord.address);
        $('#model_city').val(userRecord.city);
        $('#model_state').val(userRecord.state);
        $('#model_zip').val(userRecord.zip);
        $('#model_country').val(userRecord.country_code);
        $('#model_status').val(userRecord.status);
        let id = userRecord.id
        $('#id_edit').val(id);

      })
    }
    $('#edit_close').click(function() {
      $('#EditModal').modal('hide');

    })

    $(document).on("click", "#update_data", function(id) {
      id = $("#id_edit").val();

      first_name = $("#model_name").val();
      last_name = $("#model_lname").val();
      company_name = $("#model_company").val();
      email = $("#model_email").val();
      phone = $("#model_phone").val();
      mobile = $("#model_mobile").val();
      address = $("#model_address").val();
      city = $("#model_city").val();
      state = $("#model_state").val();
      zip = $("#model_zip").val();
      country_code = $("#model_country").val();
      status = $("#model_status").val();
      //  alert(firstname + '---' +lastname + '---' +address + '---' +email + '---' +city );
      $.ajax({
        url: "<?php echo base_url('update-customer'); ?>",
        method: "POST",
        data: {
          id_edit: id,
          model_name: first_name,
          model_lname: last_name,
          model_company: company_name,
          model_email: email,
          model_phone: phone,
          model_mobile: mobile,
          model_address: address,
          model_city: city,
          model_state: state,
          model_zip: zip,
          model_country: country_code,
          model_status: status,

        },

      });
      window.location.href = '<?php base_url() ?>dashboard';
    })

   

    function del(e, id) {
    iziToast.show({
      theme: 'dark',
      icon: 'icon-person',
      title: 'Warning',
      message: 'Are you sure you want to delete this record',
      position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
      progressBarColor: 'rgb(0, 255, 184)',
      buttons: [
        ['<button>Yes</button>', function(instance, toast) {
          $.ajax({
            type: 'POST',
            url: <?php base_url() ?> 'delete/customer', //plan/delete
            data: {
              status: 1,
              id: id
            },
            success: function(data) {
              $(e).closest('tr').remove();
              iziToast.destroy();
              iziToast.success({
                title: 'OK',
                message: 'Successfully deleted record!',
              });
              // location.reload();
            }
          });
        }, true], // true to focus
        ['<button>No</button>', function(instance, toast) {
          instance.hide({
            transitionOut: 'fadeOutUp',
            onClosing: function(instance, toast, closedBy) {
              console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
            }
          }, toast, 'buttonName');
        }]
      ],
      onOpening: function(instance, toast) {
        console.info('callback abriu!');
      },
      onClosing: function(instance, toast, closedBy) {
        console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
      }
    });
    

  }
  </script>

<!-- <?php if ($this->session->userdata('success')) { ?>
  <script type="text/javascript">
    iziToast.success({
      position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
      title: 'Success',
      message: '<?= $this->session->userdata('success') ?>',
    });
  </script>

<?php $this->session->unset_userdata('success');
} ?>

<?php if ($this->session->userdata('error')) { ?>
  <script type="text/javascript">
    iziToast.error({
      position: 'topRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
      title: 'Error',
      message: '<?= $this->session->userdata('error') ?>',
    });
  </script>

<?php $this->session->unset_userdata('error');
} ?> -->