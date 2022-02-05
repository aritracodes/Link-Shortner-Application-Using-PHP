<?php
    
    include 'header.php';
    if(isset($_GET['type']) && $_GET['type'] == 'delete'){
        $id = mysqli_real_escape_string($con, $_GET['id']);
        mysqli_query($con,"delete from shorturl where id = '$id'");
    }

    if(isset($_GET['type']) && $_GET['type'] == 'status'){
      $id = mysqli_real_escape_string($con, $_GET['id']);
      $status = mysqli_real_escape_string($con, $_GET['status']);
          if($status == 'active'){

            mysqli_query($con, "update shorturl set status = '1' where id = '$id'");
          }elseif ($status == 'deactive') {

            mysqli_query($con, "update shorturl set status = '0' where id = '$id'");
          }else {
            echo "Sorry Invalid status";
          }
      }
    
      
      //echo $_SERVER['REQUEST_URI'] . "<br/>";
      //echo $_SERVER['SERVER_NAME'] . "<br/>";
      // echo $_SERVER['SCRIPT_FILENAME'];
?>







<div class="columns">

     <div class="column "></div> 

    <div class="column mt-5 "> 

    <a href="form.php"><button class="button">Add Link</button></a>

<table class="table">
  <thead>
    <tr>
      <td>#</td>
      <td>Text</td>
      <td>Short Link</td>
      <td >Link</td>
      <td>Views</td>
      <td >Remove</td>
      <td>Status</td>
      
      
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql = mysqli_query($con, "Select * from shorturl" );
        while($row = mysqli_fetch_assoc($sql)){

      ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['txt']; ?></td>
      <td><a href="<?php echo "../" . $row['short_link']; ?>"><?php echo $row['short_link']; ?></a></td>
      <td><a class="has-text-black" href="<?php echo $row['link']; ?>">
      <?php $cut = substr($row['link'],0,70); 
      echo $cut;
      

      
      if($row['link'] === "$cut"){
        echo " ";
      }else{
        echo "...";
      }
      
      
      ?>
    
    
      </a></td>
      <td><?php echo $row['hit_count']; ?></td>
      <td><a class="has-text-black" href="?id=<?php echo $row['id'];?>&type=delete"><button class="button is-danger">Delete</button></a></td>
      
      <td>
      <?php
        if($row['status']==1){
      ?>  <a class="has-text-black" href="?id=<?php echo $row['id'] ?>&type=status&status=deactive"><button class="button is-success is-light">Active
        </button></a> <?php
        }else{
      ?>  <a class="has-text-black" href="?id=<?php echo $row['id'] ?>&type=status&status=active"><button class="button is-danger is-light">Deactivate
        </button></a> <?php
        }
        ?>
      </td>
      
      
      <?php 

    }

      ?>
    </tr>
  </tbody>
</table>


  </div>

<div class="column "></div>


</div>






<?php

    include 'footer.php';
    
?>
    
    

        

        
        
