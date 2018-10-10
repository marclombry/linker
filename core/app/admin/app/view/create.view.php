<?php include("partials/header.view.php");?>

    <div id="content" class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="row">
            <div>
              <h2>Back office</h2>
              <div id="" class=""></div>
              <form method="post">
                <div>
                  <label for="name">Nom du lien : </label></br>
                  <?php echo Form::Inputs('name','text','inp','name','nom du lien');?>  
                </div>    
                <div>
                  <label for="color">Nom couleur : </label></br>
                  <?php echo Form::Inputs('color','text','inp','color','la couleurs');?> 
                </div>
                <div>
                  <label for="photo">Chemin images : </label></br>
                  <?php echo Form::Inputs('photo','text','inp','photo','chemin images');?> 
                </div> 
                <div>  
                  <label for="href">Cible du lien : </label></br>
                  <?php echo Form::Inputs('href','text','inp','href','cible du lien');?> 
                </div>
                <div>
                  <label for="category">Nom de la categorie : </label></br>
                  <?php echo Form::Inputs('category','text','inp','category','nom de la category');?> 
                </div>
                <div>
                   <p><input type="submit" value="ajouter" name="sub" id="sub"></p>
                </div>
              </form>
            </div>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
      </div><!--/row-->
    </div>
<?php include("partials/footer.view.php");?>