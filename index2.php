<!--
Used basic html and bootstrap skeleton from the below link for style purpose which contains bootstrap.css,bootstrap.js,jquery.js
https://www.w3schools.com/bootstrap/bootstrap_get_started.asp
Used bootstrap form elements from below link.
https://www.w3schools.com/bootstrap/bootstrap_forms.asp-->
<?php
include('config.php');
session_start();
$em=$_GET['flightid'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search for flights</title>
        <meta content='Search for flights' />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">      
        <style>
            .img-box{
                max-height: 300px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container" style="max-width:800px;margin:0 auto;margin-top:50px;">  
            <div>
                <h2 style="margin-bottom:50px;">Search for flights</h2>
                <div>
                    <div style="margin-bottom:30px;"><input type="text" class="form-control" id="search_param" placeholder="Search"/></div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Email</th>
                                <th>Option</th>
                                <th>Departure Date</th>
                                <th>Return Date</th>
                                <th>Departure Time</th>
                                <th>Return Time</th>
                                <th>Adults</th>
                                <th>child</th>
                                <th>infant</th>
                                <th>From</th>
                                <th>class</th>
                                <th>id</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_body">
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM $em ORDER BY id");
                            while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['way']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['dat']; ?></td>
                                    <td><?php echo $row['Time']; ?></td>
                                    <td><?php echo $row['Tim']; ?></td>
                                    <td><?php echo $row['Adults']; ?></td>
                                    <td><?php echo $row['child']; ?></td>
                                    <td><?php echo $row['infant']; ?></td>
                                    <td><?php echo $row['class']; ?></td>
                                    <td><?php echo $row['From1']; ?></td>
                                    <td><?php echo $row['id']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).on("keyup", "#search_param", function () {
                var search_param = $("#search_param").val();
                $.ajax({
                    url: 'getData.php',
                    type: 'POST',
                    data: {search_param: search_param},
                    success: function (data) {
                        $("#tbl_body").html(data);
                    }
                });
            });
        </script>      
    </body>
</html>