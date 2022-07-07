<?php
require '../Data/ProductControler.php';
$productContorl=ProductControl::getInstance();
$productContorl->getAllDrzave();
$result=$productContorl->res;
$drzave=$productContorl->drzave;
?>

<!DOCTYPE html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="js/main.js"></script>
<link rel="stylesheet" href="styles/style.css">

<link rel="stylesheet" href="../dialog/style.css">
<link rel="stylesheet" href="styles/buttonStyle.css">
<link rel="stylesheet" href="styles/products.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="body">
    
<div class="headerBar">
    <form class="TopBar">
    <div class="form-group">
		<input type="text" name="searchTextField" class="form-control" id="searchText" placeholder="Name" required>
	</div>
    </form>

</div>
<div id="Section1">
    <button class="button addDugme" id="ButtonFunc" >Add</button>
  
</div>
<div class="bcg"></div>
<div id="parentContainer">

<div class="Container">
            
            <div id="Section1D">
                <form id="form">
                    <input id="text-field" name="Ime" type="text" class="form-control ime" placeholder="Ime" required>
                    <input id="text-field" name="Cena" type="number" class="form-control cena"  placeholder="Cena" required>
                    <select class="combobox" name="Drzave" id="text-field">
                    <?php while($r=$drzave->fetch_array()):?>
                        
                        <option  value=<?php echo $r['DrzavaID']; ?>><?php echo $r['Ime'];?></option>


                    <?php endwhile;?>
                    </select>
                </form>
            </div>
            <div id="Section2D">
                <button class="button save" onclick="Resolve()" id="ButtonFunc"  type="submit">Save</button>
                
                <button class="button close" id="ButtonFunc" >Close</button>

            </div>
</div>
</div>


<div id="Section2">
    <div id="Content">
    

</div>
</div>
</div>
</div>


</body>
</html>