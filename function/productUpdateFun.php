<?php

if (isset($_POST['p_update'])) {
    $id = $_POST['p_id'];
    $name = $_POST['p_name'];
    $price = $_POST['p_price'];
    $description = $_POST['p_description'];
    $updateProduct = mysqli_query($connection,
        "Update products
        Set name = '" . $name . "',
        price = '" . $price . "',
        description = '" . $description . "'  WHERE id= '" . $id . "'");
    if ($updateProduct) {
        echo "<script>window.location.href='index.php?page=product-list'</script>";
    }
}
