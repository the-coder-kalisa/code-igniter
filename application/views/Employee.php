<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?= base_url("")?>" method="post" enctype="multipart/form">
    <h1>employee</h1>
    <input type="text" name="email" placeholder="email"/>
    <input type="text" name="password" placeholder="password"/>
    <input type="submit" value="submit"/>
   </form>
   <table border=1 style="border-collapse: collapse;">
    <thead>
        <tr>
            <th>id</th>
            <th>email</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>kalisa</td>
            <td>gio</td>
            <td>fd</td>
        </tr>
    </tbody>
</table>
</body>
</html>