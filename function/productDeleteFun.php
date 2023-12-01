<?php

if (isset($_POST['p_delete'])) {
    $id = $_POST['p_id'];
    $deleteProduct = mysqli_query($connection, "DELETE FROM products WHERE id = '" . $id . "'");
    if ($deleteProduct) {
        echo "<script>window.location.href='index.php?page=product-list'</script>";
    }
}
