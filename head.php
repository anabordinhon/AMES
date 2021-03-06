<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vitall</title> 


    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon"/>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;1,200;1,700;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;1,900&display=swap" rel="stylesheet">

    

    <script src="https://kit.fontawesome.com/573f819128.js" crossorigin="anonymous"></script> 



    <!--scripts -->

    <script src="scripts/jquery-1.6.1.min.js"></script>

    <script type="text/javascript" src="chat.js"></script> 

    

    <!--styles -->

    <link rel="stylesheet" href="styles/globalStyles.css">

    <!-- <link rel="stylesheet" href="styles/call.css">   -->

</head>

<body>

<style>
     .perfil .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        padding: 5px;
        background: var(--primary);
        margin-left: -163px;
        margin-top: -5px;
    }

    .perfil .dropdown-content a {
        color: var(--white);
        padding: 12px 11px;
        text-decoration: none;
        display: block;
    }

    .perfil .dropdown-content a:hover {background-color: var(--primary-hover);}

    .perfil .dropdown:hover .dropdown-content {display: block;}

    .perfil .dropdown:hover .dropbtn {background-color: #3e8e41;}

    .perfil .dropdown {  padding-bottom: 0px;}



</style>



<main>

        <header>

            <div class="container">

                <div class="logo">

                    <a href="#">

                        <img src="assets/logo_head.png" alt="">

                    </a>

                </div>



                <div class="perfil">

                    <a href="#"><i class="far fa-bell"></i></a>

                    
                    <div class="dropdown" style="text-align: center">
                             <a class="font-libras dropbtn" href="#"><img src="./assets/profile05.png" alt=""></a>                             

                             <div class="dropdown-content">

                                <a class="font-libras" href="editar-perfil.php">Editar perfil</a>

                                <span  class="ptBR">Editar perfil</span>  

                                <a class="font-libras" href="login.php">Sair</a>

                                <span  class="ptBR">Sair</span>                         

                             </div>

                            

                        </div>



                </div>

            </div>

        </header>



        <div class="container" id="menu-left">

            <div id="sideBar">

                <div class="row menu-right-top">

                    <div class="menu">

                        

                            <ul>

                                <li><i class="fas fa-check-circle"></i> <a href="#">Paciente</a></li>

                                    <span class="ptBR">Paciente</span> 

                                    

                                

                                <li><i class="fas fa-check-circle"></i> <a href="#">Tipo de atendimento</a></li>

                                    <span class="ptBR">Tipo de atendimento</span>



                                <li><i class="fas fa-check-circle"></i> <a href="#">Especialidade</a></li>

                                    <span class="ptBR">Especialidade</span>



                                <li><i class="fas fa-check-circle"></i> <a href="#">Data</a></li>

                                    <span class="ptBR">Data</span>



                                <li><i class="fas fa-check-circle"></i> <a href="#">Unidade</a></li>

                                    <span class="ptBR">Unidade</span>



                                <li><i class="fas fa-check-circle"></i> <a href="#">Medico</a></li>

                                    <span class="ptBR">Médico</span>

                                <li id="border-hidde"></li> 

                            </ul>

                    </div>

                </div>

            

                <div class="row menu-right-bottom suport text-zoom"> 

                    <p>

                        <a class="font-libras" href="#"><i class="fas fa-headset"></i> Suporte </a>

                        <a class="ptBR" href="#"> Suporte </a>                                             

                    </p>

                    

                    <p>

                        <a class="font-libras" href="#">suporte@unimed.com</a> 

                        <a class="ptBR" href="#"> suporte@unimed.com </a>                             

                    </p>

                    

                    <p>

                        <a class="font-libras" href="#">+8801829193637</a>  

                        <a class="ptBR" href="#"> +8801829193637 </a>  

                                        

                    </p>

                    

                    <p>

                        <a class="font-libras" href="#">www.unimed.com </a>

                        <a class="ptBR" href="#"> www.unimed.com </a> 

                    </p>

                </div>

        

            </div>

        </div> 

    </main> 



 

   