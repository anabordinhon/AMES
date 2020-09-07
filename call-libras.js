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
 document.getElementById("address-interprete").setAttribute("src","https://meet.jit.si/" + addres);


