<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table{
            background-color: rgb(182, 138, 223);
            color: black;
            font-size: 40px;
            text-align: left;
            border-radius: 25px;
            padding: 10px;
            width: 100%;
        }
        th{
            background-color: rgba(128, 128, 128, 0.363);
            font-size: 50px;
            border-radius: 50px;
            padding: 20px;
        }
        td{
            font-size: 35px;
            color: rgb(39, 39, 39);
            padding: 20px;
        }
        h1{
            color: black;
            font-size: 65px;
            font-family:'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1>Members of the Khurshid programmers team</h1>
    <table>
        <tr>
            <th>
                name
            </th>
            <th>
                Last name
            </th>
            <th>
                age
            </th>
        </tr>
        <?php  //در اینجا یک حلقه تعیین کردین و گفتین تا پنج بار اکو بکن از لیست و خروجی میشه پنج بار پرینت از جدول زیر
            for ($i=0; $i < 5; $i++) { 
                echo "<tr>
                <td>
                    MR.Javad
                </td>
                <td>
                    nasrollahi
                </td>
                <td>
                    33
                </td>
            </tr>";
            }
        ?>
    </table>
</body>
</html>