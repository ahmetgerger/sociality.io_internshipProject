<?php
require "product.php";

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ahmet Furkan Gerger Internship Project</title>

        <link rel="stylesheet" type="text/css" href="style.css"/>


    </head>
    <body>
    <div class="wrapper1 row">
        <div id="formContent">
            <div class="tab-content  ">
                <form action="" method="post">
                    <input type="text" name="link" placeholder="enter link here" required="required" autocomplete="off"/>
                    <input type="submit" value="ADD PRODUCT">
                    <br><br><br><br>
                    <input type="submit" value="MAIN PAGE" onclick="location.href='index.php'">
                </form>
            </div>
        </div>

    </div>

<div class="row">
<?php
if (isset($_POST["link"])){
$product = new product();
$product->addProduct($_POST["link"]);
    $product->showDetails();

}
?>
</div>
    </body>
