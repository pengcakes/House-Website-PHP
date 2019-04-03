<?php include "inc/header.inc"; ?>
<title>Newsletter Sign-up</title>
<body>
<?php include "inc/navbar.inc"; ?>
<div>
<form action="insert.php" method="post">
    First name:<br>
    <input type="text" name="firstName" size="40"><br><br>
    Last name:<br>
    <input type="text" name="lastName" size="40"><br><br>
    Email:<br>
    <input type="email" name="email" size="40"><br><br>

    <input type="submit" value="Submit">
</form>





</div>
    <?php include "inc/scripts.inc"; ?>
</body>
</form>