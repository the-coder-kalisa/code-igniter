<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
   <tr>
     <th>id</th>
     <th>email</th>
     <th>password</th>
   </tr>
   

       <?php
foreach ($row as $student) {
    echo $row;
}
?>
    </table>
</body>
</html>