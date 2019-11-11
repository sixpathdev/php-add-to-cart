<?php
require("./include/head.php");
if (isset($_POST["add"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_qty' => $_POST["hidden_qty"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            $_SESSION["count"] = $count;
        } else {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_qty' => $_POST["hidden_qty"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"])){
    if($_GET["action"] == "delete"){
        foreach($_SESSION["shopping_cart"] as $keys => $values){
            if($values["item_id"] == $_GET["id"]){
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
?>
<header id="fh5co-header" class="fh5co-cover mb-4" role="bannder" style="background-image:url('images/destwork.jpg'); height: 8em;" data-stellar-background-ratio=0.5">
</header>
<div class="container">
    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-top:1.7em !important;">
            <div class="col-lg-12">
                <h3>Products in Cart</h3>
                <div class="table-responsive">
                    <table class="table table-bordered text-justify">
                        <tr>
                            <th width="20%">Item Name</th>
                            <th width="15%">Quantity</th>
                            <th width="20%">Item Price</th>
                            <th width="10%">Total</th>
                            <th width="10%">Action</th>
                        </tr>
                        <?php
                        if (!empty($_SESSION["shopping_cart"])) {
                            $total = 0;
                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                                ?>
                                <tr>
                                    <td class="font-weight-bold h5"><?php echo ucfirst($values["item_name"]); ?></td>
                                    <td class="font-weight-bold h5"><?php echo $values["item_qty"]; ?></td>
                                    <td class="font-weight-bold h5"><?php echo $values["item_price"]; ?></td>
                                    <td class="font-weight-bold h5"><?php echo number_format($values["item_qty"] * $values["item_price"]); ?></td>
                                    <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger font-weight-bold">Remove</span></a></td>
                                </tr>
                            <?php
                                    $total = $total + ($values["item_qty"] * $values["item_price"]);
                                }
                                ?>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td align="right">N <?php echo number_format($total); ?></td>
                                <td></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
<?php include("./include/footer.php"); ?>