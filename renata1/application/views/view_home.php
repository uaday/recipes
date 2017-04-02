
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="/e-commerce/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body style="margin: 0px;padding: 0px;">
<div style="float: left;height: 800px;width: 22%; background: #424949">
    <h1 style="color: #F35324;text-align: center">Admin Panel</h1>
    <div align="center">
        <img src="/e-commerce/asset/image/user.png" height="70px" width="70px;" style="margin-right: 3%">
        <h3 style="color: #000000"><?php echo $this->session->userdata('admin_name')?></h3>
        <hr>
        <span ><i style="color: #F2EFEE" class="fa fa-home " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="#">Home</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-plus-square " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/add_doc">Add Doctor</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-cubes " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/manage_cat">Manage Category</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-plus-square " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/add_man">Add Manufacture</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-cubes " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/manage_man">Manage Manufacture</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-product-hunt " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/add_pro">Add product</a>
        <hr>
        <span><i style="color: #F2EFEE" class="fa fa-pied-piper-pp " aria-hidden="true"></i></span> <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/manage_pro">Manage product</a>
        <hr>
        <br>
        <a style="text-decoration: none; font-size: 18px;color: #F2EFEE" href="/renata/profile/logout"><span><i style="color: #000000" class="fa fa-lock fa-3x " aria-hidden="true"></i></span> </a>

    </div>
</div>

</body>
</html>