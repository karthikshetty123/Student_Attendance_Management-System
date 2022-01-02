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
            <h3>Student Info</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="5%">USN </th>
                        <th class="text-center" width="5%">Name</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                     $sql="SELECT * from student_info";
                     $result=mysqli_query($conn,$sql);
                     while($row = mysqli_fetch_array($result)):
                   ?>
                 <tr>
                 <td class="text-center"><?php echo ucwords($row['ID'])?></td>    
                 <td>
                     <p><b><?php echo ucwords($row['NAME']) ?></b></p>
                     </td>
                 </tr>

                   <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>