<?php
require "product.php";
?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>


</head>
<body>
<div class="wrapper1 ">
    <div id="formContent">
        <div class="tab-content  ">
            <table id="tablo" class="table table-bordered table-hover table-responsive-sm table-responsive-md table-responsive-lg
table-responsive-xl table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Image Link</th>
                    <th scope="col">Product Price</th>

                </tr>
                </thead>

                <?php
                $product = new product();
                $result = $product->listProducts();
                if(!$result==NULL){
                foreach ( $result as $row ) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row["product_id"]; ?>
                        </td>
                        <td>
                            <?php echo $row["name"] ?>
                        </td>
                        <td>
                            <?php echo $row["image"] ?>
                        </td>
                        <td>
                            <?php echo $row["price"] ?>
                        </td>

                    </tr>
                <?php } }?>
            </table>
            <input type="submit" value="MAIN PAGE" onclick="location.href='index.php'">
        </div>
    </div>

</div>
</body>
<?php

if (isset($_POST['link'])) {
    $link = $_POST['link'];
    adding_product($link);
}