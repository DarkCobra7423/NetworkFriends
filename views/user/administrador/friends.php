<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
}
?>
<?php include $base_dir . "/models/model-friends.php";?>
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
    <style>
        
        .headind_srche {
    padding: 10px 29px 10px 20px;
    overflow: hidden;
    /* border-bottom: 1px solid #c4c4c4; */
}

.recent_headinge {
    float: left;
    /* width: 40%; */
}

        
        /*! CSS Used from: https://static.xx.fbcdn.net/rsrc.php/v3/yg/l/0,cross/F3ACgAmlK980LdphA0l7n_3do2b1SU2cirw6Y0zbCMXwcYAtTU7oquS.css?_nc_x=oB5-oomyzoZ */
#facebook ._-kb div{font-family:inherit;}
#facebook ._-kb span{font-family:inherit;}
#facebook ._-kb a{font-family:inherit;}
.esuyzwwr{text-decoration:none;}
.lzcic4wl{outline:none;}
.p7hjln8o{list-style:none;}
.auili1gw{border-width:0;}
.ow4ym5g4{border-style:solid;}
.bn081pho{border-right:none;}
.e9989ue4{border-bottom:0;}
.esr5mh6w{border-right:0;}
.gcieejh5{border-top:none;}
.humdl8nn{border-bottom:none;}
.izx4hr6d{border-left:none;}
.qu0x051f{border-top:0;}
.r7d6kgcz{border-left:0;}
.agehan2d{border-bottom-width:0;}
.ccm00jje{border-right-style:solid;}
.goun2846{border-top-style:solid;}
.mk2mc5f4{border-left-style:solid;}
.mtkw9kbi{border-top-color:var(--always-dark-overlay);}
.n8ej3o3l{border-right-width:0;}
.ppp5ayq2{border-left-color:var(--always-dark-overlay);}
.qensuy8j{border-bottom-color:var(--always-dark-overlay);}
.rt8b4zig{border-top-width:0;}
.s44p3ltw{border-bottom-style:solid;}
.sk4xxmp2{border-left-width:0;}
.tlpljxtp{border-right-color:var(--always-dark-overlay);}
.a3bd9o3v{line-height:1.3333;}
.a6sixzi8{align-items:inherit;}
.a8c37x1j{display:block;}
.a8nywdso{padding-left:0;}
.a8s20v7p{display:inherit;}
.a9txdygg{margin-right:-12px;}
.abiwlrkh{-webkit-user-select:none;}
.abs2jz4q{align-self:inherit;}
.aot14ch1{border-bottom-right-radius:6px;}
.aov4n071{margin-top:8px;}
.arfg74bv{border-top-right-radius:inherit;}
.art1omkt{transition-property:opacity;}
.b3onmgus{padding-left:4px;}
.b5wmifdl{opacity:0;}
.beltcj47{border-top-left-radius:6px;}
.bi6gxh9e{margin-bottom:8px;}
.bipmatt0{height:inherit;}
.bp9cbjyn{align-items:center;}
.btwxx1t3{flex-direction:row;}
.buofh1pr{flex-grow:1;}
.bwm1u5wc{color:var(--primary-button-text);}
.by2jbhx6{margin-left:-3px;}
.c1et5uql{word-wrap:break-word;}
.c4xchbtz{margin-right:-3px;}
.c5ndavph{transition-duration:var(--fds-duration-extra-extra-short-out);}
.c98fg2ug{background-color:var(--disabled-button-background);}
.cbu4d94t{flex-direction:column;}
.cebpdrjk{justify-content:inherit;}
.cxmmr5t8{margin-right:0;}
.d1544ag0{padding-right:12px;}
.d2edcug0{max-width:100%;}
.dflh9lhu{padding-right:8px;}
.dhp61c6y{min-width:inherit;}
.dlv3wnog{margin-right:-4px;}
.do00u71z{height:0;}
.dp1hu0rb{min-height:inherit;}
.du4w35lb{z-index:0;}
.e5nlhep0{padding-bottom:4px;}
.e9vueds3{font-size:.8125rem;}
.ecm0bbzt{padding-top:4px;}
.ekzkrbhg{font-weight:500;}
.enqfppq2{margin-bottom:-4px;}
.erlsw9ld{color:var(--disabled-text);}
.ew0dbk1b{margin-bottom:-5px;}
.f10w8fjw{padding-bottom:12px;}
.f1sip0of{touch-action:manipulation;}
.fnu23jab{margin-left:-12px;}
.g0qnabr5{white-space:nowrap;}
.g5gj957u{flex-shrink:1;}
.g5ia77u1{background-color:transparent;}
.georvekb{stroke:var(--media-inner-border);}
.ggysqto6{padding-top:1px;}
.gk29lw5a{font-family:var(--font-family-default)!important;}
.gs1a9yip{align-items:stretch;}
.hcukyx3x{margin-left:0;}
.hddg9phg{margin-top:-6px;}
.hkbzh7o3{flex-basis:50%;}
.hpfvmrgz{min-width:0;}
.hv4rvrfc{padding-right:16px;}
.hytbnt81{margin-left:3px;}
.hzawbc8m{text-align:left;}
.hzruof5a{pointer-events:none;}
.i09qtzwb{bottom:0;}
.i1ao9s8h{text-align:inherit;}
.i1fnvgqd{justify-content:space-between;}
.ipjc6fyt{padding-top:6px;}
.irj2b8pg{margin-top:-5px;}
.iuny7tx3{padding-bottom:6px;}
.iyyx5f41{width:inherit;}
.j5wam9gi{line-height:1.2308;}
.j5wkysh0{margin-right:3px;}
.j83agx80{display:flex;}
.j9ispegn{left:0;}
.jb3vyjys{padding-top:0;}
.jq4qci2q{font-size:.9375rem;}
.jwdofwj8{padding-top:2px;}
.k4urcfbm{width:100%;}
.k5wvi7nf{flex-direction:inherit;}
.k77z8yql{border-bottom-left-radius:inherit;}
.knj5qynh{font-weight:normal;}
.knvmm38d{margin-top:5px;}
.kr520xx4{top:0;}
.kr9hpln1{visibility:hidden;}
.kvgmc6g5{margin-top:0;}
.kzx2olss{border-bottom-left-radius:6px;}
.l82x9zwi{border-bottom-left-radius:8px;}
.l9j0dhe7{position:relative;}
.lhclo0ds{flex-wrap:wrap;}
.lrazzd5p{font-weight:600;}
.ltmttdrg{text-overflow:ellipsis;}
.m9osqain{color:var(--secondary-text);}
.mg4g778l{flex-basis:auto;}
.mlqo0dh0{fill:none;}
.muag1w35{margin-top:-4px;}
.mysgfdmx{margin-bottom:-6px;}
.n00je7tq{border-top-left-radius:inherit;}
.n7fi1qx3{right:0;}
.nc684nl6{display:inline;}
.nhd2j8a9{cursor:pointer;}
.ni8dbmo4{overflow-x:hidden;}
.nnctdnn4{min-height:44px;}
.nqmvxvec{align-self:flex-start;}
.oajrlxb2{-webkit-tap-highlight-color:transparent;}
.oo9gr5id{color:var(--primary-text);}
.ot9fgl3s{transition-timing-function:var(--fds-animation-fade-out);}
.owwhemhu{max-width:inherit;}
.owycx6da{flex-wrap:nowrap;}
.oygrvhab{margin-bottom:0;}
.p86d2i9g{border-top-right-radius:6px;}
.pfnyh3mw{flex-shrink:0;}
.ph5uu5jm{padding-right:4px;}
.pk4s997a{flex-shrink:inherit;}
.pmk7jnqg{position:absolute;}
.ptc67a42{min-width:50%;}
.pw54ja7n{border-top-right-radius:8px;}
.pybr56ya{padding-top:12px;}
.pzggbiyp{vertical-align:bottom;}
.q3lfd5jv{flex-grow:inherit;}
.q9uorilb{display:inline-block;}
.qowsmv63{max-height:inherit;}
.qs9ysxi8{border-bottom-right-radius:inherit;}
.qt6c0cv9{padding-bottom:0;}
.qv66sw1b{word-break:break-word;}
.qzhwtbm6{margin-bottom:5px;}
.rj1gh0hx{flex-basis:0px;}
.rj84mg9z{cursor:not-allowed;}
.rl04r1d5{margin-left:-4px;}
.rnr61an3{background-color:var(--hover-overlay);}
.rq0escxv{box-sizing:border-box;}
.rz4wbd8a{padding-right:0;}
.s1i5eluu{background-color:var(--primary-button-background);}
.s6kb5r3f{stroke-width:2;}
.scb9dxdr{padding-left:8px;}
.scwd0bx6{margin-bottom:-2px;}
.stjgntxs{overflow-y:hidden;}
.t1p8iaqh{flex-basis:inherit;}
.taijpn5t{justify-content:center;}
.tdjehn4e{background-color:var(--secondary-button-background);}
.tgvbjcpo{min-height:0;}
.tojvnm2t{align-content:inherit;}
.tv7at329{height:36px;}
.tvfksri0{margin-right:12px;}
.tw6a2znq{padding-left:12px;}
.ue3kfks5{border-top-left-radius:8px;}
.uo3d90p7{border-bottom-right-radius:8px;}
.aigsh9s9::before{height:0;}
.c8b282yb::after{height:0;}
.d9wwppkn::before{margin-top:-4px;}
.fe6kdd0r::after{content:"";}
.hrzyx87i::after{margin-bottom:-5px;}
.iv3no6db::after{margin-bottom:-4px;}
.keod5gw0::before{content:"";}
.mau55g9w::after{display:block;}
.nxhoafnm::before{display:block;}
.tia6h79c::before{margin-top:-3px;}
.p8dawk7l:hover{text-decoration:none;}
a{color:#385898;cursor:pointer;text-decoration:none;}
a:hover{text-decoration:underline;}
*::-webkit-input-placeholder{color:#606770;}
*:focus::-webkit-input-placeholder{color:#bec3c9;}
@media (prefers-reduced-motion: reduce){
._6s5d :not(.always-enable-animations){animation-duration:0!important;animation-name:none!important;transition-duration:0!important;transition-property:none!important;}
}
._8ykn :not(.always-enable-animations){animation-duration:0!important;animation-name:none!important;transition-duration:0!important;transition-property:none!important;}
    </style>
    
<article class="container">
  <div class="row">
    <!-------------------------------------------------------------------------------------------------->
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">

          <div class="inbox_chat">
            <div class="chat_list">
<!----------------------------Solicitudes enviadas-------------------------------------------------------->
            <?php 
            //SELECT COUNT(*) FROM friends WHERE friend_request='0';
            //    $db->debug();
 
      //$idVar3 = $_SESSION['usuario']->idmembers;
      $friends->getCountAll("friend_request = '1'");
      
      while ($row = $friends->next()) {
      //$member->getAll();
      //while ($row = $friends->next()) {
            
            ?>
                  <div class="headind_srche">
            <div class="recent_headinge">
                <h4><?php echo "$row->count(*);" ?> Friend requests</h4>
                <!--<h4> 71 Friend requests</h4>-->
            </div>

          </div>
          <?php } ?>

      <?php 
      
    
      //SELECT * FROM `friends` WHERE `my_id` != 1
      //`idmembers` = 3 AND `friend_request` = 1
      $db->debug();
 
      $idVar2 = $_SESSION['usuario']->idmembers;
      $friends->getWhere("idmembers = '{$idVar2}' AND friend_request = '1'");
      
      //while ($row = $friends->next()) {
      //$member->getAll();
      while ($row = $friends->next()) {
      ?>

<div>
    <form action="controllers/controller-friends.php" method="post">
        <input type="hidden" name="myid" value="<?= $idVar2 ?>"></input>
        <input type="hidden" name="id" value="<?= $row->idmembers ?>"></input>
        <input type="hidden" name="request" value="<?= $row->friend_request ?>"></input>
  <div data-visualcompletion="ignore-dynamic" style="padding-left: 8px; padding-right: 8px;">
    <a class="oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 a8c37x1j mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi" href="" role="link" tabindex="0">
      <div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 nnctdnn4 hpfvmrgz qt6c0cv9 jb3vyjys l9j0dhe7 du4w35lb bp9cbjyn btwxx1t3 dflh9lhu scb9dxdr">
        <div class="nqmvxvec j83agx80 cbu4d94t tvfksri0 aov4n071 bi6gxh9e l9j0dhe7">
          <div class="q9uorilb l9j0dhe7 pzggbiyp du4w35lb">
            <svg aria-label="" class="pzggbiyp" data-visualcompletion="ignore-dynamic" role="img" style="height: 60px; width: 60px;">
              <mask id="jsc_c_kc">
                <circle cx="30" cy="30" fill="white" r="30">
                </circle>
              </mask>
              <g mask="url(#jsc_c_kc)">
                <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xlink:href="<?php echo "$row->image"; ?>" style="height: 60px; width: 60px;">

                </image>
                <circle class="mlqo0dh0 georvekb s6kb5r3f" cx="30" cy="30" r="30"></circle>
              </g>
            </svg>
          </div>
        </div>
        <div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb bp9cbjyn btwxx1t3 l9j0dhe7">
          <div class="bp9cbjyn ow4ym5g4 auili1gw rq0escxv j83agx80 btwxx1t3 buofh1pr g5gj957u i1fnvgqd mysgfdmx cxmmr5t8 hcukyx3x hddg9phg tgvbjcpo hpfvmrgz rz4wbd8a a8nywdso l9j0dhe7 du4w35lb rj1gh0hx pybr56ya f10w8fjw lhclo0ds">
            <div class="rq0escxv hkbzh7o3 buofh1pr g5gj957u d2edcug0 ptc67a42 iuny7tx3 hv4rvrfc ipjc6fyt">
              <div class="j83agx80 cbu4d94t ew0dbk1b irj2b8pg">
                <div class="qzhwtbm6 knvmm38d">
                  <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb hrzyx87i jq4qci2q a3bd9o3v ekzkrbhg oo9gr5id hzawbc8m" dir="auto">
                    <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a jq4qci2q a3bd9o3v lrazzd5p oo9gr5id"><?php echo "$row->firstname", " ", "$row->lastname"; ?></span>

                    </span></span>
                </div>
                <div class="qzhwtbm6 knvmm38d">
                  <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db e9vueds3 j5wam9gi knj5qynh m9osqain hzawbc8m" dir="auto">
                    <div class="jwdofwj8 scwd0bx6">
                      <div class="k4urcfbm ggysqto6 j83agx80">
                        <span class="tojvnm2t a6sixzi8 abs2jz4q a8s20v7p t1p8iaqh k5wvi7nf q3lfd5jv pk4s997a bipmatt0 cebpdrjk qowsmv63 owwhemhu dp1hu0rb dhp61c6y iyyx5f41">
                          <div aria-labelledby="" class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l ni8dbmo4 stjgntxs ltmttdrg" role="button" tabindex="0">
                            <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a e9vueds3 j5wam9gi knj5qynh m9osqain"><?php echo "$row->country"; ?></span>
                          </div>
                        </span>
                      </div>
                    </div>
                  </span>
                </div>
              </div>
            </div>
            <div class="j83agx80 cbu4d94t a9txdygg fnu23jab buofh1pr iuny7tx3 ipjc6fyt">
              <div class="d2edcug0">
                <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw i1fnvgqd gs1a9yip lhclo0ds btwxx1t3 d1544ag0 tw6a2znq jb3vyjys dlv3wnog rl04r1d5 enqfppq2 muag1w35">
                  <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u d2edcug0 hpfvmrgz mg4g778l buofh1pr ph5uu5jm b3onmgus e5nlhep0 ecm0bbzt">
                    <div aria-label="Agregar" class="oajrlxb2 s1i5eluu gcieejh5 bn081pho humdl8nn izx4hr6d rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys d1544ag0 qt6c0cv9 tw6a2znq i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l beltcj47 p86d2i9g aot14ch1 kzx2olss cbu4d94t taijpn5t ni8dbmo4 stjgntxs k4urcfbm tv7at329" role="button" tabindex="0">
                      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t bp9cbjyn owycx6da btwxx1t3 c4xchbtz by2jbhx6">
                        <div class="rq0escxv l9j0dhe7 du4w35lb d2edcug0 hpfvmrgz j83agx80 j5wkysh0 hytbnt81">
                          <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb hrzyx87i jq4qci2q a3bd9o3v lrazzd5p bwm1u5wc" dir="auto">
                              <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><input type="submit" class="btn btn-primary" value="Confirm"></form></span></span>
                        </div>
                      </div>
                      <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div>
                    </div>
                  </div>
         
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div>
    </a>
  </div>

</div>
      <?php } ?>                                                                                                                
<!---------------------------fin solicitudes enviadas--------------------------------------------------------->


<!--------------------------Personas que quizas conozcas---------------------------------------------------------->
              <div class="headind_srche">
            <div class="recent_headinge">
              <h4>People you might know</h4>
            </div>

          </div>
      <?php 
      
    
      //SELECT * FROM `friends` WHERE `my_id` != 1
      $db->debug();
 
      $idVar1 = $_SESSION['usuario']->idmembers;
      $friends->getWhere("my_id != '{$idVar1}' AND friend_request = '0'");
      while ($row = $friends->next()) {
          
      //$member->getAll();
      //while ($row = $member->next()) {
      ?>

<div>
    <form action="controllers/controller-friends.php" method="post">
        <input type="hidden" name="myid" value="<?= $idVar1 ?>"></input>
        <input type="hidden" name="id" value="<?= $row->idmembers ?>"></input>
        <input type="hidden" name="request" value="<?= $row->friend_request ?>"></input>
  <div data-visualcompletion="ignore-dynamic" style="padding-left: 8px; padding-right: 8px;">
    <a class="oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 a8c37x1j mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi" href="" role="link" tabindex="0">
      <div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 nnctdnn4 hpfvmrgz qt6c0cv9 jb3vyjys l9j0dhe7 du4w35lb bp9cbjyn btwxx1t3 dflh9lhu scb9dxdr">
        <div class="nqmvxvec j83agx80 cbu4d94t tvfksri0 aov4n071 bi6gxh9e l9j0dhe7">
          <div class="q9uorilb l9j0dhe7 pzggbiyp du4w35lb">
            <svg aria-label="" class="pzggbiyp" data-visualcompletion="ignore-dynamic" role="img" style="height: 60px; width: 60px;">
              <mask id="jsc_c_kc">
                <circle cx="30" cy="30" fill="white" r="30">
                </circle>
              </mask>
              <g mask="url(#jsc_c_kc)">
                <image x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%" xlink:href="<?php echo "$row->image"; ?>" style="height: 60px; width: 60px;">

                </image>
                <circle class="mlqo0dh0 georvekb s6kb5r3f" cx="30" cy="30" r="30"></circle>
              </g>
            </svg>
          </div>
        </div>
        <div class="ow4ym5g4 auili1gw rq0escxv j83agx80 buofh1pr g5gj957u i1fnvgqd oygrvhab cxmmr5t8 hcukyx3x kvgmc6g5 tgvbjcpo hpfvmrgz qt6c0cv9 rz4wbd8a a8nywdso jb3vyjys du4w35lb bp9cbjyn btwxx1t3 l9j0dhe7">
          <div class="bp9cbjyn ow4ym5g4 auili1gw rq0escxv j83agx80 btwxx1t3 buofh1pr g5gj957u i1fnvgqd mysgfdmx cxmmr5t8 hcukyx3x hddg9phg tgvbjcpo hpfvmrgz rz4wbd8a a8nywdso l9j0dhe7 du4w35lb rj1gh0hx pybr56ya f10w8fjw lhclo0ds">
            <div class="rq0escxv hkbzh7o3 buofh1pr g5gj957u d2edcug0 ptc67a42 iuny7tx3 hv4rvrfc ipjc6fyt">
              <div class="j83agx80 cbu4d94t ew0dbk1b irj2b8pg">
                <div class="qzhwtbm6 knvmm38d">
                  <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb hrzyx87i jq4qci2q a3bd9o3v ekzkrbhg oo9gr5id hzawbc8m" dir="auto">
                    <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a jq4qci2q a3bd9o3v lrazzd5p oo9gr5id"><?php echo "$row->firstname", " ", "$row->lastname"; ?></span>

                    </span></span>
                </div>
                <div class="qzhwtbm6 knvmm38d">
                  <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db e9vueds3 j5wam9gi knj5qynh m9osqain hzawbc8m" dir="auto">
                    <div class="jwdofwj8 scwd0bx6">
                      <div class="k4urcfbm ggysqto6 j83agx80">
                        <span class="tojvnm2t a6sixzi8 abs2jz4q a8s20v7p t1p8iaqh k5wvi7nf q3lfd5jv pk4s997a bipmatt0 cebpdrjk qowsmv63 owwhemhu dp1hu0rb dhp61c6y iyyx5f41">
                          <div aria-labelledby="" class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l ni8dbmo4 stjgntxs ltmttdrg" role="button" tabindex="0">
                            <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a e9vueds3 j5wam9gi knj5qynh m9osqain"><?php echo "$row->country"; ?></span>
                          </div>
                        </span>
                      </div>
                    </div>
                  </span>
                </div>
              </div>
            </div>
            <div class="j83agx80 cbu4d94t a9txdygg fnu23jab buofh1pr iuny7tx3 ipjc6fyt">
              <div class="d2edcug0">
                <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw i1fnvgqd gs1a9yip lhclo0ds btwxx1t3 d1544ag0 tw6a2znq jb3vyjys dlv3wnog rl04r1d5 enqfppq2 muag1w35">
                  <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u d2edcug0 hpfvmrgz mg4g778l buofh1pr ph5uu5jm b3onmgus e5nlhep0 ecm0bbzt">
                    <div aria-label="Agregar" class="oajrlxb2 s1i5eluu gcieejh5 bn081pho humdl8nn izx4hr6d rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys d1544ag0 qt6c0cv9 tw6a2znq i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l beltcj47 p86d2i9g aot14ch1 kzx2olss cbu4d94t taijpn5t ni8dbmo4 stjgntxs k4urcfbm tv7at329" role="button" tabindex="0">
                      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t bp9cbjyn owycx6da btwxx1t3 c4xchbtz by2jbhx6">
                        <div class="rq0escxv l9j0dhe7 du4w35lb d2edcug0 hpfvmrgz j83agx80 j5wkysh0 hytbnt81">
                          <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb hrzyx87i jq4qci2q a3bd9o3v lrazzd5p bwm1u5wc" dir="auto">
                              <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><input type="submit" class="btn btn-primary" value="Add"></form></span></span>
                        </div>
                      </div>
                      <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div>
                    </div>
                  </div>
         
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div>
    </a>
  </div>

</div>
      <?php } ?>                                                                                                                
<!--------------------------fin personas que quizas conozcas---------------------------------------------------------->
            </div>
           
          </div>
        </div>

        <!---------------------------------------------------------------------------->
        <div class="mesgs">
                
    <!------------------------------------------------------------------------------------------>
    <article class="container">
        <form action="controllers/controller-friends.php" method="post">
  <div class="row">
      
      <?php 
      $db->debug();
      $idVar = $_SESSION['usuario']->idmembers;
      $friends->getWhere("my_id='{$idVar}' AND friend_request = '2'");
      
      while ($row = $friends->next()) {
          echo '<tr>';
      ?>
      
      <td><input type="hidden" name="idfirends1" value="<?= $row->idfirends  ?>"></input></td>
      
    <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
      <div class="">
        <a aria-hidden="true" class="oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 wkznzc2l oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l pioscnbf etr7akla" href="profile.html" role="link" tabindex="-1">
            <td><img height="80" width="80" alt="" class="ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi rq0escxv bixrwtb6" src="<?php echo "$row->image" ?>"></td>
          <span class="ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi rq0escxv bixrwtb6 i09qtzwb n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 oaz4zybt"></span>
          <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s" data-visualcompletion="ignore">
          </div>
        </a>
      </div>

      <div class="buofh1pr hv4rvrfc">
        <div class="">
          <a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 gpro0wi8" href="profile.html" role="link" tabindex="0">
              <td><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db a5q79mjw g1cxx5fr lrazzd5p oo9gr5id" dir="auto"><?php echo "$row->firstname", " ", "$row->lastname"; ?></span></td>
          </a>
        </div>

        <div class="aahdfvyu">
          <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db e9vueds3 j5wam9gi knj5qynh m9osqain" dir="auto">
            <div class="kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql">
                <td><div dir="auto" style="text-align: start;"><?php echo "$row->country"; ?></div></td>
            </div>
          </span>
        </div>
      </div>
      <!---/////////////////////////BOTON AMIGO//////////////////////////////////////////////////////-->
      <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw i1fnvgqd bp9cbjyn owycx6da btwxx1t3 b5q2rw42 lq239pai mysgfdmx hddg9phg">
        <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t pfnyh3mw d2edcug0 hpfvmrgz p8fzw8mz pcp91wgn iuny7tx3 ipjc6fyt">
          <div>
            <div aria-label="Amigos" class="oajrlxb2 tdjehn4e gcieejh5 bn081pho humdl8nn izx4hr6d rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys d1544ag0 qt6c0cv9 tw6a2znq i1ao9s8h esuyzwwr f1sip0of lzcic4wl l9j0dhe7 abiwlrkh p8dawk7l beltcj47 p86d2i9g aot14ch1 kzx2olss cbu4d94t taijpn5t ni8dbmo4 stjgntxs k4urcfbm tv7at329" role="button" tabindex="0">
              <div class="rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw taijpn5t bp9cbjyn owycx6da btwxx1t3 c4xchbtz by2jbhx6">
                <div class="rq0escxv l9j0dhe7 du4w35lb d2edcug0 hpfvmrgz j83agx80 j5wkysh0 hytbnt81">
                  <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d9wwppkn fe6kdd0r mau55g9w c8b282yb hrzyx87i jq4qci2q a3bd9o3v lrazzd5p oo9gr5id" dir="auto">
                      <!--<span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><a class="btn btn-primary">Friend</a></span>-->
                      <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5"><a href='<?= $row->idfirends ?>' data-toggle='modal' data-target='#deleteModal' class='linkborrar btn btn-danger'>Delete</a></span>
                  </span>
                </div>
              </div>
              <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s" data-visualcompletion="ignore"></div>
            </div>
          </div>
        </div>
      </div>
      <!---/////////////////////////BOTON AMIGO//////////////////////////////////////////////////////-->
    </div>
      </form>
      <?php echo '</tr>'; } ?>
      
    <!---------------------------------------------------------------------------------------------------------->
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Eliminate Friendship</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controllers/controller-friends.php" method="post" id="form2">
                            <div class="form-group">
                                <h3 class="text-danger">Are you sure to delete this friendship?</h3>
                                <input id="inpborrar" type="hidden" name="id">
                                <input type="hidden" name="request" value="2">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" form="form2">Remove</button>
                    </div>
                </div>
            </div>
        </div>
    <!------------------------------------------------------------------------------------------------------------------------>
  </div>
</article>
    <!------------------------------------------------------------------------------------------>

        </div>
      </div>
    </div>
    <!-------------------------------------------------------------------------------------------------->
  </div>
  </div>
  </div>
</article>
          
<!---------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------->


<?php include $templates_footer_adm ?>