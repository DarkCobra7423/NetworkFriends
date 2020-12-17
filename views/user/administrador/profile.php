<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
    echo "Estes es el id ", $_SESSION[id];
}
?>
<?php include $base_dir . "/models/model-profile.php";?>
<?php include $templates_header_adm ?>
    <body>

<?php include $templates_navbar_adm ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!------------------------------------------------------------------------------------------>
    
    
    <!------------------------------------------------------------------------------------------>
    <article class="container">
  <div class="">
      <?php
    $ide  = $_POST['1'];//Hay que averiguar como enviamos el idmembers

    $profile->getAll();
    
    while ($row = $profile->next()){
   


         
          $db->debug();
      ?>
    <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3 cddn0xzi">
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u d2edcug0 hpfvmrgz rj1gh0hx buofh1pr">
        <div class="k4urcfbm l9j0dhe7 datstx6m">
          <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t gs1a9yip owycx6da btwxx1t3">
            <div class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 ni8dbmo4 stjgntxs">
              <div class="do00u71z l9j0dhe7 k4urcfbm" style="left: 50%; position: absolute; top: 0px; transform: translateX(-50%); padding-top: 56.25%;">
                  <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4"><img alt="" class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 datstx6m k4urcfbm" src="https://scontent.fmtt1-1.fna.fbcdn.net/v/t1.0-0/fb50/s320x320/33030958_1821307764831062_5762373229507248128_o.jpg?_nc_cat=109&amp;ccb=2&amp;_nc_sid=e3f864&amp;_nc_ohc=96N75EU2HisAX84NQ_Q&amp;_nc_ht=scontent.fmtt1-1.fna&amp;oh=db00518a1aa0ee970188e983ebe2623c&amp;oe=5FE8169D"></div>
              </div>
              <div class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 jge66auo"></div>
            </div>
            <div class="rq0escxv l9j0dhe7 du4w35lb o4feeg3o hpfvmrgz rj1gh0hx buofh1pr g5gj957u bp9cbjyn j83agx80 cbu4d94t taijpn5t">
              <div class="ni8dbmo4 stjgntxs l9j0dhe7 k4urcfbm uo3d90p7 l82x9zwi kipmrytf bti8j40k" style="border-radius: 0px 0px max(0px, min(8px, ((100vw - 4px) - 100%) * 9999)) max(0px, min(8px, ((100vw - 4px) - 100%) * 9999)) / 0px 0px 8px 8px;"><a aria-label="Link to open profile cover photo" class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 a8c37x1j p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l" src="images/fondo.jpg" role="link" tabindex="0">
                  <div class="do00u71z l9j0dhe7 k4urcfbm ni8dbmo4 stjgntxs" style="padding-top: 37.037%;">
                    <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4">
                      <div class="do00u71z l9j0dhe7 k4urcfbm ni8dbmo4 stjgntxs" style="left: 50%; position: absolute; top: 56.0543%; transform: translate(-50%, -56.0543%); padding-top: 56.25%;">
                          <div class="gs1a9yip ow4ym5g4 auili1gw j83agx80 cbu4d94t buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4"><img data-imgperflogname="profileCoverPhoto" alt="" class="i09qtzwb rq0escxv n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 datstx6m k4urcfbm" src="images/fondo.jpg"></div>
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
                            <div class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 lrazzd5p" role="button" tabindex="0">Editar</div>
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
      <div>
          <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Double Button</label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>
      </div>
      <!---/////////////////////////////////////////////////////////////////-->
      <?php } ?>
  </div>
</article>
    <!------------------------------------------------------------------------------------------>

<?php include $templates_footer_adm ?>