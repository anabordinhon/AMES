

<style>

    .menu-paciente ul{

        display: flex;

        justify-content: space-evenly;

    }

    .menu-paciente ul li{

        list-style: none;

        display: flex;

        flex-direction: column;

        text-align: center;

    }

    



     .menu-paciente ul li a{

        font-size: 31px;

        text-decoration: none;

        color: var(--primary);

        transition: 0.5s;

    }

    .menu-paciente ul li a:hover{

        color: var(--primary-hover);        

    }



    .menu-border-bottom{

        border-bottom: 3px double #1e8b6f;    

        margin: 10px 8vw;

    }

    @media(max-width: 989px){

        .menu-paciente{

            display: none;

        }



    }

</style>

<nav class="menu-paciente">

    <ul>

        <li class="sub-menu-paciente"><a href="home.php">Paciente</a> 

            <span class="ptBR">Paciente</span></li>



        <li class="sub-menu-consulta"><a href="consultas.php">Consultas</a>

            <span class="ptBR">Consultas</span></li>



        <li class="sub-menu-agendamento"><a href="consultas-agendadas.php">Agendamento</a>

                <span class="ptBR">Agendamento</span></li>



        <li class="sub-menu-forma-de-pagamento"><a href="#">Forma de Pagamento</a>

            <span class="ptBR">Forma de Pagamento</span></li>

    </ul>

    <div class="menu-border-bottom"></div>

</nav>