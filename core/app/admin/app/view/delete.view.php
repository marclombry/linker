<?php include("partials/header.view.php");?>

  
              <h2>Back office</h2>
              <div id="" class="flexy">
              <?php
              global $database;
              $t = $database->select("select id,name,color,href,photo,category from links");

              $all=[];
              foreach ($t as $key => $link) {
                array_push($all,new Links($link));
              }
              foreach($all as $key=> $value){
                echo '
              <div class="block" style="background-color:'.$value->getColor().'">
                  <h2>'.$value->getName().'</h2> 
                  <p>Delete : <a href="?id='.$value->getId().'">'.$value->getId().'</a></p>     
              </div>';
              }
              ?>
      
        
<?php include("partials/footer.view.php");?>