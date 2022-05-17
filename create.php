<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $name1 = $address = $name2 = $name3 = $name4 = $name5 = $name6 = $name7 = $name8 = $name9 = $name10 = $name11 = $name12 = $salary = "";
$name_err = $name1_err = $address_err = $name2_err = $name3_err = $name4_err = $name5_err = $name6_err = $name7_err = $name8_err = $name9_err = $name10_err = $name11_err = $name12_err = $salary_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name slide1
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }

// slide2
if($_SERVER["REQUEST_METHOD"] == "POST")
    // Validate name
    $input_name1 = trim($_POST["name1"]);
    if(empty($input_name1)){
        $name1_err = "Please enter a name.";
    } elseif(!filter_var($input_name1, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
        $name1_err = "Please enter a valid name.";
    } else{
        $name1 = $input_name1;
    }

    // slide3
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";
    } elseif(!filter_var($input_address, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
        $address_err = "Please enter a valid name.";
    } else{
        $address = $input_address;
    }

    // context1
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name2 = trim($_POST["name2"]);
    if(empty($input_name2)){
    $name2_err = "Please enter a context.";
    } elseif(!filter_var($input_name2, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name2_err = "Please enter a valid context.";
    } else{
    $name2 = $input_name2;
    }

    // context2
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name3 = trim($_POST["name3"]);
    if(empty($input_name3)){
    $name3_err = "Please enter a context.";
    } elseif(!filter_var($input_name3, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name3_err = "Please enter a valid context.";
    } else{
    $name3 = $input_name3;
    }

    // context3
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name4 = trim($_POST["name4"]);
    if(empty($input_name4)){
    $name4_err = "Please enter a context.";
    } elseif(!filter_var($input_name4, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name4_err = "Please enter a valid context.";
    } else{
    $name4 = $input_name4;
    }

    // context4
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name5 = trim($_POST["name5"]);
    if(empty($input_name5)){
    $name5_err = "Please enter a context.";
    } elseif(!filter_var($input_name5, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name5_err = "Please enter a valid context.";
    } else{
    $name5 = $input_name5;
    }

    // context5
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name6 = trim($_POST["name6"]);
    if(empty($input_name6)){
    $name6_err = "Please enter a context.";
    } elseif(!filter_var($input_name6, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name6_err = "Please enter a valid context.";
    } else{
    $name6 = $input_name6;
    }

    // context6
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name7 = trim($_POST["name7"]);
    if(empty($input_name7)){
    $name7_err = "Please enter a context.";
    } elseif(!filter_var($input_name7, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name7_err = "Please enter a valid context.";
    } else{
    $name7 = $input_name7;
    }

    // context7
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name8 = trim($_POST["name8"]);
    if(empty($input_name8)){
    $name8_err = "Please enter a context.";
    } elseif(!filter_var($input_name8, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name8_err = "Please enter a valid context.";
    } else{
    $name8 = $input_name8;
    }

    // context8
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name9 = trim($_POST["name9"]);
    if(empty($input_name9)){
    $name9_err = "Please enter a context.";
    } elseif(!filter_var($input_name9, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name9_err = "Please enter a valid context.";
    } else{
    $name9 = $input_name9;
    }

    // context9
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name10 = trim($_POST["name10"]);
    if(empty($input_name10)){
    $name10_err = "Please enter a context.";
    } elseif(!filter_var($input_name10, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name10_err = "Please enter a valid context.";
    } else{
    $name10 = $input_name10;
    }

    // context10
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name11 = trim($_POST["name11"]);
    if(empty($input_name11)){
    $name11_err = "Please enter a context.";
    } elseif(!filter_var($input_name11, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name11_err = "Please enter a valid context.";
    } else{
    $name11 = $input_name11;
    }

    // context11
if($_SERVER["REQUEST_METHOD"] == "POST")
// Validate name
    $input_name12 = trim($_POST["name12"]);
    if(empty($input_name12)){
    $name12_err = "Please enter a context.";
    } elseif(!filter_var($input_name12, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[-!,.a-zA-Z\s]+$/")))){
    $name12_err = "Please enter a valid context.";
    } else{
    $name12 = $input_name12;
    }

    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($name1_err) && empty($address_err) && empty($name2_err) && empty($name3_err) && empty($name4_err) && empty($name5_err) && empty($name6_err) && empty($name7_err) && empty($name8_err) && empty($name9_err) && empty($name10_err) && empty($name11_err) && empty($name12_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO niagahoster (name, name1, address, name2, name3, name4, name5, name6, name7, name8, name9, name10, name11, name12, salary) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssssss", $param_name, $param_name1, $param_address, $param_name2, $param_name3, $param_name4, $param_name5, $param_name6, $param_name7, $param_name8, $param_name9, $param_name10, $param_name11, $param_name12, $param_salary);

            // Set parameters
            $param_name = $name;
            $param_name1 = $name1;
            $param_address = $address;
            $param_name2 = $name2;
            $param_name3 = $name3;
            $param_name4 = $name4;
            $param_name5 = $name5;
            $param_name6 = $name6;
            $param_name7 = $name7;
            $param_name8 = $name8;
            $param_name9 = $name9;
            $param_name10 = $name10;
            $param_name11 = $name11;
            $param_name12 = $name12;
            $param_salary = $salary;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Tambah Record</h2>
                    </div>
                    <p>Silahkan isi form di bawah ini kemudian submit untuk menambahkan data pegawai ke dalam database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Slide1</label>
                            <textarea input type="text" name="name" class="form-control" value="<?php echo $name; ?>"></textarea>
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name1_err)) ? 'has-error' : ''; ?>">
                            <label>Slide2</label>
                            <textarea input type="text" name="name1" class="form-control" value="<?php echo $name1; ?>"></textarea>
                            <span class="help-block"><?php echo $name1_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Slide3</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name2_err)) ? 'has-error' : ''; ?>">
                            <label>context1</label>
                            <textarea input type="text" name="name2" class="form-control" value="<?php echo $name2; ?>"></textarea>
                            <span class="help-block"><?php echo $name2_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name3_err)) ? 'has-error' : ''; ?>">
                            <label>context2</label>
                            <textarea input type="text" name="name3" class="form-control" value="<?php echo $name3; ?>"></textarea>
                            <span class="help-block"><?php echo $name3_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name4_err)) ? 'has-error' : ''; ?>">
                            <label>context3</label>
                            <textarea input type="text" name="name4" class="form-control" value="<?php echo $name4; ?>"></textarea>
                            <span class="help-block"><?php echo $name4_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name5_err)) ? 'has-error' : ''; ?>">
                            <label>checklist1</label>
                            <textarea input type="text" name="name5" class="form-control" value="<?php echo $name5; ?>"></textarea>
                            <span class="help-block"><?php echo $name5_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name6_err)) ? 'has-error' : ''; ?>">
                            <label>checklist2</label>
                            <textarea input type="text" name="name6" class="form-control" value="<?php echo $name6; ?>"></textarea>
                            <span class="help-block"><?php echo $name6_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name7_err)) ? 'has-error' : ''; ?>">
                            <label>checklist3</label>
                            <textarea input type="text" name="name7" class="form-control" value="<?php echo $name7; ?>"></textarea>
                            <span class="help-block"><?php echo $name7_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name8_err)) ? 'has-error' : ''; ?>">
                            <label>context7</label>
                            <textarea input type="text" name="name8" class="form-control" value="<?php echo $name8; ?>"></textarea>
                            <span class="help-block"><?php echo $name8_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name9_err)) ? 'has-error' : ''; ?>">
                            <label>context8</label>
                            <textarea input type="text" name="name9" class="form-control" value="<?php echo $name9; ?>"></textarea>
                            <span class="help-block"><?php echo $name9_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name10_err)) ? 'has-error' : ''; ?>">
                            <label>context9</label>
                            <textarea input type="text" name="name10" class="form-control" value="<?php echo $name10; ?>"></textarea>
                            <span class="help-block"><?php echo $name10_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name11_err)) ? 'has-error' : ''; ?>">
                            <label>context10</label>
                            <textarea input type="text" name="name11" class="form-control" value="<?php echo $name11; ?>"></textarea>
                            <span class="help-block"><?php echo $name11_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($name12_err)) ? 'has-error' : ''; ?>">
                            <label>context10</label>
                            <textarea input type="text" name="name12" class="form-control" value="<?php echo $name12; ?>"></textarea>
                            <span class="help-block"><?php echo $name12_err;?></span>
                        </div>













                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Tidak penting isi nomor saja</label>
                            <textarea input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>"></textarea>
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="dashboard.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>