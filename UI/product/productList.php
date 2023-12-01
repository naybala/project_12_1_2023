<?php
include "function/productListFun.php";
include "function/productDeleteFun.php";
?>
<br>
<h5 class="text-center">Product List Page</h5>
<div class="container">
    <a href="index.php?page=" class="float-start">
        <button type="button" class="btn btn-outline-primary">Main Page</button>
    </a>
    <a href="index.php?page=product-create" class="float-end">
        <button type="button" class="btn btn-outline-primary">Product Create</button>
    </a>
</div>
<br><br>
<div class="container border border-dark p-5 rounded shadow-sm">
    <table class="table  border border-dark p-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th class="text-center">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
foreach ($products as $key => $product) {?>
            <tr>
                <td><?php
echo $product['id'];
    ?></td>
                <td><?php
echo $product['name'];
    ?></td>
                <td><?php
echo $product['price'];
    ?></td>
                <td><?php
echo $product['description'];
    ?></td>

                <form action="" method="post">
                    <td class="text-center">
                        <a class="text-decoration-none"
                            href="index.php?page=product-edit&action=<?php echo $product['id'] ?>">
                            <button type="button" class="btn btn-outline-success px-5">Edit</button>
                        </a>
                        <input type="hidden" name="p_id" value="<?php echo $product['id'] ?>">
                        <button type="submit" class="btn btn-outline-danger px-5" name="p_delete">
                            Delete
                        </button>
                    </td>
                </form>


            </tr>
            <?php
}
?>

        </tbody>

    </table>
</div>