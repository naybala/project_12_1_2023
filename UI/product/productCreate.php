<?php
    include "function/productCreateFun.php";
?>

<h5>This is product create</h5>



<div class="container">
    <form action="" method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="p_name">
        </div><br>
        <div>
            <label for="">Price</label>
            <input type="text" name="p_price">
        </div><br>
        <div>
            <label for="">Description</label>
            <input type="text" name="p_description">
        </div>
        
        <br>
        <a href="index.php?page=product-list">
        <button type="button" class="btn btn-outline-primary">Cancel</button>
        </a>
        <button type="submit" class="btn btn-outline-primary" name="p_accept">Submit</button>
    </form>

</div>