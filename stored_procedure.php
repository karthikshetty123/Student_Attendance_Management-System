<!-- stored procedure implementation -->
<?php include('db_connect.php'); ?>
<?php include('header.php');?>
<!-- <?php session_start(); ?> -->
<?php
  if(!isset($_SESSION['login_id']))
    header('location:login.php'); 
 // include('./auth.php'); 
 ?>
<div class="col-md-8">

    <div class="card">
        <div class="card-header">
            <h3>Information About Branch</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">Branch </th>
                        <th class="text-center" width="5%">No of sections</th>
                     </tr>
                </thead>
                <tbody>
                  <?php
                     $sql="CALL `no_of_section`();";
                     $result=mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($result)):
                   ?>
                 <tr>
                 <td class="text-center"><?php echo ucwords($row['course'])?></td>    
                 <td>
                     <p><b><?php echo ucwords($row['No_of_Sections']) ?></b></p>
                     </td>
                 </tr>

                   <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>