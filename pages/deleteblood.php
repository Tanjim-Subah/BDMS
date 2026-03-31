<!DOCTYPE html>
<html>
<head>
    <title>BDMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../icofont/icofont.min.css">
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/nav.php'?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Delete Blood Details</h1>
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
                                                <th>Quantity</th>
                                                <th>Collection Date</th>
                                                <th><i class='fa fa-pencil'></i></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include "dbconnect.php";
                                        $qry="select * from blood";
                                        $result=mysqli_query($conn,$qry);
                                        echo "<tbody>";
                                        while($row=mysqli_fetch_array($result)){
                                            echo "<tr class='gradeA'>";
                                            echo "<td>".$row['bloodgroup']."</td>";
                                            echo "<td>".$row['name']."</td>";
                                            echo "<td>".$row['gender']."</td>";
                                            echo "<td>".$row['dob']."</td>";
                                            echo "<td>".$row['weight']."</td>";
                                            echo "<td>".$row['address']."</td>";
                                            echo "<td>".$row['contact']."</td>";
                                            echo "<td>".$row['bloodqty']."</td>";
                                            echo "<td>".$row['collection']."</td>";
                                            echo "<td><a href='deletebloodrecord.php?id=".$row['id']."' onclick='return confirmDelete();'><i class='fa fa-trash' style='color:red'></i></a></td>";
                                            echo "</tr>";
                                        }
                                        echo "</tbody>";
                                        ?>
                                    </table>
                                </div>
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

    <script>
        function confirmDelete() {
            return confirm("Are you sure?");
        }
    </script>

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
        }

        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }
    </style>
</body>
</html>
