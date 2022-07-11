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
        tr{
            
        }
        th{
            background-color: rgba(128, 128, 128, 0.363);
            font-size: 50px;
            border-radius: 50px;
            padding: 20px;
            text-align: center;
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
    <!-- در اینجا یک جدول ساخین که اطلاعات داخلش هستش  -->
    <h1>Members of the Mah programmers team</h1>
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
        <?php //این جدول کاملتر هستش و تمام اون جدول قبلی هرکدوم وارد یک آرایه شدن 
        $members = array(
            array(                    //یک آرایه اصلی هستش که سه تا آرایه زیر مجموعه آن هستند
                "name" => "Javad",
                "familyName" => "Nsrollahi",
                "age" => "33",
            ),
            array(
                "name" => "Mahan",
                "familyName" => "Homayouni",
                "age" => "15",
            ),
            array(
                "name" => "AmirHosain",
                "familyName" => "Jafari",
                "age" => "15",
            ),
        );
        foreach ($members as $member) {?> <!--در اینجا از یک حلقه فوریچ استفاده کردین-->
            <tr>
                <td>
                    <?php echo $member["name"]; ?><!--در اینجا برای خروجی گرفتن از هر کدام از جدول ها یک سند پی اچ پی باز میکنیم-->
                </td>
                <td>
                    <?php echo $member["familyName"]; ?>
                </td>
                <td>
                    <?php echo $member["age"]; ?>
                </td>
            </tr>";
        <?php }?>
    </table>
</body>
</html>