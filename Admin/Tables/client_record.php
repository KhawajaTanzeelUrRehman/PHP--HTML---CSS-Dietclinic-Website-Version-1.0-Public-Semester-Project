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
                        <h1>Client Records</h1>
                    </th>
                </tr>
                <t>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Client Name</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Food Choices</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Current Medication</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Food Allergies</th>
                    <th style="color: white; background-color: rgb(12, 16, 54);">Diseases</th>
                </t>
                <?php
                $query = "select * from Medical_diagnosis_client";
                $result = mysqli_query($conn,$query);
                while($rows=mysqli_fetch_array($result))
                {
            ?>
                    <tr style="background-color: rgb(219, 203, 240);">
                        <td>
                            <?php echo $rows[0];?>
                        </td>
                        <td>
                            <?php echo $rows[1];?>
                        </td>
                        <td>
                            <?php echo $rows[2];?>
                        </td>
                        <td>
                            <?php echo $rows[3];?>
                        </td>
                        <td>
                            <?php echo $rows[4];?>
                        </td>
                    </tr>
                    <?php
            }
            ?>
            </table>
        </div>
    </body>

    </html>