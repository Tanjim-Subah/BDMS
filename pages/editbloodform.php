<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Blood Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please make your changes by updating the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                <?php
									include 'dbconnect.php';
									$id=$_GET['id'];
									$qry= "select * from blood where id='$id'";
									$result=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($result)){
									?> 

                                    <form role="form" action="editedblood.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" type="text" name="name" value='<?php echo $row['name']; ?>' required>
                                        </div>
                                        
                                        <div class="form-group"><label>Gender </label><br>
                                        <label class="radio-inline"><input type="radio" name="gender" value="M" <?php if ($row["gender"] == "M") echo "checked"; ?> required> Male </label>
                                        <label class="radio-inline"><input type="radio" name="gender" value="F" <?php if ($row["gender"] == "F") echo "checked"; ?> required> Female </label>
                                        <label class="radio-inline"><input type="radio" name="gender" value="O" <?php if ($row["gender"] == "O") echo "checked"; ?> required> Others </label>
                                    </div>


                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" name="weight" value='<?php echo $row['weight']; ?>' required>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Select Blood Group</label><br>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="A+" <?php if ($row["bloodgroup"] == "A+") echo "checked"; ?> required> A+ </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="B+" <?php if ($row["bloodgroup"] == "B+") echo "checked"; ?> required> B+ </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="O+" <?php if ($row["bloodgroup"] == "O+") echo "checked"; ?> required> O+ </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB+" <?php if ($row["bloodgroup"] == "AB+") echo "checked"; ?> required> AB+ </label><br>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="A-" <?php if ($row["bloodgroup"] == "A-") echo "checked"; ?> required> A- </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="B-" <?php if ($row["bloodgroup"] == "B-") echo "checked"; ?> required> B- </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="O-" <?php if ($row["bloodgroup"] == "O-") echo "checked"; ?> required> O- </label>
                                            <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB-" <?php if ($row["bloodgroup"] == "AB-") echo "checked"; ?> required> AB- </label>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" name="address" value='<?php echo $row['address']; ?>' required>
                                        </div>

                                        
   
    <div class="form-group">
        <label for="contact">Contact Number:</label>
        <input type="text" class="form-control" id="contact" name="contact" pattern="01[0-9]{9}" required title="Contact number must be 11 digits and start with 01">
    </div>
   


                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input class="form-control" type="number" name="bloodqty" value='<?php echo $row['bloodqty']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                                <label>Previous Collection Date</label>
                                                <input class="form-control" type="date" name="previous_donation" value='<?php echo $row['previous_donation']; ?>' required>
                                            </div>

                                            <div class="form-group">
                                                <label>New Collection Date</label>
                                                <input class="form-control" type="date" name="new_donation" value='<?php echo $row['new_donation']; ?>' required>
                                            </div>

                                       
             <!-- id hidden grna input type ma "hidden" -->
             <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                
             <button type="submit"  class="btn btn-success">Make Changes</button>
 
                                    </form>
                                </div>

						<?php
						}
						?>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Group 3</p>
    </footer>
	
	<style>
	footer{
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

</html>
                             
