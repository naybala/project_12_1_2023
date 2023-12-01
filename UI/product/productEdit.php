<?php
include "function/productEditFun.php";
include "function/productUpdateFun.php";
?>
<h5>Product Edit Page</h5>

<div class="container">


    <form action="" method="post">
        <input type="text" name="p_id" value="<?php echo $editProduct['id'] ?>">

        <div>
            <label for="">Name</label>
            <input type="text" name="p_name" value="<?php echo $editProduct['name'] ?>">
        </div><br>


        <div>
            <label for="">Price</label>
            <input type="text" name="p_price" value="<?php echo $editProduct['price'] ?>">
        </div><br>


        <div>
            <label for="">Description</label>
            <input type="text" name="p_description" value="<?php echo $editProduct['description'] ?>">
        </div>

        <br>
        <a href="index.php?page=product-list">
            <button type="button" class="btn btn-outline-primary">Cancel</button>
        </a>
        <button type="submit" class="btn btn-outline-primary" name="p_update">Update</button>
    </form>

</div>