<?php
    if(isset($_POST['p_accept'])){
        $name = $_POST['p_name'];
        $price = $_POST['p_price'];
        $description = $_POST['p_description'];

        $insertProduct = mysqli_query($connection, "INSERT INTO products(name,price,description) VALUES('".$name."','".$price."','".$description."')");

        if($insertProduct){
            echo "<script>window.location.href='index.php?page=product-list'</script>";
        }
    }

?>