var idPromene=0;
function DeleteClicked(id) {

    req=$.ajax({
        url: 'DeleteGrad.php',
        type: 'POST',
        data:{'id':id},
       
    });
    req.done(function(r){
        $('#Content').html(r);
    })
}

function UpdateClicked(id,cena,idDrzave,ime){
   
    $(".ime").val(ime);
    $(".cena").val(cena);
    $(".combobox").get(0).selectedIndex = idDrzave-1;
    $(".save").addClass("UpdateMe");
    idPromene=id;
    
    showDialog();
 
   
}
function Resolve(){
  
    
    if ($(".save").hasClass("UpdateMe")) {
        UpdateItem();
      }
      else{
          AddItem();
      }
}
function UpdateItem(){
    const $form = $("#form");
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize() + "&id="+idPromene ;
    //ovo je dialog save dugme on radi add ali hocemo da namestimo da radi add ili update
 
    req=$.ajax({
        url: 'UpdateGrad.php',
        type: 'POST',
        data:serijalizacija,
       
    });
   
    
    req.done(function(r){
          
        $('#Content').html(r);
        CloseDialog();
    })
  
}
function AddItem(){
    const $form = $("#form");
    
    const $inputs = $form.find('input, select, button, textarea');
    const serijalizacija = $form.serialize();
    
    
    req=$.ajax({
        url: 'SaveGrad.php',
        type: 'POST',
        data:serijalizacija,
       
    });
    req.done(function(r){
        $('#Content').html(r);
        CloseDialog();
    })
   
    
    
}


$(document).ready(function(){

    getAllData();

    function getAllData(){
      let text="";
        req=$.ajax({
            url: 'SearchGrad.php',
            type: 'POST',
            data:{'SearchText':text},
           
        });
        req.done(function(r){
            $('#Content').html(r);
    
        })
    }

  
    $('#searchText').on('input',function(e){
    let text=$('#searchText').val();
    req=$.ajax({
        url: 'SearchGrad.php',
        type: 'POST',
        data:{'SearchText':text},
       
    });
    req.done(function(r){
        $('#Content').html(r);

    })
    });
    $(".addDugme").click(function(){
       
      
       
       
        $(".save").addClass("AddMe");
        showDialog();
       
    });
   
  
 

 

    $(".close").click(function(){ 
     

        CloseDialog();
    });
 
  
   
});
function showDialog(){
       
    $(".Container").addClass("active");
  $(".bcg").addClass("active");
 }
 function CloseDialog(){
    $(".ime").val("");
    $(".cena").val(0);
    $(".combobox").get(0).selectedIndex = 0;  
    $(".Container").removeClass("active");
  $(".bcg").removeClass("active");
  $(".save").removeClass("UpdateMe");
  $(".save").removeClass("UpdateMe");

 }

/* */