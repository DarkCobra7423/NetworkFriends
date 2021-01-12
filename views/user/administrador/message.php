<?php
session_start();
if (!isset($_SESSION['usuario']) or $_SESSION['usuario']->IdTipoUsuario<>3) {
    header('location:?page=login');
}
?>
<?php include $base_dir . "/models/model-message.php";?>
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
    <article class="container">
  <div class="row">
    <!-------------------------------------------------------------------------------------------------->
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>

            <!----------Barra de buscar----------------->
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar" placeholder="Buscar" style="color: white">
                <!--
                                                <span class="input-group-addon">
                                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                </span> 
                                                -->
              </div>
            </div>
            <!--------------------------------------->

          </div>
          <div class="inbox_chat">
             
                    <?php 
                    
                    
                    $db->debug();
                    $idVar = $_SESSION['usuario']->idmembers;
                    $friends->getWhere("my_id='{$idVar}'");
                    while ($row = $friends->next()) { ?>
              
            <div class="chat_list ">    <!--active_chat-->
              <div class="chat_people">
                  <div class="chat_img"> <img src="<?php echo $row->image; ?>" alt="sunil" class="imgRedonda"> </div>
                <div class="chat_ib">
                  <h5><?php echo "$row->firstname", " ", "$row->lastname"; ?> <span class="chat_date">Dec 25</span></h5>
                  <p>This is the example of a message preview, I don't know what
                    else to write but I want the text to be a bit long.</p>
                </div>
              </div>
            </div>
              
              <?php } ?>

          </div>
        </div>

        <!---------------------------------------------------------------------------->
        
         <div class="mesgs">
         <div class="msg_history">
             
        <?php//SELECT * FROM vw_message WHERE (`receiver_idmembers`='1' OR `receiver_idmembers`='2') AND (`sender_id`='2' OR `sender_id`='1') ?>

            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="images/carlos.jpeg" alt="sunil" class="imgRedonda"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Hello, my name is Carlos Daniel Angel
                    Padilla, this is an example of the chat.</p>
                  <span class="time_date"> 11:01 AM | June 9</span>
                </div>
              </div>
            </div>
         
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Please test all the options so
                  that we can improve the final product.</p>
                <span class="time_date"> 11:01 AM | June 9</span>
              </div>
            </div>


          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>

        
      </div>
    </div>
    <!-------------------------------------------------------------------------------------------------->
  </div>
  </div>
  </div>
</article>
    <!------------------------------------------------------------------------------------------>

<?php include $templates_footer_adm ?>