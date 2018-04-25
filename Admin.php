<!DOCTYPE html>
<?php
session_start();
include("includes/db_con.php");
include ("includes/links.html");
include ("includes/Query.php");
$count=0;
$S_id=1;
if(isset($_POST['add_cart'])){
global $S_id;
 $med_name=$_POST['medicine'];
 $quantity=(int)$_POST['M_quantity'];
 $item_price=(int)$_POST['price'];
 (int)$price=$quantity * $item_price;
 echo $S_id."<br>$price";
 // var_dump($item_price);
$addcart="insert into Sales (S_id, Med_name, Quantity, Price) values()";
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bill Calculate</title>
  </head>
  <body>
    <div class="text-center">
      <h1>Wellcome To City Pharmacy</h1>
      <h3>City Pharmacy Admin</h3>
      <h4>Calculate BiLL</h4>
      <div class="col-md-6 col-md-offset-3">
      <form class="form-group " action="" method="post">
        <div class="col-md-6 col-md-offset-3">
          <input type="text" class="form-control" name="medicine" value="" placeholder="Medicine Name">
        </div>
        <div class="" style="margin-top:10px;" >
          <input type="submit"class="btn btn-info" name="Search_medicine" value="Search">
        </div>
      </form>
    </div>
      <div class="col-md-6 col-md-offset-3" style="margin-top:70px; border: 1px solid black">
        <?php

        if(isset($_POST['Search_medicine'])){    //trigger button click
          $medicine=$_POST['medicine'];
        $query1="SELECT * FROM Ph_Medicine where Medicine_Name like '%{$medicine}%'";
        $result1= $con->query($query1);
        $array= array();
        if($result1->num_rows>0){
        ?>
        <h3>Result</h3>
        <form class="" action="" method="post">
        <table border="1px solid black" class="table table-hover">
<th>Medicine Name</th>
<th>Provider</th>
<th>Total_Quanity</th>
<th>Price/Item</th>
<th>Quantity</th>
        <?php
    while ($row=$result1->fetch_assoc()) {
         ?>
         <tr>
        <td> <input type="text" name="medicine" hidden="" readonly="" value="">
        <?php echo $_SESSION['medicine']=$row['Medicine_Name']; ?></td>
        <td> <input type="text" name="provider" hidden="" readonly="" value=""><?php echo $row['Provider']; ?></td>
        <td><input type="text" name="T_quantity" hidden="" readonly="" value=""><?php echo $row['Quantity']; ?></td>
        <td><input type="text" name="price" hidden="" readonly=""  value=""><?php echo $row['Price']; ?></td>
        <td>
          <select name="M_quantity">
          <?php
          $list= "select * from list";
          $show=$con->query($list);
          if($show->num_rows>0){
            while($row1=$show->fetch_assoc()){
              ?>
              <option value="<?php echo $row1['Q_id']; ?>">
                <?php echo $row1['Q_id']; ?>
              </option>
              <?php
      }
      }
       ?>
        </select>
        </td>

           </tr>
           <?php
      }
      ?>
      </table>
      <input type="submit" class="btn btn-success" name="add_cart" value="Add To Cart">
    </form>
      <?php
    }
  else {
    echo "No Record found";
  }
}
?>
      </div>
      <div class="col-md-6 col-md-offset-3 text-center" style="margin-top:30px; border: 1px solid black;">
        <h2 class="text-left">Cart</h2>
        <hr>
        <table class="table table-hover cart" border="1px">
          <th>Sr#</th>
          <th>Medicine Name</th>
          <th>Price</th>
        <!-- <?php
          if (isset($_POST['sold'])) {
          global $count;
          $count++;
          $medi=$_SESSION["medicine"];
            $price=$_SESSION["price"];
          session_unset();
          session_destroy();
          $quantity= $_POST['M_quantity'];
          $T_price=$price*$quantity;
        ?>
            <tr>
            <td><?php echo $c; ?></td>
              <td><?php echo "$medi"; ?></td>
              <td><?php echo $T_price; ?></td>
            </tr>
        <?php
        }
        ?> -->
        <tr>
        <th>Total Items</th>
        <th colspan="2" class="text-center">Total Price</th>
        </tr>
        <tr>
          <td colspan="2" class="text-center">
          </td>
          <td>
          </td>
        </tr>
        </table>
      </div>
    </div>
  </body>
</html>
