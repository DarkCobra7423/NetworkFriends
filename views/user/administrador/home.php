<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
}
?>
<?php include $base_dir . "/models/model-home.php";?>
<?php include $base_dir . "/models/model-members.php";?>
<?php include $templates_header_adm ?>
    <body>

<?php include $templates_navbar_adm ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!------------------------------------------------------------------------------------------>
    <article class="container">
  <div class="row">
    <!-------------------------------------------------------------------------------------------------->
    <style>
        .fb-clone-card-photo-preview {
            
    max-width: 450px;
    min-width: 450px;
    margin: auto;
    background-color: black;
    border: 1px solid #63A74C;
    border-radius: 3px;
    margin-bottom: 10px;
    margin-top: 20px;
}

        .textarea {
    max-width: 450px;
    min-width: 450px;
    margin: auto;
    
    border: 1px solid #63A74C;
    border-radius: 3px;
}
    </style>
     <!-------------------------------------------------------------------------------------------------->
     
    <?php 
    $idp = $_SESSION['usuario']->idmembers;
    $member->getWhere("idmembers='{$idp}'");
      while ($row = $member->next()) {
          
    $db->debug();
    ?>
     
     
    <div class="fb-cards-designs">
      <div class="fb-clone-card">
        <div class="fb-card-main-content">
            <form action="controllers/controller-post.php" method="post">
                        <div class="user-post-info">
              <div class="user-thumb">
                <img src="<?php echo "$row->image"; ?>" class="img-responsive" />
              </div>
              <div class="user-information">
                <p><?php echo "$row->firstname", " ", "$row->lastname"; ?></p>
              </div>
            </div>
          
          <div class="fb-card-body simple-text-card simple-image-card">
              
              <div class="fb-clone-card-photo-preview">
                              <!-- Textarea -->
                    <!--<div class="col-md-4">-->
                        <!--<textarea rows="5" cols="53" class="form-publicar-textarea" id="txtheader" name="postheader" placeholder="What are you thinking about?" required="" maxlength="1000" style="font-size: 14px;font-style: normal;"></textarea>-->
                        <textarea rows="5" class="textarea"> hola</textarea>
                    <!--</div>-->
              </div>


<!-- File Button --> 
<div class="form-group" align="center">
    <!--<input type="file" id="actual-btn" hidden/>-->
    <input name="imagesvideo" type="file" id="file" class="btn-primary" hidden/>
 <label id="cargarFotoVideo" class="cargarFotoVideo" for="file">Upload image or video</label>
 <div id="preview" class="fb-clone-card-photo-preview"></div>
</div>

<!-- Text input-->
<!--
<div class="form-group">
  <label class="col-md-4 control-label" for="footer"></label>  
  <div class="col-md-8-footer-publicar">
  <input id="footer" name="footer" type="text" placeholder="Footer" class="form-control input-md">
    
  </div>
</div>
-->
          </div>
        </div>

          <input type="hidden" name="idi" value="<?= $row->idmembers?>"></input>

        <div class="fb-card-comments">
          <div class="comment-input-holder">
           <input type="submit" class="btn btn-block btn btn-primary" value="To Post">
          </div>
        </div>
      <?php } ?>
    <!-------------------------------------------------------------------------------------------------->
  </div>
  </div>
     </form>
  </div>
</article> 
    <!------------------------------------------------------------------------------------------>
    
    <?php 
    // OBTIENE SOLO A LAS PUBLICACIONES DE AMIGOS
    //SELECT * FROM `vw_post` WHERE `my_id` = 1 AND `friend_request` = 2
    // $friends->getWhere("my_id='{$idVar}' AND friend_request = '2'");
    $idVar = $_SESSION['usuario']->idmembers;
    $home->getWhere("my_id='{$idVar}' AND friend_request = '2' ORDER BY vw_post.date_posted DESC");
    //$home->getAll();
    
    while ($row = $home->next()) {
          
    $db->debug();
    ?>
    
    <article class="container">
  <div class="row">
    
    <div class="fb-cards-designs">
      <div class="fb-clone-card">
        <div class="fb-card-main-content">
          <div class="fb-card-header">
            <div class="user-post-info">
              <div class="user-thumb">
                <img src="<?php echo "$row->image"; ?>" class="img-responsive" />
              </div>
              <div class="user-information">
                <p><?php echo "$row->firstname", " ", "$row->lastname"; ?></p>
                <small><?php echo "$row->date_posted"; ?></small>
              </div>
            </div>
            <div class="post-action">
              <i class="fas fa-ellipsis-h"></i>
            </div>
          </div>
          <div class="fb-card-body simple-text-card simple-image-card">
            <p><?php echo "$row->header"; ?></p>
            <div class="images-container">
              <img src="<?php echo "$row->images"; ?>" class="img-responsive" />
            </div>
          </div>
        </div>

        <div class="fb-card-like-comment-holder">
          <div class="fb-card-like-comment">
            <div class="likes-emoji-holder">
              <span>14 Likes</span>
            </div>
            <div class="like-comment-holder">
              <span>10 Commnets</span>
            </div>
          </div>
        </div>
        <div class="fb-card-actions-holder">
          <div class="fb-card-actions">
            <div class="fb-btn-holder">
              <a href="#"><i class="far fa-thumbs-up"></i> Like</a>
            </div>
            <div class="fb-btn-holder">
              <a href="#"><i class="far fa-comment-alt"></i> Comment</a>
            </div>

            <div class="fb-btn-holder">
              <a href="#"><i class="far fa-share-square"></i> Share</a>
            </div>
          </div>
        </div>

        <div class="fb-card-comments">
          <div class="comment-input-holder">
            <div class="user-thumb">
              <img src="<?php echo "$row->image"; ?>" class="img-responsive" />
            </div>
            <div class="comment-input">
              <div class="comment-box" placeholder="Write a comment..." contenteditable="true" placeholder="write a comment"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </div>
  </div>
  </div>
</article>
    
      <?php } ?>
    <!-------------------------------------------------------------------------------------------------->
    <script>
        document.getElementById("file").onchange = function (e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function () {
    let preview = document.getElementById("preview"),
      image = document.createElement("img");

    image.src = reader.result;

    preview.innerHTML = "";
    preview.append(image);
  };
};

    </script>
    <!------------------------------------------------------------------------------------------>
    
    <!------------------------------------------------------------------------------------------>

<?php include $templates_footer_adm ?>