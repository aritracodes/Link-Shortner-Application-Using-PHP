<?php 

include 'header.php';

if(isset($_POST['link'])){
    $link = $_POST['link'];
    $short_link = str_replace(' ', '',$_POST['short_link']);
    $txt = $_POST['txt'];

    $count = mysqli_num_rows(mysqli_query($con, "Select * from shorturl where short_link = '$short_link'"));
    if($count>0){

      echo '
      <div class="columns">
        <div class="column"></div>
        <div class="column is-half">
        <article class="message is-danger mt-5">
          <div class="message-body">
              Link already exists please use a unique link.
          </div>
        </article>
        </div>
        <div class="column"></div>
      </div>

      ';

    }else{

      mysqli_query($con, "Insert into shorturl(link, short_link, txt, status) values ('$link', '$short_link', '$txt', '1')");
      header("Location: table.php");
      die();
    }


}


 


?>


<div class="columns">
    <div class="column"></div>

    
    <div class="column ">
        <h1 class="title is-1 mt-6">Add short Link</h1>

<form method="POST">
        <div class="field mt-6">
          <label class="label">Link</label>
          <div class="control">
            <input class="input" type="textbox" id="link" name="link" placeholder="Add link" required>
          </div>
        </div>

        <!-- <div class="field">
            <label class="label">Short Link</label>
            <div class="control">
            <input class="input" type="textbox" id="short_link" name="short_link" placeholder="Do not use spaces" pattern="^\S+$" required>
          </div>
        </div> -->




        <div class="field has-addons">
          <p class="control">
            <a class="button is-static">
              <?php echo $_SERVER['HTTP_HOST']."/"; ?>
            </a>
          </p>
          <p class="control">
            <input class="input" type="textbox" id="short_link" name="short_link" placeholder="Do not use spaces" pattern="^\S+$" required>
          </p>
        </div>




        <div class="field">
            <label class="label">Text</label>
            <div class="control">
            <input class="input" type="textbox" id="txt" name="txt" placeholder="short link" required>
          </div>
        </div>

        <div class="control">
            <button class="button is-link" name="submit" type="submit">Generate</button>
        </div>
</form>


    </div>
    <div class="column"></div>
</div>




<?php

include 'footer.php';

?>