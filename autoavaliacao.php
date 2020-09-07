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


    .form-autoavaliacao form {

        display: grid;


        justify-content: center;

        grid-gap: 43px;

        padding: 10px;

        }



    .form-autoavaliacao i{ font-size: 93px; color: var(--white); padding-bottom: 30px;}
    .form-autoavaliacao a{color: color: var(--white); text-decoration: none;}

    .form-autoavaliacao input{

        width: 61vw;

        padding: 9px 0;

        border-radius: 3px;

        border: navajowhite;

        box-shadow: 0px 2px 4px 0px #a0a0a0;

    }



   



    @media(max-width: 901px){



        



    }

</style>









    <section id="main">



    <?php include("menu-mobile.php")?> 

    

    <?php include("menu-paciente.php");?> 



        <div class="form-autoavaliacao font-libras">

            <form action="" method="post" >

                



                    <div class="">
                        <span class="font-libras">Autoavaliacao</span>  <br />
                        <span class="ptBR">Autoavaliação</span>    <br />
                    </div>         

                   
                    <!-- 
                    <div class="">
                        <input type="text" name="name"> <br />    
                        <label class="font-libras" for="name">Nome</label>   
                        <span class="ptBR">Nome</span>   
                    </div>-->

                    
                    <div class="">
                        <input type="text" name="name"> <br />  
                    </div>
                    <div class="">
                        <input type="text" name="name"> <br />  
                    </div>
                    <div class="">
                        <input type="text" name="name"> <br />  
                    </div>
                    <div class="">
                        <input type="text" name="name"> <br />  
                    </div>
                    <div class="">
                        <input type="text" name="name"> <br />  
                    </div>

                    <div>
                    <a class="btn-sucesso" href="consultas-agendadas">Salvar</a> <br />
                        <span class="ptBR">Salvar</span>
                    </div>  




                           

                        

            </form>

        </div>

            

           

          





       

        

       

    </section>





        

     

</body>

</html> 



