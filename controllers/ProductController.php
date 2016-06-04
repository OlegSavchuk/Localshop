<?php
include_once('../models/ProductsModel.php');
include_once('../models/CategoriesModel.php');

function indexAction($smarty){
    $itemId = isset($_GET['id'])? $_GET['id']: null;
     if($itemId == null)exit();

        $rsProduct = getProductById($itemId);
        $rsCategories = getAllMainCatsWithChildren();

        $smarty->assign('pageTitle','');
        $smarty->assign('rsCategories',$rsCategories);
        $smarty->assign('rsProduct',$rsProduct);

        loadTemplate($smarty,'header');
        loadTemplate($smarty,'product');
}