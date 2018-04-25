<!DOCTYPE html>
<?php
include("includes/db_con.php");
include ("includes/links.html");
include ("includes/Query.php");

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="text-center col-md-6 col-md-offset-3">
      <h1>Wellcome To City Pharmacy</h1>
      <h3>City Pharmacy Staff</h3>
      <form class="form-group " action="" method="post">
        <div class="col-md-6 col-md-offset-3">
          <input type="text" class="form-control" name="medicine" value="" placeholder="Medicine Name">
        </div>
        <div class="col-md-6 col-md-offset-3" style="margin-top:10px;" >
          <input type="submit"class="btn btn-info" name="Search_medicine" value="Search">
        </div>
      </form>
      <div class=""style="margin-top:130px;">
        <?php
        if(isset($_POST['Search_medicine'])){    //trigger button click

          $medicine=$_POST['medicine'];

        $query1="SELECT * FROM Ph_Medicine where Medicine_Name like '%{$medicine}%'";
        $result1= $con->query($query1);
        if($result1->num_rows>0){
        ?>
          <h3>Result</h3>
        <table border="1px solid black" class="table table-hover">
<th>Medicine Name</th>
<th>Provider</th>
<th>Quantity</th>
<th>Rack No</th>
        <?php
    while ($row=$result1->fetch_assoc()) {
         ?>
         <tr>
        <td><?php echo $row['Medicine_Name']; ?></td>
        <td><?php echo $row['Provider']; ?></td>
        <td><?php echo $row['Quantity']; ?></td>
        <td><?php echo $row['Rack_NO']; ?></td>
           </tr>
           <?php
      }
      ?>
      </table>
      <?php
    }
  else {
    echo "No Record found";
  }
    }
?>
      </div>
    </div>
  </body>
</html>
