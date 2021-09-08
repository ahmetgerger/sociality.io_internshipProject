
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ahmet Furkan Gerger Internship Project</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    <div class="wrapper1 ">
        <div id="formContent">
            <div class="tab-content  ">
                <form action="" method="post">
                    <input type="text" name="id" placeholder="enter product id here" required="required" autocomplete="off"/>
                    <input type="submit" value="SHOW PRODUCT DETAILS">
                    <br><br><br><br>

                    <input type="submit" value="MAIN PAGE" onclick="location.href='index.php'">

                </form>
            </div>
        </div>

    </div>
    <div class="row">
<?php
    require "product.php";
    if (isset($_POST["id"])){
        $product = new product();
        $product->productDetails($_POST["id"]);
    }
?>
    </div>
    </body>

