<!DOCTYPE html> 
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sample Index</title> 
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" /> 
    <link rel="icon" href="../assets/img/ClinicaLog.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({ 
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../css/fonts.min.css"], 
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/plugins.min.css" />
    <link rel="stylesheet" href="../css/kaiadmin.min.css" />

    <!-- ICONS -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
      .sidebar {
          transition: background 0.3s ease;
          /* Initial background */
          background: linear-gradient(to bottom, #DB6079, #DA6F65, #E29AB4);
      }
      .logo-header {
          transition: background 0.3s ease;
      }
  </style>
</head>
<body>
      <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar"></div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <!-- Header -->
            <div class="main-header" id="header"></div>
            <!-- Main Content -->
            <div class="container" id="content">
            <div class="page-inner">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center">
                        <h4 class="card-title">Medicine</h4>
                        <button
                          class="btn btn-primary btn-round ms-auto"
                          data-bs-toggle="modal"
                          data-bs-target="#addMedModal"
                        >
                          <i class="fa fa-plus"></i>
                          Add Medicine
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <!-- Modal -->
                      <div
                        class="modal fade"
                        id="addMedModal"
                        tabindex="-1"
                        role="dialog"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header border-0">
                              <h5 class="modal-title">
                                <span class="fw-mediumbold"> New</span>
                                <span class="fw-light"> Medicine </span>
                              </h5>
                              <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                              >
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p class="small">
                              </p>
                              <form class="form" action="medicinecontrol.php" method="POST">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                      <label>Category</label>
                                      <input
                                        id="addcategory"
                                        name="addcategory"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill category"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6 pe-0">
                                    <div class="form-group form-group-default">
                                      <label>Name</label>
                                      <input
                                        id="addname"
                                        name="addname"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill name"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Quantity</label>
                                      <input
                                        id="addquantity"
                                        name="addquantity"
                                        type="number"
                                        class="form-control"
                                        placeholder="fill quantity"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6 pe-0">
                                    <div class="form-group form-group-default">
                                      <label>Dosage Strength</label>
                                      <input
                                        id="addDS"
                                        name="addDS"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill dosage strength"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Expiration Date</label>
                                      <input
                                        id="addED"
                                        name="addED"
                                        type="date"
                                        class="form-control"
                                        placeholder="fill expiration date"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer border-0">
                                  <button
                                    type="submit"
                                    name="addMedicine"
                                    class="btn btn-primary"
                                  >
                                    Add
                                  </button>
                                  <button
                                    type="button"
                                    class="btn btn-danger"
                                    data-bs-dismiss="modal"
                                  >
                                    Close
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div
                        class="modal fade"
                        id="editMedModal"
                        tabindex="-1"
                        role="dialog"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header border-0">
                              <h5 class="modal-title">
                                <span class="fw-mediumbold"> Edit</span>
                                <span class="fw-light"> Medicine </span>
                              </h5>
                              <button
                                type="button"
                                class="close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                                id="edit-exit"
                              >
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="editForm" action="medicinecontrol.php" method="POST">
                                <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                      <label>ID</label>
                                      <input
                                        id="editid"
                                        name="editid"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill id" readonly
                                      />
                                    </div>
                                  </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                      <label>Category</label>
                                      <input
                                        id="editcategory"
                                        name="editcategory"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill category"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6 pe-0">
                                    <div class="form-group form-group-default">
                                      <label>Name</label>
                                      <input
                                        id="editname"
                                        name="editname"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill name"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Quantity</label>
                                      <input
                                        id="editquantity"
                                        name="editquantity"
                                        type="number"
                                        class="form-control"
                                        placeholder="fill quantity"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6 pe-0">
                                    <div class="form-group form-group-default">
                                      <label>Dosage Strength</label>
                                      <input
                                        id="editDS"
                                        name="editDS"
                                        type="text"
                                        class="form-control"
                                        placeholder="fill dosage strength"
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Date Added</label>
                                      <input
                                        id="editdateadded"
                                        name="editdateadded"
                                        type="date"
                                        class="form-control"
                                        placeholder="fill date added" readonly
                                      />
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Expiration Date</label>
                                      <input
                                        id="editED"
                                        name="editED"
                                        type="date"
                                        class="form-control"
                                        placeholder="fill expiration date"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer border-0">
                              <button
                                type="submit"
                                class="btn btn-primary"
                                data-bs-target="updatemedicine"
                                id="updatemedicine"
                                name="updatemedicine"
                              >
                                Edit
                              </button>
        
                              <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                                id="edit-close"
                              >
                                Close
                              </button>
                            </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                      <div class="table-responsive">
                        <table
                          id="add-med"
                          class="display table table-striped table-hover"
                        >
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Category</th>
                              <th>Name</th>
                              <th>Quantity</th>
                              <th>Dosage Strength</th>
                              <th>Date Added</th>
                              <th>Expiration Date</th>
                              <th style="width: 10%">Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>ID</th>
                              <th>Category</th>
                              <th>Name</th>
                              <th>Quantity</th>
                              <th>Dosage Strength</th>
                              <th>Date Added</th>
                              <th>Expiration Date</th>
                              <th>Action</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
    

    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Dynamically load the sidebar
            $("#sidebar").load("sidebar.php", function(response, status, xhr) {
                if (status == "error") {
                    console.log("Error loading sidebar: " + xhr.status + " " + xhr.statusText);
                }
            });

            $("#header").load("header.php", function(response, status, xhr) {
                if (status == "error") {
                    console.log("Error loading header: " + xhr.status + " " + xhr.statusText);
                }
            });
        });
    </script>
</body>
</html>
