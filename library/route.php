<?php
$view = @$_REQUEST['page'];

switch ($view) {
    case "product-list":
        $main = "UI/product/productList.php";
        break;
    case "product-create":
        $main = "UI/product/productCreate.php";
        break;
    case "product-edit":
        $main = "UI/product/productEdit.php";
        break;
    default:
        $main = "UI/body.php";
}
