<body>
<div class="logcontainer">
<form action="register.php" method="POST">
    <input type="text" name="username" class="reg_input" placeholder="Choose User Name" required></input>
    <input type="password" name="pw1" class="pass_input" placeholder="Password (6 char min)" required></input>
    <input type="password" name="pw2" class="pass_input" placeholder="Repeat password" required></input>
    <button type="Submit" class="reg">SIGN UP</button> 
</form>
<br>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="User" required></input>
    <input type="password" name="pw" placeholder="Password" required></input>
    <button type="submit" class="log" name="loginBtn">LOGIN</button>
</form>
</div>
</body>
