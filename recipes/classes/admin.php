<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/3/2017
 * Time: 12:36 AM
 */
require 'db_connect.php';

class Admin
{
    public function __construct()
    {
        $db_connect=new Db_Connect();
    }
    public function all_ingredients()
    {
        $sql="SELECT * from tbl_ingredients ORDER BY ingredient_name";
        $result=mysql_query($sql);
        return $result;
    }
    public function add_recipe($data,$files)
    {
        $directory = '/asset/images/';
        $target_file = $directory . $files['rimage']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        $image_size = $files['rimage']['size'];
        if ($files['rimage']['tmp_name']) {
            $check = getimagesize($files['rimage']['tmp_name']);
            if ($check) {
                if ($image_size > 10000000) {
                    $message = 'Image Size is to large!!';
                    return $message;
                    exit();
                } else {
                    if ($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' && $file_type != 'JPG' && $file_type != 'PNG' && $file_type != 'GIF' && $file_type != 'jpeg' && $file_type != 'JPEG') {
                        echo 'File type is not valid';
                        exit();
                    } else {
                        if (file_exists($target_file)) {

                        } else {

                            move_uploaded_file($files['rimage']['tmp_name'], $target_file);
                        }
                        $sql ="INSERT INTO  tbl_recipe(recipe_name,cooking_time,calories,carbs,fat,protein,ingredient_recipe_details,description,image) VALUES(N'$data[rname]',N'$data[rcookingtime]',N'$data[rcalories]',N'$data[rcarbs]',N'$data[rfat]',N'$data[rprotein]',N'$data[rind]',N'$data[rd]','$target_file')";
                        if (mysql_query($sql)) {
                            $id=mysql_insert_id();
                            foreach ($data['ing'] as $in)
                            {
                                $sql2="INSERT INTO tbl_recipe_ingredients(ingredients_id,recipe_id) VALUES ('$in','$id')";
                                mysql_query($sql2);
                            }
                            unset($data);
                            unset($files);

                            $message = 'Recipe Created Successful';
                            return $message;
                        } else {
                            die('Query problem' . mysql_error());
                        }
                    }
                }
            } else {
                echo 'The upload file is not an image';
                exit();
            }
        } else {
            $message = 'Insert An Image!!';
            return $message;
        }
    }
    public function clear_table()
    {
        $sql="TRUNCATE TABLE tbl_singredients";
        mysql_query($sql);
    }
    public function get_recipes($data)
    {
        $sql3="TRUNCATE TABLE tbl_singredients";
        mysql_query($sql3);
        foreach ($data['ing'] as $in)
        {
            $sql="INSERT INTO tbl_singredients(tbl_ingredient_ingredient_id) VALUES ('$in')";
            mysql_query($sql);
        }
        $sql2="SELECT * FROM tbl_recipe WHERE recipe_id NOT IN (SELECT recipe_id FROM tbl_recipe_ingredients WHERE ingredients_id NOT IN (SELECT tbl_ingredient_ingredient_id FROM tbl_singredients) )";
        $result=mysql_query($sql2);
        return $result;
    }
    public function show_recipe_by_recipe_id($recipe_id)
    {
        $sql="SELECT * FROM tbl_recipe WHERE recipe_id='$recipe_id'";
        $result=mysql_query($sql);
        return $result;
    }
    public function ingredients_list($recipe_id)
    {
        $sql="SELECT i.ingredient_id,i.ingredient_name ii FROM tbl_recipe_ingredients r,tbl_ingredients i WHERE r.recipe_id='$recipe_id' AND r.ingredients_id=i.ingredient_id";
        $result=mysql_query($sql);
        return $result;
    }
    public function add_ingredients($data)
    {
        $sql="INSERT INTO tbl_ingredients(ingredient_name) VALUES ('$data[iname]')";
        if(mysql_query($sql));
        $message="Ingredients Upload";
        return $message;

    }
}