<?php
    $con = mysqli_connect('localhost', 'root', '', 'shorturl');


    if(isset($_GET)){

        foreach ($_GET as $key =>$val) {
            $l = mysqli_real_escape_string($con, $key);
            $l = str_replace('/','',$l);
        
            $res = mysqli_query($con,"select link from shorturl where short_link='$l' and status='1'");
            $count = mysqli_num_rows($res);
            if($count > 0)
            {
                $row = mysqli_fetch_assoc($res);
                $link = $row['link'];
                mysqli_query($con, "Update shorturl set hit_count = hit_count + 1 where short_link='$l'");
                header('Location:' . $link);
                die();
            }
            else
            {


            echo '
            
           <!DOCTYPE html>
                <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>Link Deactivated</title>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"  crossorigin="anonymous">
                </head>
                <body>


                        <div class="columns level " style="margin-top: 25vh;">
                            
                            <div class="column is-one-fifth"></div>

                            
                            <div class="column level-item">

                                <span style="font-size: 3em; color: #F9D157;">
                                    <i class="fas fa-exclamation-triangle fa-5x"></i>
                                </span>

                            </div>
                            <div class="column">

                                <div class="content">
                                <h2 class="title is-2">Link Deactivated or Doesn\'t Exist !</h2>
                                <p>The link currently maybe deactivated or may not ever been created by any user. Please contact
                                with the Administration.</p>
                                <a href="panel/form.php"><button class="button">Create a new short Link</button> </a>
                                </div>

                            </div>
                            


                            <div class="column is-one-fifth"></div>
                            
                        </div>


                </body>
                </html>



            
            ';
        }
            }
            
        }

    
    ?>


