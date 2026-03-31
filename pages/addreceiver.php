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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

    <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Receiver's Detail</h1>
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
                                    <form role="form" action="addedrec.php" method="post" onsubmit= "return validateForm()">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="Example:Harry Den" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Medical Condition(if any)</label>
                                            <input class="form-control" placeholder="if not, write None" name="medicalcondition" required>
                                        </div>
                                        
                                        <div class="form-group">
                                             <label>Gender </label><br>
                                             <label class="radio-inline"><input type="radio" name="gender" value="M" required> Male </label>
                                             <label class="radio-inline"><input type="radio" name="gender" value="F"  required> Female </label>
                                             <label class="radio-inline"><input type="radio" name="gender" value="O" required> Others </label> 
                                        </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                             <label>Select Blood Group</label><br>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="A+" required> A+ </label>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="B+" required> B+ </label>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="O+" required> O+ </label>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB+" required> AB+ </label>
                                             <br><label class="radio-inline"><input type="radio" name="bloodgroup" value="A-" required> A- </label>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="B-" required> B- </label>        
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="O-"required> O- </label>
                                             <label class="radio-inline"><input type="radio" name="bloodgroup" value="AB-" required> AB- </label>  </br>         
                                        </div>

                                        <div class="form-group">
                                              <label>Enter Email Id</label>
                                              <input class="form-control" type="email" placeholder="Enter Email Id" name="email" id="email" required>
                                              <p id="emailError" class="help-block"></p>
                                         </div>


                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                        </div>

                                        <div class="form-group">
                                              <label>Enter Contact Number</label>
                                             <input class="form-control" type="text" placeholder="Contact Number" name="contact" pattern="01[0-9]{9}" title="Please enter a valid 11-digit number starting with 01" required>
                                              <!-- pattern attribute specifies the regex pattern for validation -->
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Username</label>
                                            <input class="form-control" placeholder="Enter Here" name="username" required>
                                            <p class="help-block">In order to create receiver's account.</p>
                                            <p class="help-block">Example: harry20</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" name="password" type="password" id="myInput" required>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%";>Submit Form</button>

                
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
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
             function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }

        function validateForm() {
                console.log("Form validation function called"); // For debugging
                 var emailInput = document.getElementById('email');
                 var email = emailInput.value.trim();

           var emailPattern = /^[^\s@]+@gmail.com$/i;
           var domainPattern = /@gmail.com$/i;

          if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Email must end with gmail.com';
        return false;
         } else if (!domainPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Email must end with gmail.com';
        return false;
         }

    return true;
}
        </script>

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
