<?php include("head.php");?> 


    <style>
        .consultas-agendadas .block-box{
            grid-template-columns: 55% 45% !important;
        }
        .consultas-agendadas .block-box .ptBR{
            padding-bottom: 17px;
        }
        .block-box span, .block-box button {
             text-align: center;
        }
        .block-box-items{
            justify-content: space-between;
            text-align: center;
        }
        .btn-historico{
            padding-bottom: 17px;
        }
        .time-hidde-desktop{
            display: none !important;
        }
        
        .menu-paciente ul .sub-menu-agendamento{
            border-bottom: 1px solid #000;
        }

        @media(max-width: 1381px){
            .blocks{
                grid-template-columns: 100%;
            }           
        }
        @media(max-width: 873px){
            .consultas-agendadas .block-box {
                grid-template-columns: 100% !important;
            }
            .time-hidde-mobile{
                display: none !important;
            }
            .time-hidde-desktop{
                display: block !important;
            }
        }

        /*config do botão chamada de vídeo*/
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;        
        }
        .dropdown-content a {
            color: black;
            padding: 12px 11px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        .dropdown button { 
            width: 213px;
            padding: 10px 5px;
            border-radius: 59px;
        }
        .dropdown { padding-bottom: 17px; }
    </style>



    <section id="main">

    <?php include("menu-mobile.php")?> 
    
    <?php include("menu-paciente.php");?> 

        <div class="block-head font-libras">
            <div class="">
                <form action="">
                    <label class="font-libras" for="type-modality">Consultas agendadas</label>                                
                    <br />
                    <span class="ptBR">Consultas agendadas</span>
                </form>             
            </div>
                    <!-- 
                    <div class="dropdown" style="text-align: center">
                        <button class="font-libras dropbtn">Chamada de video</button> <br />

                            <div class="dropdown-content">
                                <a class="font-libras" href="call-libras.php" target="_blank">Com interprete</a>
                                <span  class="ptBR">Com interprete</span>  
                                <a class="font-libras" href="call.php" target="_blank">Sem interprete</a>
                                <span  class="ptBR">Sem interprete</span>                         
                            </div>

                            <span  class="ptBR">Chamada de vídeo</span>  
                    </div>-->

            <div style="text-align: center">
                <button class="font-libras">Editar perfil</button> <br />
            <span  class="ptBR">Editar perfil</span>  
            </div>             
        </div>

       

        <div class="blocks"> 
            
                      
           
            <div class="block consultas-agendadas">
                <div class="block-box">
                    <div class=block-box-items> 
                        <div class="time-hidde-desktop">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>
                        <span class="font-libras">Oftamologista</span> 
                        <span class="ptBR">Oftamologista</span>
                        <span>15/09/2020</span> 
                        <span class="ptBR">15/09/2020</span>
                        <span class="font-libras">Sede Tucuruvi Tucuruvi</span> 
                        <span class="ptBR">Tucuruvi Tucuruvi</span>

                        <button class="font-libras">Autoavaliacao</button> 
                        <span class="ptBR">Autoavaliação</span>
                    </div>

                    <div class=block-box-items>
                        <div class="time-hidde-mobile">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>

                       
                        <div class="dropdown" style="text-align: center">
                             <button class="font-libras dropbtn">Chamada de video</button> <br />
                             <div class="dropdown-content">
                                <a class="font-libras" href="call-libras.php" target="_blank">Com interprete</a>
                                <span  class="ptBR">Com intérprete</span>  
                                <a class="font-libras" href="call.php" target="_blank">Sem interprete</a>
                                <span  class="ptBR">Sem intérprete</span>                         
                             </div>
                             <span  class="ptBR">Chamada de vídeo</span>  
                        </div>


                    </div>  


                </div>            
            </div>
            <div class="block consultas-agendadas">
                <div class="block-box">
                    <div class=block-box-items> 
                        <div class="time-hidde-desktop">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>
                        <span class="font-libras">Oftamologista</span> 
                        <span class="ptBR">Oftamologista</span>
                        <span>15/09/2020</span> 
                        <span class="ptBR">15/09/2020</span>
                        <span class="font-libras">Sede Tucuruvi Tucuruvi</span> 
                        <span class="ptBR">Tucuruvi Tucuruvi</span>

                        <button class="font-libras">Autoavaliacao</button> 
                        <span class="ptBR">Autoavaliação</span>
                    </div>

                    <div class=block-box-items>
                        <div class="time-hidde-mobile">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>

                        <div class="btn-historico">    
                            <button class="font-libras">Historico</button> <br />
                            <span class="ptBR btn-historico">Historico</span> 
                        </div>
                    </div>      
                </div>            
            </div>
            <div class="block consultas-agendadas">
                <div class="block-box">
                    <div class=block-box-items> 
                        <div class="time-hidde-desktop">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>
                        <span class="font-libras">Oftamologista</span> 
                        <span class="ptBR">Oftamologista</span>
                        <span>15/09/2020</span> 
                        <span class="ptBR">15/09/2020</span>
                        <span class="font-libras">Sede Tucuruvi Tucuruvi</span> 
                        <span class="ptBR">Tucuruvi Tucuruvi</span>

                        <button class="font-libras">Autoavaliacao</button> 
                        <span class="ptBR">Autoavaliação</span>
                    </div>

                    <div class=block-box-items>
                        <div class="time-hidde-mobile">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>

                        <div class="btn-historico">    
                            <button class="font-libras">Historico</button> <br />
                            <span class="ptBR btn-historico">Historico</span> 
                        </div>
                    </div>      
                </div>            
            </div>
            <div class="block consultas-agendadas">
                <div class="block-box">
                    <div class=block-box-items> 
                        <div class="time-hidde-desktop">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>
                        <span class="font-libras">Oftamologista</span> 
                        <span class="ptBR">Oftamologista</span>
                        <span>15/09/2020</span> 
                        <span class="ptBR">15/09/2020</span>
                        <span class="font-libras">Sede Tucuruvi Tucuruvi</span> 
                        <span class="ptBR">Tucuruvi Tucuruvi</span>

                        <button class="font-libras">Autoavaliacao</button> 
                        <span class="ptBR">Autoavaliação</span>
                    </div>

                    <div class=block-box-items>
                        <div class="time-hidde-mobile">
                            <button class="font-libras">08:00</button> <br />
                            <span class="ptBR">08:00</span>
                        </div>

                        <div class="btn-historico">    
                            <button class="font-libras">Historico</button> <br />
                            <span class="ptBR btn-historico">Historico</span> 
                        </div>
                    </div>      
                </div>            
            </div>
            


          





            
            
            



        </div> <!--fim blocks-->
        
       
    </section>


        
     
</body>
</html>

