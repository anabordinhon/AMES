$(document).ready(function() {
    runSpeechRecognition();
 });


 function runSpeechRecognition() {
     var output = document.getElementById("output");
     var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
     var recognition = new SpeechRecognition();
     recognition.lang = "pt-BR";
     recognition.onstart = function() {
     };
     
     recognition.onend = function(){
         recognition.start();
     };
   
     recognition.onresult = function(event) {
         var transcript = event.results[0][0].transcript;
         output.innerHTML = transcript ;
         output.classList.remove("hide");
     };
   
      recognition.start();
 }


 function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
       result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
 }

 var addres = makeid(20);

 document.getElementById("address").setAttribute("src","https://meet.jit.si/" + addres);


