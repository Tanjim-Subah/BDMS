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



    <script>
    function validateDonationDate() {
        const previousDate = new Date(document.getElementById('previous_donation').value);
        const newDate = new Date(document.getElementById('new_donation').value);
        const diffTime = newDate.getTime() - previousDate.getTime();
        const diffMonths = diffTime / (1000 * 60 * 60 * 24 * 30); // Calculate difference in months

        const minMonths = 3; // Minimum 3 months

        if (diffMonths <= minMonths) {
            alert("You must wait at least 3 months between donations.");
            return false;
        }
        return true;
    }
</script>


</head>

<body>

    <div id="wrapper">

    <?php include 'includes/donornav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Update your donation </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="useraddedblood.php" method="POST">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" placeholder="Harry Den" type="text" name="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                                <label>Gender</label>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="male" required> Male</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="female" required> Female</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="gender" value="other" required> Other</label>
                                                </div>
                                            </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="KG" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Select Blood Group</label><br>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="A+" required> A+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="B+" required> B+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="O+" required> O+ </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB+" required> AB+ </label>
                                                <br><label class="radio-inline"><input type="radio" name="bloodgroup" value="A-" required> A- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="B-" required> B- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="O-" required> O- </label>
                                                <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB-" required> AB- </label>
                                            </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Full Address" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Unit(s)</label>
                                            <input class="form-control" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                                <label>Previous date of donation</label>
                                                <input class="form-control" type="date" name="previous_donation" required>
                                            </div>


                                            <div class="form-group">
                                                <label>New date of donation</label>
                                                <input class="form-control" type="date" name="collection" required>
                                            </div>
                                       
                                    
                                
                                        <button type="submit"  class="btn btn-success">Submit</button>
                
                                    </form>
                                </div>
                                
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
