<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'addcat' => array(
        array(
            'field' => 'cat_name',
            'label' => 'Categoey Name',
            'rules' => 'required|is_unique[tbl_category.cat_name]'
        )
    ),
    'addman' => array(
        array(
            'field' => 'man_name',
            'label' => 'Manufacture Name',
            'rules' => 'required|is_unique[tbl_manufacture.man_name]'
        )
    ),
    'editcat' => array(
        array(
            'field' => 'cat_name',
            'label' => 'Category Name',
            'rules' => 'required|is_unique[tbl_category.cat_name]'
        )
    ),
    'editman' => array(
        array(
            'field' => 'man_name',
            'label' => 'Manufacture Name',
            'rules' => 'required|is_unique[tbl_manufacture.man_name]'
        )
    ),
    'userlogin_check' => array(
        array(
            'field' => 'email',
            'label' => 'User Email',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'password',
            'label' => 'User password',
            'rules' => 'required|trim|xss_clean'
        )
    ),
    'addproduct' => array(
        array(
            'field' => 'pro_name',
            'label' => 'Product Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'pro_price',
            'label' => 'Product Price',
            'rules' => 'required'
        ), array(
            'field' => 'pro_quantity',
            'label' => 'Product quantity',
            'rules' => 'required'
        ),
        array(
            'field' => 'cat_id',
            'label' => 'Product cat',
            'rules' => 'required'
        ),
        array(
            'field' => 'man_id',
            'label' => 'Product Manufacture',
            'rules' => 'required'
        )
    ),
    'editproduct' => array(
        array(
            'field' => 'pro_name',
            'label' => 'Product Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'pro_price',
            'label' => 'Product Price',
            'rules' => 'required'
        ), array(
            'field' => 'pro_quantity',
            'label' => 'Product quantity',
            'rules' => 'required'
        ),
        array(
            'field' => 'cat_id',
            'label' => 'Product Category',
            'rules' => 'required'
        ),
        array(
            'field' => 'man_id',
            'label' => 'Product Manufacture',
            'rules' => 'required'
        )
    )
);
