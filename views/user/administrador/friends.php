<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
}
?>
<?php include $base_dir . "/models/model-friends.php";?>
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
  <div class="row">
      
      <?php 
      $db->debug();
      $idVar = $_SESSION['usuario']->idmembers;
      $friends->getWhere("my_id='{$idVar}'");
      while ($row = $friends->next()) {
      ?>

    <div class="bp9cbjyn ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi n1f8r23x rq0escxv j83agx80 bi6gxh9e discj3wi hv4rvrfc ihqw7lf3 dati1w0a gfomwglr">
      <div class="">
        <a aria-hidden="true" class="oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 wkznzc2l oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l pioscnbf etr7akla" href="profile.html" role="link" tabindex="-1">
            <img height="80" width="80" alt="" class="ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi rq0escxv bixrwtb6" src="<?php echo "$row->image" ?>">
          <span class="ue3kfks5 pw54ja7n uo3d90p7 l82x9zwi rq0escxv bixrwtb6 i09qtzwb n7fi1qx3 pmk7jnqg j9ispegn kr520xx4 oaz4zybt"></span>
          <div class="n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s" data-visualcompletion="ignore">
          </div>
        </a>
      </div>

      <div class="buofh1pr hv4rvrfc">
        <div class="">
          <a class="oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl gmql0nx0 gpro0wi8" href="profile.html" role="link" tabindex="0">
              <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db a5q79mjw g1cxx5fr lrazzd5p oo9gr5id" dir="auto"><?php echo "$row->firstname", " ", "$row->lastname"; ?></span>
          </a>
        </div>

        <div class="aahdfvyu">
          <span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql gk29lw5a a8c37x1j keod5gw0 nxhoafnm aigsh9s9 tia6h79c fe6kdd0r mau55g9w c8b282yb iv3no6db e9vueds3 j5wam9gi knj5qynh m9osqain" dir="auto">
            <div class="kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql">
                <div dir="auto" style="text-align: start;"><?php echo "$row->country"; ?></div>
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
                    <span class="a8c37x1j ni8dbmo4 stjgntxs l9j0dhe7 ltmttdrg g0qnabr5">Friend</span>
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
      <?php } ?>
    <!---------------------------------------------------------------------------------------------------------->

    
    <!------------------------------------------------------------------------------------------------------------------------>
  </div>
</article>
    <!------------------------------------------------------------------------------------------>

<?php include $templates_footer_adm ?>