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

    .item4 { grid-area: item4; }

    .item5 { grid-area: item5; justify-self: end; } 

    .item6 { grid-area: item6; justify-self: center; } 
    





    .form-agend form {

    display: grid;

    grid-template-areas:

        'item1 item1'

        'item2 item2'

        'item3 item3'

        'item4 item5'

        'item6 item6';

        justify-content: center;

        grid-gap: 10px;

        padding: 10px;

        }



    .form-agend input{

        width: 100%;

        padding: 9px 0;

        border-radius: 3px;

        border: navajowhite;

        box-shadow: 0px 2px 4px 0px #a0a0a0;

    }



    .form-agend img{width: 110px; }


</style>









    <section id="main">



    <?php include("menu-mobile.php")?> 

    

    <?php include("menu-paciente.php");?> 



        <div class="form-agend font-libras">

            <form action="" method="post" >

                



                    <div class="item1">

                        <img src="assets/profile05.png" alt="">

                    </div>

                    

                    <div class="item2">

                        <input type="text" name="name"> <br />

                        <label class="font-libras" for="name">Nome</label>   

                        <span class="ptBR">Nome</span>   

                    </div>

            

                    <div class="item3">

                        <input type="email" name="email"> <br />

                        <label class="font-libras" for="email">Endereco</label>   

                        <span class="ptBR">Endereço</span>  

                    </div>

            

                    <div class="item4">                       

                            

                        <input class="two-column" type="type" name="" id=""> <br />

                        <label class="font-libras" for="senha">CPF</label>   

                        <span class="ptBR">CPF</span> 

                    </div>



                    <div class="item5">                        

                        <input class="two-column" type="type" name="" id=""><br />

                        <label class="font-libras" for="senha">Convenio</label>   

                        <span class="ptBR">Convênio</span> 

                    </div>

                    <div class="item6"> 
                    <a class="btn-sucesso" href="home.php"> Salvar</a> <br />
                        <span class="ptBR">Salvar</span>  
                    </div>

                           

                        

            </form>

        </div>

            

           

          





       

        

       

    </section>





        

     

</body>

</html> 



