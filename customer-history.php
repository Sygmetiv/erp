<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>ERP - Customer History</title>
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
        </br>

        <div class="content-wrapper">
            <div class="container-fluid p-3 bg-white">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                        <li class="breadcrumb-item active" aria-current="page">UST History</li>
                    </ol>
                </nav>
            </div>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row pb-2">
                            <div class="col-auto">
                                <input type="date" class="form-control" placeholder="Start Date" />
                            </div>
                            <div class="col-auto">
                                <input type="date" class="form-control" placeholder="End Date" />
                            </div>
                            <div class="col-auto">
                                <input type="text" class="form-control" placeholder="Type Keyword & Enter" />
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Purchase Date</th>
                                    <th>Order #</th>
                                    <th>Items Count</th>
                                    <th>Total</th>
                                    <th>Payment Mode</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Purchase Date</th>
                                    <th>Order #</th>
                                    <th>Items Count</th>
                                    <th>Total</th>
                                    <th>Payment Type</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-half text-warning" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-empty text-danger" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td>
                                        <span class="badge bg-primary">BANK</span>
                                        <i class="fa fa-battery-full text-success" aria-hidden="true"></i>
                                    </td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2023-01-13</td>
                                    <td>PUR0001</td>
                                    <td>10</td>
                                    <td>&#8377;150000</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                    <td>
                                        <button class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#vendorHistoryDetail">
                                            <i class="fa fa-list"></i>
                                        </button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Vendor</h1>
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

    <!-- #START - Vendor History -->
    <div class="modal fade" id="vendorHistoryDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Purchase Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <table class="table table-sm table-striped">
                                <tr>
                                    <td>Purchased Date</td>
                                    <td>2022-01-13</td>
                                </tr>
                                <tr>
                                    <td>Order #</td>
                                    <td>PUR0001</td>
                                </tr>
                                <tr>
                                    <td>Items Count</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>Total Amount</td>
                                    <td>&#8377;150000</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table table-sm table-striped">
                                <tr>
                                    <td>Payment Type</td>
                                    <td><span class="badge bg-primary">BANK</span></td>
                                </tr>
                                <tr>
                                    <td>Order Status</td>
                                    <td><span class="badge bg-success">DELIVERED</span></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                <th>Quantity</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00001</td>
                                <td>&#8377;1500</td>
                                <td>10</td>
                                <td>&#8377;150000</td>
                            </tr>
                            <tr>
                                <td>00001</td>
                                <td>&#8377;1500</td>
                                <td>10</td>
                                <td>&#8377;150000</td>
                            </tr>
                            <tr>
                                <td>00001</td>
                                <td>&#8377;1500</td>
                                <td>10</td>
                                <td>&#8377;150000</td>
                            </tr>
                            <tr>
                                <td>00001</td>
                                <td>&#8377;1500</td>
                                <td>10</td>
                                <td>&#8377;150000</td>
                            </tr>
                            <tr>
                                <td>00001</td>
                                <td>&#8377;1500</td>
                                <td>10</td>
                                <td>&#8377;150000</td>
                            </tr>
                        </tbody>
                    </table>
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