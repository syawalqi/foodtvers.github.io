<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 0 auto;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Dashboard</h2>
                        <a href="Insert_file/foto_index.php" class="btn btn-success pull-right">Insert foto</a>
                        <a href="index.php" class="btn btn-success pull-right">Kembali</a>         
                    </div>
                    <?php
                    // Include config name
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM niagahoster";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                        echo "<th>Slide1</th>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>Slide2</th>";
                                        echo "<td>" . $row['name1'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>Slide3</th>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>context1</th>";
                                        echo "<td>" . $row['name2'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>context2</th>";
                                        echo "<td>" . $row['name3'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>context3</th>";
                                        echo "<td>" . $row['name4'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>checklist1</th>";
                                        echo "<td>" . $row['name5'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>checklist2</th>";
                                        echo "<td>" . $row['name6'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>checklist3</th>";
                                        echo "<td>" . $row['name7'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>context4</th>";
                                        echo "<td>" . $row['name8'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>context5</th>";
                                        echo "<td>" . $row['name9'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>01</th>";
                                        echo "<td>" . $row['name10'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>02</th>";
                                        echo "<td>" . $row['name11'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>03</th>";
                                        echo "<td>" . $row['name12'] . "</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>Pengaturan</th>";
                                        echo "<td>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){  
                                                                                          
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>