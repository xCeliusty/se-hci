<?php

 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "curedentalhouse";
 

 $radio ="";
 $fname = "";
 $phone ="";
 $subject = "";
 $email = "";
 $message ="";
 

 
 try{
 $conn = mysqli_connect($host, $user, $password, $database);
 }catch(Exception $ex){
     print "error";
 }

 function getPosts(){
     $posts = array();
	 
     $posts[0] = $_POST['radio'];
     $posts[1] = $_POST['fname'];
	 $posts[2] = $_POST['phone'];
     $posts[3] = $_POST['subject'];
     $posts[4] = $_POST['email'];
	 $posts[5] = $_POST['message'];
     return $posts;
 }

 
?>


<html>
 <head> 
  <title> MYSQL Entry </title>
    <style>
        body{
      background-image: url('seamless.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
        }
		.header {
    background-color: #ACD1FD;
    width: 100%;
    height: 100px;
    
    text-align: center;
    
    margin-bottom: 80px;
}
a {
    text-decoration: none;
	
    color: black;
    margin-top: 0px;
    font-size: 30px;
    margin: 0 40px;
    padding: 20px 10px;
    border-radius: 50px;
    
}
        
        .div3{
          height:100px;
          margin-top:180px;
          margin-left:400px;
          padding-left:50px;
        }
         td{

  color: black;
  border-bottom: 2px solid #ddd;
}

       
    </style>
  </head>
  <body>  
  <div class="header">
 
  <div class="header-right">
    
    <a>messages</a>
   
  </div>
</div>
    <div class = "div3">
  
    <table>
      <tr> 
	     
		   <td> Type </td>
          <td> Full Name </td>
          <td> Phone </td>
		   <td> Subject </td>
          <td> Email </td>
          <td> Message </td>
		  
      </tr>
    <?php
      $result = mysqli_query($conn, "SELECT * FROM chat");
      while($res = mysqli_fetch_array($result))
      {
	  ?>
         <tr>
   
	<td><?php echo $res['role']; ?></td>
    <td><?php echo $res['fullName']; ?></td>
	<td><?php echo $res['phone']; ?></td>
    <td><?php echo $res['subject']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['message']; ?></td> 
 
  </tr>	
	<?php	  
      }
    ?>

    </table>
    </div>      
 
  </body>
</html>