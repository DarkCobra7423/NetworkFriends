<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
}
?>
<?php include $base_dir . "/models/model-home.php";?>
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
     <!-------------------------------------------------------------------------------------------------->
    <div class="fb-cards-designs">
      <div class="fb-clone-card">
        <div class="fb-card-main-content">
                        <div class="user-post-info">
              <div class="user-thumb">
                <img src="images/carlos.jpeg" class="img-responsive" />
              </div>
              <div class="user-information">
                <p>Carlos Daniel Angel Padilla</p>
              </div>
            </div>
          
          <div class="fb-card-body simple-text-card simple-image-card">
              
            <!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtheader"></label>
  <div class="col-md-4">                     
      <textarea rows="5" cols="53" class="form-publicar-textarea" id="txtheader" name="txtheader" placeholder="What are you thinking about?" required="" maxlength="1000" style="font-size: 14px;font-style: normal;"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group" align="center">
 <input type="file" id="actual-btn" hidden/>
 <label id="cargarFotoVideo" class="cargarFotoVideo" for="actual-btn">Foto/Video</label>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="footer"></label>  
  <div class="col-md-8-footer-publicar">
  <input id="footer" name="footer" type="text" placeholder="Footer" class="form-control input-md">
    
  </div>
</div>
          </div>
        </div>

        

        <div class="fb-card-comments">
          <div class="comment-input-holder">
           <a href="#" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-cloud-upload" ></span>  Publicar</a>
          </div>
        </div>
   
    <!-------------------------------------------------------------------------------------------------->
  </div>
  </div>
  </div>
</article> 
    <!-------------------------------------------------------------------------------------------------->
    
    <?php 
    $home->getAll();
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
   
    <!------------------------------------------------------------------------------------------>
    
    <!------------------------------------------------------------------------------------------>

<?php include $templates_footer_adm ?>