<!DOCTYPE html>
<head>
    <title>Login in sayfası...</title>
</head>
<body style="background-color: darkgrey; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-family: Georgia, 'Times New Roman', Times, serif; font-size: 500%; ">

<form action="post.php" method = "post">    
    <label for="password" style="margin-top: 15px;">login in</label><br/>
    <input  style="color: blue; background-color: black; margin-top: 15px; padding: 5px; font-size: 80%;" type="email" name="username" id="user" placeholder="kullancı adı" autocomplete="off" ><br/>
    <input style="color: blue; background-color: black; margin-top: 15px; padding: 5px; font-size: 80%;" type="password" name="password" id="pass" placeholder="şifre" autocomplete="off" ><br/>
    <button style="margin-top: 15px; font-size: 100%;" type="submit" name="submit"  >login in</button>
</form>
</body>