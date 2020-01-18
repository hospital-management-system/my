
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <style type="text/css">
        * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #435165;
}
.navtop {
    background-color: #2f3947;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #eaebed;
    font-weight: normal;
}
.navtop div li{
    display: inline-block;
    margin-right: 20px;
}
.navtop div li a {
    padding: 0 20px;
    text-decoration: none;
    color: #c1c4c8;
    font-weight: bold;
    border:1px solid transparent;
    transition: 0.6s ease;
}
.navtop div li a i {
    padding: 2px 8px 0 0;
}
.navtop div li a:hover {
    color: #eaebed;
    border-color: #eaebed;
}
.navtop li.active2 a{
    border-color: yellow ;
    color: yellow;
    }
.login {
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
}
.login h1 {
    text-align: center;
    color: #5b6574;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #dee0e4;
}
.login form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}
.login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #3274d6;
    color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
}
.login form input[type="submit"] {
    width: 100%;
    padding: 15px;
    margin-top: 20px;
    background-color: #3274d6;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
    background-color: #2868c7;
    transition: background-color 0.2s;
}

    </style>
    <body>
        <nav class="navtop">
            <div>
                <h1>Hospital Management System</h1>
                <li class="active1"><a href="index.php">Admin</a></li>
                <li class="active2"><a href="doc.login.php">Docter</a></li>
                <li class="active3"><a href="rec.login.php">Receptor</a></li>
                <li class="active4"><a href="bill.login.php">Biller</a></li>
                
            </div>
        </nav>
        
        <div class="login">
            <h1>Login</h1>
            <form action="includes/login.doc.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
</html>