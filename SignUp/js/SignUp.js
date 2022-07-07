$(document).ready(function(){


$("#SignUpForm").submit(function(e){
    e.preventDefault();
    const $form = $(this);
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize();
    console.log(serijalizacija);
    
    req=$.ajax({
        url: 'SignUp.php',
        type: 'POST',
        data:serijalizacija,
       
    });
  
   req.done(function(res,textStatus,responseXML){
       if(res==1){
        window.location.replace("http://localhost/ItehDomaci/Domaci1/Login/")

       }else {
           alert("Neuspesno");
       }
   });
    
});
});