<?php
include '../models/CategoriesModel.php';
include '../models/ProductsModel.php';

function testAction(){
    echo"test";
}
function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);

    $smarty->assign('pageTitle','Главная страница сайта');
    $smarty->assign('rsCategories',$rsCategories);
    $smarty->assign('rsProducts',$rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    //loadTemplate($smarty, 'footer');

}
