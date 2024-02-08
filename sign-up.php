<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up | Student Information System</title>
</head>

<body>
    <?php
    include_once("include/navbar.php");
    ?>
    <div class="container">
        <h1 class="display-4 border-bottom">Student Registration Portal</h1>
        <form method="post" action="">
            <div class="row row-cols-md-2 row-cols-1 py-4">

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter Full Name" required>
                        <label for="fullName">Full Name</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required> 
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth" required>
                        <label for="dob">Date of Birth</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control" name="add" placeholder="Enter Address" id="add" required></textarea>
                        <label for="add">Address</label>
                    </div>
                </div>

                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password" required>
                        <label for="pass">Password</label>
                    </div>
                </div>
                
                <div class="col">
                    <input type="submit" class="btn btn-dark btn-lg" value="Sign Up">
                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>