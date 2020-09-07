<?php include("head.php");?> 



<style>



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
        padding: 31px 0px;
        background: var(--primary);
        border-radius: 10px;
    }


    .form-agendamento-sucesso form {

        display: grid;


        justify-content: center;

        grid-gap: 43px;

        padding: 10px;

        }



    .form-agendamento-sucesso i{ font-size: 93px; color: var(--white); padding-bottom: 30px;}
    .form-agendamento-sucesso a{color: var(--white); text-decoration: none;}

    .form-agendamento-sucesso input{

        width: 61vw;

        padding: 9px 0;

        border-radius: 3px;

        border: navajowhite;

        box-shadow: 0px 2px 4px 0px #a0a0a0;

    }
/*
    .btn-sucesso{
            color: var(--white);        
            padding: 10px;
            background: var(--primary);
            
            border-radius: 24px;
            font-size: 30px;
            text-decoration: none;
        }
    .btn-sucesso:hover{background: var(--primary-hover); }
    */
    



</style>









    <section id="main">



    <?php include("menu-mobile.php")?> 

    

    <?php include("menu-paciente.php");?> 



        <div class="form-agendamento-sucesso font-libras">

            <form action="" method="post" >

                
                <div></div>

       

                   
                   
                    <div class="">
                           
                        <label class="font-libras" for="name">Agendamento feito com sucesso!</label>   <br />
                        <span class="ptBR">Agendamento feito com sucesso</span>   
                    </div>

                    
                    

                    <div>
                       <a class="btn-sucesso" href="consultas-agendadas.php"> Ver consultas</a> <br />
                        <span class="ptBR">Ver consultas</span>
                    </div>  




                           

                        

            </form>

        </div>

            

           

          





       

        

       

    </section>





        

     

</body>

</html> 



