<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Products</title>
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
                <h1 class="page-title">Products</h1>
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
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProductModal">
                                        <i class="fas fa-plus"></i> New Product
                                    </button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-sm table-bordered" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="align-middle">Image</th>
                                    <th class="align-middle">Code</th>
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Price</th>
                                    <th class="align-middle">Discount</th>
                                    <th class="align-middle">Dis. Price</th>
                                    <th class="align-middle">Stock Count</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="align-middle">Image</th>
                                    <th class="align-middle">Code</th>
                                    <th class="align-middle">Name</th>
                                    <th class="align-middle">Price</th>
                                    <th class="align-middle">Discount</th>
                                    <th class="align-middle">Discounted Price</th>
                                    <th class="align-middle">Stock Count</th>
                                    <th class="align-middle">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">
                                        <span class="placeholder-glow">
                                            <span class="placeholder  badge bg-danger">10</span>
                                        </span>
                                    </td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
                                                        <i class="fas fa-history"></i> History
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%;"><img src="https://m.media-amazon.com/images/I/81EZ51fQoVL._SX466_.jpg" class="img-fluid" /></td>
                                    <td style="width: 5%;" class="align-middle">000010</td>
                                    <td style="width: 15%;" class="align-middle">Laptop Dell</td>
                                    <td style="width: 10%;" class="align-middle">&#8377;40,000</td>
                                    <td style="width: 5%;" class="align-middle">15%</td>
                                    <td style="width: 5%;" class="align-middle">&#8377;35,000</td>
                                    <td style="width: 5%;" class="align-middle">122</td>
                                    <td style="width: 10%;" class="align-middle">
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
                                                    <a class="dropdown-item" href="product-history.php">
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
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Line tabs</div>
        </div>
        <div class="ibox-body">
            <ul class="nav nav-tabs tabs-line">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="fas fa-line-chart"></i> First</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-heartbeat"></i> Second</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab-7-3" data-toggle="tab"><i class="fas fa-life-ring"></i> Third</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-7-1">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</div>
                <div class="tab-pane" id="tab-7-2">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</div>
                <div class="tab-pane fade" id="tab-7-3">Third tab</div>
            </div><br>
        </div>
    </div>
    <!-- #START - New Vendor Modal -->
    <div class="modal fade" id="newProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Code</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Code">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Purchase Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Selling Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Discount</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="%">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Discounted Selling Price</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Discounted Price">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Stock Count</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stock Count">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Images</label>
                                <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Stock Count">
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