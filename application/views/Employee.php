<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1 style="border-collapse: collapse;">
   <tr>
     <th>id</th>
     <th>firstname</th>
     <th>lastname</th>
     <th>gender</th>
     <th>edit</th>
     <th>delete</th>
   </tr>

       <?php
foreach ($k as $k) {
?>
<tr>
    <td><?= $k['studentid']?></td>
    <td><?= $k['firstname']?></td>
    <td><?= $k['lastname']?></td>
    <td><?= $k['gender']?></td>
    <td><?= anchor("employee/edit".$k['studentid'], "edit")?></td>
    <td><?= anchor("employee/delete/".$k['studentid'], "delete")?></td>
</tr>
<?php
}
?>
    </table>
    <form action="<?=base_url('employee/store')?>" method="post">
    <input type="text" name="firstname" placeholder="firstname"/>
    <input type="text" name="lastname" placeholder="lastname"/>
    <input type="radio" value="male" name="gender"/>male
    <input type="radio" value="female" name="gender"/>female    
    <input value="submit" type="submit" name="get" />   
    </form>
</body>
</html>