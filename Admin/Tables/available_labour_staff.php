<?php
include 'C:\xampp\htdocs\Database Semester Project\website\connection.php';
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body style="background-image: url('bg.jpg');">

        <div class="shadow">
            <table align="center" border="2px" style="width: 80%; line-height: 40px; border-radius: 6px;">
                <tr>
                    <th colspan="5" bgcolor="black" style="color: white;">
                        <h2>Available labour Staff</h2>
                    </th>
                </tr>
                <t>
                    <th style="color: white; background-color: rgb(12, 16, 54);">First Name</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Last Name</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Gender</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Phone</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Designation</th>
                </t>
                <?php
                $query = "select * from available_staff_labour";
                $result = mysqli_query($conn,$query);
                while($rows=mysqli_fetch_assoc($result))
                {
            ?>
                    <tr style="background-color: rgb(219, 203, 240);">
                        <td>
                            <?php echo $rows['first_name'];?>
                        </td>
                        <td>
                            <?php echo $rows['last_name'];?>
                        </td>
                        <td>
                            <?php echo $rows['gender'];?>
                        </td>
                        <td>
                            <?php echo $rows['phone'];?>
                        </td>
                        <td>
                            <?php echo $rows['designation'];?>
                        </td>
                    </tr>
                    <?php
            }
            ?>
            </table>
        </div>
    </body>

    </html>