<?php include("head.php");?> 



<style>

    .menu-paciente ul .sub-menu-paciente{

        border-bottom: 1px solid #000;

    }


    .item1 { 

        width: 41vw;

        grid-area: item1; 

        justify-self: center; 

        text-align: center;

        margin-bottom: 30px;

    }

    .item2 { grid-area: item2; }


    .item3 { grid-area: item3; }

    .item2, .item3{
        color: var(--white);
        
    }


    .form-home-agenda form {

    display: grid;

    grid-template-areas:

        'item1 item1'


        'item2 item3';

        justify-content: center;

        grid-gap: 43px;

        padding: 10px;

        }



    .form-home-agenda i{ font-size: 93px; color: var(--primary);padding-bottom: 25px; }
    .form-home-agenda a{color: var(--primary); text-decoration: none;}
    .form-home-agenda a:hover, .form-home-agenda i:hover {color: var(--primary-hover);}



   



    @media(max-width: 901px){



        



    }

</style>









    <section id="main">



    <?php include("menu-mobile.php")?> 

    

    <?php include("menu-paciente.php");?> 



        <div class="form-home-agenda font-libras">

            <form action="" method="post" >

                



                    <div class="item1">
                        <span class="font-libras">Ola, paciente?</span>  <br />
                        <span class="ptBR">Olá, paciente?</span>    <br />

                        <span class="font-libras">O que voce gostaria de agendar?</span>  <br />
                        <span class="ptBR">O que voçê gostaria de agendar?</span>                     

                    </div>         

                   

            

                    <div class="item2">   
                        <a href="consultas.php">
                            <i class="fas fa-file-signature"></i>  <br />
                            <span class="font-libras">Consultas</span>  <br />
                            <span class="ptBR">Consultas</span>
                        </a> 
                    </div>

                    <div class="item3">   
                        <a href="consultas.php">
                            <i class="fas fa-file-medical-alt"></i>  <br />
                            <span class="font-libras">Exames</span>  <br />
                            <span class="ptBR">Exames</span>
                        </a> 
                    </div>




                           

                        

            </form>

        </div>

            

           

          





       

        

       

    </section>





        

     

</body>

</html> 



