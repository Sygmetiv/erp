<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Customers</title>
    <!-- CSS-->
    <?php include('dependency-css.php'); ?>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">

        <!-- START HEADER-->
        <?php include('header.php'); ?>
        <!-- END HEADER-->

        <!-- START SIDEBAR-->
        <?php include('sidebar.php'); ?>
        <!-- END SIDEBAR-->

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Customers</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Type Keyword & Enter" />
                            </div>
                            <div class="col">
                                <div class="text-end px-2 pb-2">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newVendorModal">
                                        <i class="fas fa-plus"></i> New Customer
                                    </button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Business Type</th>
                                    <th>GSTIN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Phone</th>
                                    <th>Business Type</th>
                                    <th>GSTIN</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>angelica@gmail.com</td>
                                    <td>7894561230</td>
                                    <td>7894561230</td>
                                    <td>Software</td>
                                    <td>WEKPO23423423SDF</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-pencil"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="customer-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- END PAGE CONTENT-->
            <?php include('footer.php'); ?>
        </div>
    </div>

    <!-- #START - New Vendor Modal -->
    <div class="modal fade" id="newVendorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Customer</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Business Type</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">GSTIN</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter GSTIN">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <textarea class="form-control" id="exampleFormControlInput1" placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #END -->

    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <?php include('dependency-js.php'); ?>

    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
</body>

</html>