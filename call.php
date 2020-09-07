<?php include("head.php");?>  

<style>
    .hide{
        background-color: black;
    }

    .chat{
        background-color: white;

        height: 200px;

    margin-left: 20px;

    margin-right: 20px;

    text-align: start;
    height: 300px;
    width: 470px; 
    margin-top: -50px;
    }

        *                               { margin: 0; padding: 0; }
    body                            { font: 12px "Lucida Grande", Sans-Serif;}
    h2                              { color: #fa9f00; font: 30px Helvetica, Sans-Serif; margin: 0 0 10px 0; }
    #page-wrap                      { width: 500px; margin: 30px auto; position: relative; }

    #chat-wrap                      { border: 1px solid #eee; margin: 0 0 15px 0; }
    #chat-area                      { height: 100px; overflow: auto; border: 1px solid #666; padding: 20px; background: white; width:1000px; margin-top:-40px;}
    #chat-area span                 { color: white; background: #333; padding: 4px 8px; -moz-border-radius: 5px; -webkit-border-radius: 8px; margin: 0 5px 0 0; }
    #chat-area p                    { padding: 8px 0; border-bottom: 1px solid #ccc; }

    #name-area                      { position: absolute; top: 12px; right: 0; color: white; font: bold 12px "Lucida Grande", Sans-Serif; text-align: right; }   
    #name-area span                 { color: #fa9f00; }

    #send-message-area p            { float: left; color: white; padding-top: 27px; font-size: 14px; }
    #sendie                         { border: 3px solid #999; width: 200px; padding: 10px; font: 12px "Lucida Grande", Sans-Serif; float: right; }


    
</style>


    <!-- 

         end header 

                    -->


        <section id="main">



                        <div class="blocks"> 

                            <div class="block">

                                <div class="block-box">

                                    <!--img src="" alt=""><i class="far fa-user-circle"></i--> 
                                    <iframe src="addres" style="border:0px #ffffff none; margin-left:20px;" name="Jitsi" 
                                        scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="300px" width="450px" 
                                        allowfullscreen allow='camera; microphone' id=address>
                                    </iframe>             

                                    <span class="font-libras">Dr. </span>

                                    <span class="ptBR">Dr</span>        

                                </div>

                            </div>

                            <div class="block">

                                <div class="block-box">
    
                                    <div id="output" class="hide ptBRLegend"></div>
                                </div>

                            </div>

                            <script type="text/javascript">
    
    // ask user for name with popup prompt    
    var name = prompt("Como deseja ser chamado?", "Paciente");
    
    // default name is 'Guest'
    if (!name || name === ' ') {
       name = "Paciente";	
    }
    
    // strip tags
    name = name.replace(/(<([^>]+)>)/ig,"");
    
    // display name on page
    $("#name-area").html("<span" +"class="+"ptBR"+">" + name + "</span>");
  
    
    // kick off chat
    var chat =  new Chat();
    $(function() {
    
         chat.getState(); 
         
         // watch textarea for key presses
         $("#sendie").keydown(function(event) {  
         
             var key = event.which;  
       
             //all keys including return.  
             if (key >= 33) {
               
                 var maxLength = $(this).attr("maxlength");  
                 var length = this.value.length;  
                 
                 // don't allow new content if length is maxed out
                 if (length >= maxLength) {  
                     event.preventDefault();  
                 }  
              }  
                                                                                                                                                                                                         });
         // watch textarea for release of key press
         $('#sendie').keyup(function(e) {	
                              
              if (e.keyCode == 13) { 
              
                var text = $(this).val();
                var maxLength = $(this).attr("maxlength");  
                var length = text.length; 
                 
                // send 
                if (length <= maxLength + 1) { 
                 
                    chat.send(text, name);	
                    $(this).val("");
                    
                } else {
                
                    $(this).val(text.substring(0, maxLength));
                    
                }	
                
                
              }
         });
        
    });
</script>

 <body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap" class="ptBR">
        
        <p id="name-area" class="ptBR"></p> 
        
        <div class="ptBR" id="chat-wrap"><div class="ptBR" id="chat-area"></div></div>
            
            <form class="ptBR" id="send-message-area">
                <p class="ptBR" style="padding-top: 3px;">Digite sua mensagem: </p>
                <textarea class="ptBR" id="sendie" maxlength = '100'></textarea>
            </form>
        
        </div>
     </div>
                    

</section>
                    
		<script src="call.js"></script> 
        <script src="chat.js"></script>
    </body>
</html>