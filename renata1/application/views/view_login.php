
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        p{
            color: #EC2525;
        }
    </style>
</head>
<body style="background: #424949">
<br>
<br>
<br>
<br>
<br>
<h1 align="center" style="font-size: 2.5em; color: #FBF4F5">Login</h1>
<form method="post" action="/renata/login/" >
    <div align="center">
        <input name="email" type="email" placeholder="Enter User Email *"  style="width: 330px; height: 35px;text-align: center" ><p><?php echo form_error('email');?></p>
    </div>
    <div align="center">
        <input name="password" type="password" placeholder="Enter User Password *"  style="width: 330px; height: 35px;text-align: center" ><p><?php echo form_error('password');?></p>
        <input type="submit" value="Get Started" name="submitbutton"  style="width: 250px; height: 33px;font-size: 17px; background: #68BC7B; border: none;color: white;" ><br>
        <p><?php echo $message?></p>
    </div>

</form>

</body>
</html>