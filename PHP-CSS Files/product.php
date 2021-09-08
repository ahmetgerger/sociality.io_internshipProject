<?php

class product
{
    public $product_id;
    public $product_name;
    public $product_image;
    public $product_price;

    function __construct(){

        require "simpledomlibrary.php";
    }

    public function addProduct($url){
        $html = file_get_html($url);
        $image = $html->find('.image-carousel-container li img', 0)->src;
        $name = $html->find('.wt-mb-xs-2 h1', 0)->plaintext;
        $name = trim("$name", " ");
        $price = $html->find('p[class=wt-text-title-03 wt-mr-xs-2]',0)->plaintext;
        $price = trim("$price", ".Price:.+€£$ "); //Trimming process because the discounted products contain the code "Price:" and it will spoil the value.

        include "dbsettings.php";

        try {

            $sql = "INSERT INTO products (name, image, price)
  VALUES ('$name', '$image', '$price')";
            $conn->exec($sql);

            $query = $conn->prepare("SELECT * FROM products WHERE name='$name'");
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $this->product_id = $result['product_id']; }

            echo "<h3>New record created successfully!</h3>" . "<br>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;

        $this->product_name = $name;
        $this->product_image = $image;
        $this->product_price = $price;

    }

    public function productDetails($id){
        include "dbsettings.php";

        try {
            $query = $conn->prepare("SELECT * FROM products WHERE product_id='$id'");
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $this->product_id = $result['product_id'];
                $this->product_name = $result['name'];
                $this->product_price = $result['price'];
                $this->product_image = $result['image'];
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;
        $this->showDetails();
    }

    public function showDetails(){
        echo "<strong>Product ID:</strong>" . $this->product_id . "<br>";
        echo "<strong>Product Name:</strong> " . $this->product_name . "<br>";
        echo "<strong>Product Image Link:</strong> " . $this->product_image . "<br>";
        echo "<strong>Product Price:</strong> " . $this->product_price . "<br>";
    }

    public function listProducts(){
        include "dbsettings.php";

        try {

            $query = $conn->prepare("SELECT * FROM products");
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetchall(PDO::FETCH_ASSOC);
                return $result;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $conn = null;

    }
}