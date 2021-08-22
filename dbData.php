

<table border="1px">
    
    <tr>
        <td><b>S.R No</b></td>
        <td><b>Full Name</b></td>
        <td><b>Email Address</b></td>
        <td><b>Phone Number</b></td>
        <td><b>Massage</b></td>

    </tr>

    <?php
   require_once("config.php");

   $showDataQuery = "SELECT * FROM my_user";
   $runDataQuery = mysqli_query($connect,$showDataQuery);

   if($runDataQuery ==true){

  $sncrount =1;

    while($mydata = mysqli_fetch_array($runDataQuery)){
      ?>
     <tr>
     <td><?php echo $sncrount; $sncrount++;?></td>
      <td><?php echo $mydata["fullnam"];?></td>
      <td><?php echo $mydata["email_addr"];?></td>
      <td><?php echo $mydata["phonenum"];?></td>
      <td><?php echo $mydata["massage"];?></td> 

  </tr>
  <?php

    }
   }
    ?>

</table>
