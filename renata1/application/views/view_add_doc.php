<div style="float: left; width:78%">
    <br>
    <h1 align="center">Add Doctor</h1>
    <br>
    <div align="center">
        <div style="width: 50%;border: 3px dotted">
            <br>
            <form method="post" enctype="multipart/form-data" action="/renata/products/add">
                <table>
                    <tr>
                        <td><label style="font-size: 20px">Doctor Name :</label></td>
                        <td><input name="doctor_name" type="text" placeholder="Enter Doctor Name*"
                                   style="width: 250px; height: 25px;"></td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Category Name :</label></td>
                        <td>
                            <select name="cat_id" style="width: 255px;height: 25px">
                                <option>--Select Category--</option>
<!--                                --><?php //foreach ($cats as $cat){?>
<!--                                <option value="--><?php //echo $cat['cat_id']?><!--">--><?php //echo $cat['cat_name']?><!--</option>-->
<!--                                --><?php //}?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Manufacture Name :</label></td>
                        <td>
                            <select name="man_id" style="width: 255px;height: 25px">
                                <option>--Select Manufacture--</option>
<!--                                --><?php //foreach ($mans as $man){?>
<!--                                    <option value="--><?php //echo $man['man_id']?><!--">--><?php //echo $man['man_name']?><!--</option>-->
<!--                                --><?php //}?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Product Description :</label></td>
                        <td><textarea name="pro_desc" style="width: 250px;" rows="5"
                                      placeholder="Enter product Description"></textarea></td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Product Price :</label></td>
                        <td><input name="pro_price" type="text" placeholder="Enter Product Price*"
                                   style="width: 250px; height: 25px;"></td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Product Quantity :</label></td>
                        <td><input name="pro_quantity" type="text" placeholder="Enter Product Quantity*"
                                   style="width: 250px; height: 25px;"></td>
                    </tr>
                    <tr>
                        <td><label style="font-size: 20px">Product Image :</label></td>
                        <td><input name="pro_image" type="file" style="width: 250px; height: 25px;"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <input type="submit" name="buttonSubmit" style="height: 30px; width: 100px;background: #68BC7B; border: none;color: white;">
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <br>
        </div>
    </div>