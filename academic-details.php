<?php
require_once("config.php");

// Check Session 
if (!isset($_SESSION['email'])) {
    header("location:index.php");
}
$email = $_SESSION['email'];
$sql = mysqli_query($auth, "SELECT * FROM students WHERE email = '$email'");
$printData = mysqli_fetch_array($sql);

// Insert Academic Details
if(!empty($_POST))
{
    $roll = $_POST['roll'];
    $br = $_POST['branch'];
    $sem = $_POST['sem'];
    $sec = $_POST['section'];
    $sports = $_POST['sports'];
    $last_update = date('h:i a | d-m-Y');

    // File Upload
    $file_name = $_FILES["file"]["name"];
    $ext = end(explode(".",$file_name));
    $file_name = uniqid().".".$ext;

    move_uploaded_file($_FILES["file"]["tmp_name"],"pictures/".$file_name);
    //echo $file_name;
    //echo " Location:".$_FILES["file"]["tmp_name"];

    // Insert Records
    $qr = mysqli_query($auth,"INSERT INTO academic_details(email,roll_no,branch,sem,section,sports,profile_photo,last_update) VALUES('$email','$roll','$br','$sem','$sec','$sports','$file_name','$last_update')");
    if($qr)
    {
        $status = "1";
    }
    else
    {
        $status = "0";
    }
}
// Read Saved Information
$rsi = mysqli_query($auth, "SELECT * FROM academic_details WHERE email = '$email'");
$prD = mysqli_fetch_array($rsi);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Academic Details | Student Information System</title>
</head>

<body>
    <?php
    include_once("include/navbar.php");
    ?>
    <div class="container">
        <h1 class="display-4 border-bottom">Academic Details</h1>

        <?php
        if ($status == "1") { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your academic details have been saved.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } elseif ($status == "0") { ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Please try later.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }
        ?>

        <form method="post" action="" enctype="multipart/form-data">
            <div class="row py-3 row-cols-md-1 row-cols-1">
                <div class="col mb-3">
                    <label class="form-label" for="roll">Roll No.</label>
                    <input type="text" name="roll" id="roll" class="form-control form-control-lg" required
                        placeholder="Enter Roll No." value="<?php echo $prD['roll_no'];?>">
                </div>
                <div class="col mb-3">
                    <select name="branch" class="form-select form-select-lg" required>
                        <option value="" disabled selected>-- Select Branch --</option>
                        <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Electronics and Communication Engineering">Electronics and Communication
                            Engineering</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <select name="sem" class="form-select form-select-lg" required>
                        <option value="" disabled selected>-- Select Sem --</option>

                        <?php
                        for ($x = 1; $x <= 8; $x++) {
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="col mb-3">
                    <select name="section" class="form-select form-select-lg" required>
                        <option value="" disabled selected>-- Select Section --</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </div>
                <div class="col mb-3">
                    <label for="sports" class="form-label">Sports</label>
                    <input type="text" name="sports" class="form-control form-control-lg" id="sports" required
                        placeholder="Enter Sports" value="<?php echo $prD['sports'];?>">
                </div>
                <div class="col mb-3">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="file">Upload</label>
                        <input type="file" class="form-control" id="file" name="file" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div class="col mb-3">
                    <input type="submit" class="btn btn-success btn-lg" value="SAVE">
                </div>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>