<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Favicons -->
 <link href="../../image/nitnlogo.png" rel="icon">
    <link href="../../image/nitnlogo.png" rel="nitnlogo">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST">
                    <h2 class="text-center">Verify OTP</h2>
                    <p>Enter OTP Sended to Your Registered Email </p>
   
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter OTP" required>
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
