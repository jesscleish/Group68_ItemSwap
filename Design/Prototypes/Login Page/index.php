<?php

?>

<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="scripts.js" async></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<div id="loginBox">
    <div id="splitHeader">
        <button type="button" class="headerButton" id="loginButton" onclick="loginMode()">Log In</button>
        <button type="button" class="headerButton" id="signupButton" onclick="signupMode()">Sign Up</button>
    </div>
    <div id="formBody">
        <h1 class="formHeader">Login to my website</h1>
        <form method="post" action="checkUser.php">
            <label for="firstName" class="signup">First Name</label>
            <input type="text" id="firstName" class="signup" name="firstName">
            <label for="lastName" class="signup">Last Name</label>
            <input type="text" id="lastName" class="signup" name="lastName">
            <label for="username" class="signup">Username</label>
            <input type="text" id="username" class="signup" name="username">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <input type="text" value="login" id="mode" name="mode" hidden>
            <input type="submit" id="submit">
        </form>
    </div>
</div>
</body>
</html>
