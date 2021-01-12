<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
    echo "Estes es el id ", $_SESSION[id];
}
?>
<?php include $base_dir . "/models/model-profile.php";?>
<?php include $base_dir . "/models/model-home.php";?>
<?php include $templates_header_adm ?>

<body>

  <?php include $templates_navbar_adm ?>
  <br>
  <br>
  <br>
  <br>
  <!------------------------------------------------------------------------------------------>
  <style>
      .fb-clone-card {
    max-width: 1100px;
    min-width: 1100px;
    margin: auto;
    background-color: black;
    border: 1px solid #63A74C;
    border-radius: 3px;
    margin-bottom: 10px;
}

.botonescentrados{
  margin: 0 0 1rem;
  display: flex;

   justify-content: space-around;
   align-items: center;
   
   margin: 0 auto;
}
  </style>
  <!------------------------------------------------------------------------------------------>
  <article class="container">
    <div class="">
      <?php
      
      $db->debug();
      
      
    $ide  = $_SESSION['usuario']->idmembers;//Hay que averiguar como enviamos el idmembers

    //$profile->getOne("idmembers = '{$ide}'");
    //$profile->getOne($ide);
    $profile->getWhere("idmembers='{$ide}'");
    
        
    while ($row = $profile->next()){
   

      ?>
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 cddn0xzi">
        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u d2edcug0 hpfvmrgz rj1gh0hx buofh1pr">
          <div class="k4urcfbm l9j0dhe7 datstx6m">
            <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3">
              <div class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 ni8dbmo4 stjgntxs">
                <div class="do00u71z l9j0dhe7 k4urcfbm" style="left: 50%; position: absolute; top: 0px; transform: translateX(-50%); padding-top: 56.25%;">
                  <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4"><img alt="" class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 datstx6m k4urcfbm" src="resources/userpics/fondo.jpg"></div>
                </div>
                <div class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 jge66auo"></div>
              </div>
              <div class="rq0escxv l9j0dhe7 du4w35lb o4feeg3o hpfvmrgz rj1gh0hx buofh1pr g5gj957u bp9cbjyn j83agx80 cbu4d94t taijpn5t">
                <div class="ni8dbmo4 stjgntxs l9j0dhe7 k4urcfbm uo3d90p7 l82x9zwi kipmrytf bti8j40k" style="border-radius: 0px 0px max(0px, min(8px, ((100vw - 4px) - 100%) * 9999)) max(0px, min(8px, ((100vw - 4px) - 100%) * 9999)) / 0px 0px 8px 8px;"><a aria-label="Link to open profile cover photo" class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 a8c37x1j p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l" src="images/fondo.jpg" role="link" tabindex="0">
                    <div class="do00u71z l9j0dhe7 k4urcfbm ni8dbmo4 stjgntxs" style="padding-top: 37.037%;">
                      <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4">
                        <div class="do00u71z l9j0dhe7 k4urcfbm ni8dbmo4 stjgntxs" style="left: 50%; position: absolute; top: 56.0543%; transform: translate(-50%, -56.0543%); padding-top: 56.25%;">
                          <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4"><img data-imgperflogname="profileCoverPhoto" alt="" class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 datstx6m k4urcfbm" src="resources/userpics/fondo.jpg"></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="i09qtzwb n7fi1qx3 pmk7jnqg j9ispegn">
                    <div class="kpb67iw4 gl4o1x5y lt9micmv l9j0dhe7">
                      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw bkfpd7mw gs1a9yip owycx6da btwxx1t3 d1544ag0 tw6a2znq discj3wi b5q2rw42 lq239pai mysgfdmx hddg9phg">
                        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz p8fzw8mz pcp91wgn iuny7tx3 ipjc6fyt">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 ihqw7lf3 cddn0xzi">
        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u marjyy4e hpfvmrgz rj1gh0hx buofh1pr hv4rvrfc dati1w0a">
          <div class="cbu4d94t j83agx80">
            <div class="aovydwv3 o8rfisnq j83agx80 do00u71z tr9rh885">
              <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw i1fnvgqd gs1a9yip owycx6da btwxx1t3">
                <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz">
                  <div class="b3onmgus e5nlhep0 ph5uu5jm ecm0bbzt spb7xbtv bkmhp75w emlxlaya s45kfl79 cwj9ozl2">
                    <div aria-label="Acciones de foto del perfil" class="oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l oo9gr5id" role="button" tabindex="0">
                      <div class="q9uorilb l9j0dhe7 pzggbiyp du4w35lb"><svg aria-label="Acciones de foto del perfil" class="pzggbiyp" data-visualcompletion="ignore-dynamic" role="img" style="height: 168px; width: 168px;">
                          <mask id="jsc_c_19">
                            <circle cx="84" cy="84" fill="white" r="84"></circle>
                          </mask>
                          <g mask="url(#jsc_c_19)">
                            <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xlink:href="<?php echo "$row->image"?>" style="height: 168px; width: 168px;"></image>
                            <circle class="mlqo0dh0 georvekb s6kb5r3f" cx="84" cy="84" r="84"></circle>
                          </g>
                        </svg>
                        <div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div>
                        <div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv pmk7jnqg kavbgo14" data-visualcompletion="ignore" style="bottom: 25px; right: 25px; transform: translate(50%, 50%);">
                          <div aria-hidden="true">
                            <div aria-label="Actualizar foto del perfil" class="oajrlxb2 tdjehn4e qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l bp9cbjyn s45kfl79 emlxlaya bkmhp75w spb7xbtv rt8b4zig n8ej3o3l agehan2d sk4xxmp2 taijpn5t tv7at329 thwo4zme" role="button" tabindex="-1"><i class="hu5pjgll lzf7d6o1 sp_-dWGlVxx6bS sx_1d7e51"></i>
                              <div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s" data-visualcompletion="ignore"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 d1544ag0 tw6a2znq discj3wi b5q2rw42 lq239pai mysgfdmx hddg9phg">
              <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz p8fzw8mz pcp91wgn iuny7tx3 ipjc6fyt">
                <div class="bp9cbjyn j83agx80 cbu4d94t">
                  <div class="ihqw7lf3">
                    <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 jb3vyjys b5q2rw42 lq239pai mysgfdmx hddg9phg">
                      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz p8fzw8mz pcp91wgn iuny7tx3 ipjc6fyt">
                        <div class="j83agx80 cbu4d94t obtkqiv7 sv5sfqaa">
                          <div class="bi6gxh9e aov4n071"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 qg6bub1s fe6kdd0r mau55g9w c8b282yb teo7jy3c mhxlubs3 p5u9llcw hnhda86s oo9gr5id oqcyycmt" dir="auto">
                              <h1 class="gmql0nx0 l94mrbxd p1ri9a11 lzcic4wl bp9cbjyn j83agx80" dir="auto"><?php echo "$row->firstname", " ", "$row->lastname"; ?></h1>
                            </span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="j83agx80 cbu4d94t obtkqiv7 sv5sfqaa">
                    <div class="bi6gxh9e aov4n071"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb hrzyx87i a5q79mjw g1cxx5fr knj5qynh m9osqain oqcyycmt" dir="auto"><span>Changing The World For a Better Future<div><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a jq4qci2q a3bd9o3v lrazzd5p q66pz984">
                              <div class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 lrazzd5p" role="button" tabindex="0"><a href='$row->IdDepartamento' data-toggle='modal' data-target='#EditModal' class='linkborrar'>Edit</a></div>
                            </span></div></span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 cddn0xzi">
        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u marjyy4e hpfvmrgz rj1gh0hx buofh1pr hv4rvrfc dati1w0a">
          <div class="l6v480f0"></div>
        </div>
      </div>
      <!--///////////////////////////////////////////////////////////////-->
      
  </div>
 
</article>

      <!---/////////////////////////////////////////////////////////////////-->
      <?php } ?>
  
      <!------------------------------------------------------------------------------------------>
    
    <?php 
    // OBTIENE SOLO A LAS PUBLICACIONES DE AMIGOS
    //SELECT * FROM `vw_post` WHERE `my_id` = 1 AND `friend_request` = 2
    // $friends->getWhere("my_id='{$idVar}' AND friend_request = '2'");
    $idVar = $_SESSION['usuario']->idmembers;
    $home->getWhereTable("idmembers='{$idVar}' ORDER BY date_posted DESC");
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
  <!------------------------------------------------------------------------------------------>
  
  <style>
      .modal {
    position: fixed;
    top: 0;
    /*right: 600px;*/
    right: 0px;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
}

.modal-dialog {
    /*max-width: 500px;*/
    margin: 30px auto;
}
  </style>
  
  
  
  
  <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
             aria-hidden="true">
            <div class="" role="document">
                <!--<div class="modal-content">-->
                    <!--<div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Borrar Departamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>-->
                    <div class="modal-body">
                        
                            <!-------------------------------------------------->
                            
                             <?php
      
      $db->debug();
      
      
    $ide  = $_SESSION['usuario']->idmembers;//Hay que averiguar como enviamos el idmembers

    //$profile->getOne("idmembers = '{$ide}'");
    //$profile->getOne($ide);
    $profile->getWhere("idmembers='{$ide}'");
    
        
    while ($row = $profile->next()){
   

      ?>
                            
                            
                            <div class="row">
    
    <div class="fb-cards-designs">
      <div class="fb-clone-card">
          <!--------AQUI INICIA EL FORMULARIO---------------------------------->
          <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Edit profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
          
         <form action="controllers/controller-members.php" method="post">
  <div class="row">
      <input type="hidden" name="id" value="<?=$row->idmembers?>"></input>
    <!---------------------------------------------------------------------------------------------------------->
  <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
          
          
          
          
          
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">First Name</label>
          <div class="col-md-12">
            <input id="textinput" name="firtsname" type="text" placeholder="First Name" class="form-control input-md" value='<?=$row->firstname?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    <!------------------------------------------------------------------------------------------------------------------------>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Last Name</label>
          <div class="col-md-12">
            <input id="textinput" name="lastname" type="text" placeholder="Last Name" class="form-control input-md" value='<?=$row->lastname?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->        
        <!--AQUI INICIAN LOS PAISES-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Country</label>
            <div class="col-md-12">
            <select id="country" name="country" class="form-control">
              <option value="" disabled selected>Country</option>
              <option value='<?=$row->country?>' selected></option>
              <option value="Afganistán">Afganistán</option>
              <option value="Albania">Albania</option>
              <option value="Alemania">Alemania</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antártida">Antártida</option>
              <option value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option value="Antillas Holandesas">Antillas Holandesas</option>
              <option value="Arabia Saudí">Arabia Saudí</option>
              <option value="Argelia">Argelia</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaiyán">Azerbaiyán</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrein">Bahrein</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Bélgica">Bélgica</option>
              <option value="Belice">Belice</option>
              <option value="Benin">Benin</option>
              <option value="Bermudas">Bermudas</option>
              <option value="Bielorrusia">Bielorrusia</option>
              <option value="Birmania">Birmania</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Brasil">Brasil</option>
              <option value="Brunei">Brunei</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Bután">Bután</option>
              <option value="Cabo Verde">Cabo Verde</option>
              <option value="Camboya">Camboya</option>
              <option value="Camerún">Camerún</option>
              <option value="Canadá">Canadá</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Chipre">Chipre</option>
              <option value="Ciudad del Vaticano (Santa Sede)">Ciudad del Vaticano (Santa Sede)</option>
              <option value="Colombia">Colombia</option>
              <option value="Comores">Comores</option>
              <option value="Congo">Congo</option>
              <option value="Congo, República Democrática del">Congo, República Democrática del</option>
              <option value="Corea">Corea</option>
              <option value="Corea del Norte">Corea del Norte</option>
              <option value="Costa de Marfíl">Costa de Marfíl</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
              <option value="Cuba">Cuba</option>
              <option value="Dinamarca">Dinamarca</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egipto">Egipto</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Eslovenia">Eslovenia</option>
              <option value="España">España</option>
              <option value="Estados Unidos">Estados Unidos</option>
              <option value="Estonia">Estonia</option>
              <option value="Etiopía">Etiopía</option>
              <option value="Fiji">Fiji</option>
              <option value="Filipinas">Filipinas</option>
              <option value="Finlandia">Finlandia</option>
              <option value="Francia">Francia</option>
              <option value="Gabón">Gabón</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Granada">Granada</option>
              <option value="Grecia">Grecia</option>
              <option value="Groenlandia">Groenlandia</option>
              <option value="Guadalupe">Guadalupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guayana">Guayana</option>
              <option value="Guayana Francesa">Guayana Francesa</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Haití">Haití</option>
              <option value="Honduras">Honduras</option>
              <option value="Hungría">Hungría</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Irak">Irak</option>
              <option value="Irán">Irán</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Isla Bouvet">Isla Bouvet</option>
              <option value="Isla de Christmas">Isla de Christmas</option>
              <option value="Islandia">Islandia</option>
              <option value="Islas Caimán">Islas Caimán</option>
              <option value="Islas Cook">Islas Cook</option>
              <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
              <option value="Islas Faroe">Islas Faroe</option>
              <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
              <option value="Islas Malvinas">Islas Malvinas</option>
              <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
              <option value="Islas Marshall">Islas Marshall</option>
              <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
              <option value="Islas Palau">Islas Palau</option>
              <option value="Islas Salomón">Islas Salomón</option>
              <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
              <option value="Islas Tokelau">Islas Tokelau</option>
              <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
              <option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
              <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
              <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
              <option value="Israel">Israel</option>
              <option value="Italia">Italia</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japón">Japón</option>
              <option value="Jordania">Jordania</option>
              <option value="Kazajistán">Kazajistán</option>
              <option value="Kenia">Kenia</option>
              <option value="Kirguizistán">Kirguizistán</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Laos">Laos</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Letonia">Letonia</option>
              <option value="Líbano">Líbano</option>
              <option value="Liberia">Liberia</option>
              <option value="Libia">Libia</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lituania">Lituania</option>
              <option value="Luxemburgo">Luxemburgo</option>
              <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malasia">Malasia</option>
              <option value="Malawi">Malawi</option>
              <option value="Maldivas">Maldivas</option>
              <option value="Malí">Malí</option>
              <option value="Malta">Malta</option>
              <option value="Marruecos">Marruecos</option>
              <option value="Martinica">Martinica</option>
              <option value="Mauricio">Mauricio</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mayotte">Mayotte</option>
              <option value="México">México</option>
              <option value="Micronesia">Micronesia</option>
              <option value="Moldavia">Moldavia</option>
              <option value="Mónaco">Mónaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Níger">Níger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Niue">Niue</option>
              <option value="Norfolk">Norfolk</option>
              <option value="Noruega">Noruega</option>
              <option value="Nueva Caledonia">Nueva Caledonia</option>
              <option value="Nueva Zelanda">Nueva Zelanda</option>
              <option value="Omán">Omán</option>
              <option value="Países Bajos">Países Bajos</option>
              <option value="Panamá">Panamá</option>
              <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
              <option value="Paquistán">Paquistán</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Perú">Perú</option>
              <option value="Pitcairn">Pitcairn</option>
              <option value="Polinesia Francesa">Polinesia Francesa</option>
              <option value="Polonia">Polonia</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Reino Unido">Reino Unido</option>
              <option value="República Centroafricana">República Centroafricana</option>
              <option value="República Checa">República Checa</option>
              <option value="República de Sudáfrica">República de Sudáfrica</option>
              <option value="República Dominicana">República Dominicana</option>
              <option value="República Eslovaca">República Eslovaca</option>
              <option value="Reunión">Reunión</option>
              <option value="Ruanda">Ruanda</option>
              <option value="Rumania">Rumania</option>
              <option value="Rusia">Rusia</option>
              <option value="Sahara Occidental">Sahara Occidental</option>
              <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
              <option value="Samoa">Samoa</option>
              <option value="Samoa Americana">Samoa Americana</option>
              <option value="San Marino">San Marino</option>
              <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
              <option value="Santa Helena">Santa Helena</option>
              <option value="Santa Lucía">Santa Lucía</option>
              <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
              <option value="Senegal">Senegal</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leona">Sierra Leona</option>
              <option value="Singapur">Singapur</option>
              <option value="Siria">Siria</option>
              <option value="Somalia">Somalia</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
              <option value="Suazilandia">Suazilandia</option>
              <option value="Sudán">Sudán</option>
              <option value="Suecia">Suecia</option>
              <option value="Suiza">Suiza</option>
              <option value="Surinam">Surinam</option>
              <option value="Tailandia">Tailandia</option>
              <option value="Taiwán">Taiwán</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Tayikistán">Tayikistán</option>
              <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
              <option value="Timor Oriental">Timor Oriental</option>
              <option value="Togo">Togo</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad y Tobago">Trinidad y Tobago</option>
              <option value="Túnez">Túnez</option>
              <option value="Turkmenistán">Turkmenistán</option>
              <option value="Turquía">Turquía</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Ucrania">Ucrania</option>
              <option value="Uganda">Uganda</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekistán">Uzbekistán</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Vietnam">Vietnam</option>
              <option value="Yemen">Yemen</option>
              <option value="Yugoslavia">Yugoslavia</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabue">Zimbabue</option>
            </select>
             </div>
            </div>
          <!--AQUI FINALIZAN LOS PAISES-->

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email Address</label>
          <div class="col-md-12">
              <input id="textinput" name="email" type="email" placeholder="Email" class="form-control input-md" value='<?=$row->email?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        
        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Gender</label>
            <div class="col-md-12">
                <select id="selectbasic" name="gender" class="form-control">
                    <option value="" disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
         <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Username</label>
          <div class="col-md-12">
              <input id="textinput" name="username" type="text" placeholder="Username" class="form-control input-md" value='<?=$row->username?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Password</label>
          <div class="col-md-12">
              <input id="textinput" name="password" type="password" placeholder="password" class="form-control input-md" value='<?=$row->password?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Repeat Password</label>
          <div class="col-md-12">
              <input id="textinput" name="repeatpassword" type="password" placeholder="Repeat Password" class="form-control input-md" value='<?=$row->password?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Profile Picture</label>
          <div class="col-md-12">
              <input id="textinput" name="image" type="file" placeholder="Profile Picture" class="form-control input-md" value='<?=$row->image?>'>
          </div>
        </div>
        
      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Birthdate</label>
          <div class="col-md-12">
              <input id="textinput" name="birthdate" type="date" placeholder="Birthdate" class="form-control input-md" value='<?=$row->birthdate?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Phone Number</label>
          <div class="col-md-12">
              <input id="textinput" name="mobile" type="tel" placeholder="Phone Number" class="form-control input-md" value='<?=$row->mobile?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
    
      <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
    <div class="buofh1pr hv4rvrfc">
      <div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Religion</label>
          <div class="col-md-12">
            <input id="textinput" name="religion" type="text" placeholder="Religion" class="form-control input-md" value='<?=$row->religion?>'>
          </div>
        </div>

      </div>
    </div>
  </div>
        
  </div><!--------ESTE ES EL DIV DE ROW------------->
  
      <!-------BOTONES--------->
        <!-- Button (Double) -->
        <div class="botonescentrados">
          <div class="form-group">
          <div class="">
                <?php
                    if($ide) {
                    echo "<input type='hidden' name='tipo' value='actualizar'>";
                    } else {
                    echo "<input type='hidden' name='tipo' value='nuevo'>";
                    }
                    ?>
              <a href="?page=adm-profile" class="btn btn-dark">Cancel</a>
              <input type="submit" class="btn btn-primary" value="Save Changes">
          </div>
        </div>
        </div>
    <!-------BOTONES--------->
  
</form>            
          <!--------AQUI TERMINA EL FORMULARIO---------------------------------->
      </div>
    </div>
        </div>
                            
    <?php } ?>
                            
                            <!-------------------------------------------------->
                       
                    </div>
                    
                    <!--<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger" form="form2">Aceptar</button>
                    </div>-->
                <!--</div>-->
            </div>
        </div>
  <!------------------------------------------------------------------------------------------>

  <?php include $templates_footer_adm ?>