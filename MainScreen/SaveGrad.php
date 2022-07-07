<?php
require '../Data/ProductControler.php';
$GradName=$_POST['Ime'];
$GradCena=$_POST['Cena'];
$GradDrzavaID=$_POST['Drzave'];
$instanca=ProductControl::getInstance();
$instanca->insertGrad($GradName,$GradCena,$GradDrzavaID);
$instanca->searchData("");

$data="";


while($instanca->res!=null && $r=$instanca->res->fetch_array()){
    $data.='  
    <div class="card mx-auto col-md-3 col-10 mt-5"> 
    <img class="mx-auto img-thumbnail" src="resources/cityImg.jpg" width="600px" height="50%" />
    
    <div class="card-body text-center mx-auto">
        <div class="cvp">
            <h5 class="card-title font-weight-bold" id="TitleText">'.$r['ImeDrzave'] .'   , '.$r['ImeGrada'].'</h5>

            <p class="card-text">'.$r['Cena'] .' $  </p>
           
            <br>
            <div id="Buttons">
            <button class="button deleteDugme"  id="ButtonFunc" onclick="DeleteClicked( '.$r['GradID'].');" >Delete</button>
            <button class="button updateDugme"  id="ButtonFunc"  onclick=" UpdateClicked('.$r['GradID'].','.$r['Cena'].','.$r['DrzavaID'].',\''.$r['ImeGrada'].'\')">Update</button>
            </div>
        </div>
    </div>
</div>
    ';
    }
echo $data;