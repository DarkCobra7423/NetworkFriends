<?php
include "directorios.php";
include 'resources/class/class-connection.php';

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ERROR);

if (isset($_GET["page"])) {
    switch ($_GET['page']) {
        # pagina principal
        /*
        case 'nosotros':
            include 'views/home/nosotros.php';
            break;
        case 'contacto':
            include 'views/home/contacto.php';
            break;
         * 
         */
        case 'login':
            include 'views/home/start.php';
            break;
          
        # perfiles
        /*
        case 'alu-inicio':
            include 'views/user/alumno/alumnos.php';
            break;
        case 'pro-inicio':
            include 'views/user/profesor/profesor.php';
            break;
         * 
         */
        # administrador
        case 'adm-home':
            include 'views/user/administrador/home.php';
            break;
        case 'adm-message':
            include 'views/user/administrador/message.php';
            break;
        case 'adm-friends':
            include 'views/user/administrador/friends.php';
            break;
        case 'adm-profile':
            include 'views/user/administrador/profile.php';
            break;
        case 'adm-start':
            include 'views/home/start.php';
        break;
        
        
        ////._------------------------------------
        case 'adm-materia':
            include 'views/user/administrador/materia.php';
            break;
        case 'adm-materia-editar':
            include 'views/user/administrador/materia_editar.php';
            break;
        case 'adm-usuario':
            include 'views/user/administrador/usuario.php';
            break;
        case 'adm-departamentos':
            include 'views/user/administrador/departamento.php';
            break;
        case 'adm-departamento-editar':
            include 'views/user/administrador/departamento_editar.php';
            break;
        case 'adm-home':
            include 'views/user/administrador/home.php';
            break;
        case 'adm-mensaje':
            include 'views/user/administrador/mensaje.php';
            break;
        case 'adm-amigos':
            include 'views/user/administrador/amigos.php';
            break;
        case 'adm-miembros':
            include 'views/user/administrador/miembro.php';
            break;
        case 'adm-usuario-editar':
            include 'views/user/administrador/usuario_editar.php';
            break;

    }
} else {
    include 'views/home/start.php';//inicio.php
}
  //                                                   para=id             de=emisor               de=emisor        para=id      leido por ahora sera 0
//SELECT * FROM mensaje WHERE (`para`='"+id+"' OR `para`='"+emisor+"') AND (`de`='"+emisor+"' OR `de`='"+id+"') AND `leido`='0'
//SELECT * FROM `vw_friends` WHERE `my_id`=1
//SELECT * FROM mensaje WHERE (`para`='00000001' OR `para`='00000002') AND (`de`='00000002' OR `de`='00000001') AND `leido`='1'     CARGA EL HISTORIAL DE DOS PERSONAS
//System.out.println("SELECT * FROM mensaje WHERE (`para`='"+id+"' OR `para`='"+emisor+"') AND (`de`='"+emisor+"' OR `de`='"+id+"') AND `leido`='0'");

//SELECT * FROM message WHERE (`receiver_idmembers`='1' OR `receiver_idmembers`='2') AND (`sender_id`='2' OR `receiver_idmembers`='1')