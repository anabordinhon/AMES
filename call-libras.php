<!DOCTYPE html>
<script src="jquery-1.6.1.min.js"></script>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TeleConsulta - Paciente com auxilio de Interprete de Libras</title>  

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,600;1,200;1,700;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;1,900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/573f819128.js" crossorigin="anonymous"></script> 

    <link rel="stylesheet" href="styles/globalStyles.css">

    <link rel="stylesheet" href="styles/call.css"> 

    <!-- <link rel="stylesheet" href="styles/agendamento.css"> -->

</head>

<body>



    <!-- 

         start header 

                    -->

 

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

                    <a href="#"><i class="far fa-user-circle"></i></a>



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

            

                <div class="row menu-right-bottom suport"> 

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

    <!-- 

         end header 

                    -->


                    <section id="main">



                        <div class="blocks"> 

                            <div class="block">

                                <div class="block-box">

                                    <!--img src="" alt=""><i class="far fa-user-circle"></i--> 
                                    <iframe src="addres" style="border:0px #ffffff none;" name="Jitsi" 
                                        scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="300px" width="450px" 
                                        allowfullscreen allow='camera; microphone' id=address>
                                    </iframe>             

                                    <span class="font-libras">Dr. </span>

                                    <span class="ptBR">Dr</span>        

                                </div>

                            </div>

                            <div class="block">

                                <div class="block-box">

                                    <!--img src="" alt=""><i class="far fa-user-circle"></i--> 
                                    <iframe src="address-interprete" style="border:0px #ffffff none;" name="Jitsi" 
                                        scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="300px" width="450px" 
                                        allowfullscreen allow='camera; microphone' id=address-interprete>
                                    </iframe>             

                                    <span class="font-libras">Interprete </span>

                                    <span class="ptBR">Intérprete</span>        

                                </div>

                            </div>

                        </div>

                    </section>
                    
		<script src="call-libras.js"></script> 
    </body>
</html>