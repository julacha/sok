<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="?page=autheticate" method="post">
        <label>Lietotajs</label>
        <input type="text" name="username">
        <label>Parole</label>
        <input type="password" name="password">
        <input type="hidden" name="sid" value="<?php echo $sid;?>">

        <button type="submit">Ieiet</button>
    </form>
</body>
</html>