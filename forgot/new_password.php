<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Favicons -->
 <link href="../../image/nitnlogo.png" rel="icon">
    <link href="../../image/nitnlogo.png" rel="nitnlogo">
    <title>New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST">
                    <h2 class="text-center">Reset Password</h2>
                    <p>Enter New Password </p>
   
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Enter New Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="form-control button">Submit</button>
                        <!-- <input class="form-control button" type="submit" name="check-reset-otp" value="Submit"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
