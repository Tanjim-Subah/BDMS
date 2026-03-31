<html>

<head>
    <title>BDMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php' ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blood Collection Record</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of available bloods
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Blood Group</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>D.O.B</th>
                                                <th>Weight</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Blood Quantity</th>
                                                <th>Previous Collection Date</th>
                                                <th>New Collection Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "dbconnect.php";
                                            $qry = "SELECT * FROM blood";
                                            $result = mysqli_query($conn, $qry);

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "
                                                <tr class='gradeA'>
                                                    <td>{$row['bloodgroup']}</td>
                                                    <td>{$row['name']}</td>
                                                    <td>{$row['gender']}</td>
                                                    <td>{$row['dob']}</td>
                                                    <td>{$row['weight']}</td>
                                                    <td>{$row['address']}</td>
                                                    <td>{$row['contact']}</td>
                                                    <td>{$row['bloodqty']}</td>
                                                    <td>{$row['previous_donation']}</td>
                                                    <td>{$row['new_donation']}</td>
                                                    <td><a href='editbloodform.php?id={$row['id']}'><i class='fa fa-edit' style='color:green'></i></a></td>
                                                    <td><a href='deletebloodrecord.php?id={$row['id']}' onclick='return confirmDelete()'><i class='fa fa-trash' style='color:red'></i></a></td>
                                                </tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- DataTables Initialization -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });

            function confirmDelete() {
                return confirm("Are you sure?");
            }
        </script>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Group 3</p>
    </footer>

    <style>
        footer {
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #CCC;
            position: fixed;
        }

        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }
    </style>
</body>

</html>
