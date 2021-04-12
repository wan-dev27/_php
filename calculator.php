<?php 
if (isset($_POST['submit'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
        case 'add':
            $angka3 = $angka1+$angka2;
            break;
        case 'sub':
			$angka3 = $angka1-$angka2;
		    break;
		case 'multi':
			$angka3 = $angka1*$angka2;
		    break;
		case 'divide':
			$angka3 = $angka1/$angka2;
			break;    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
    body{
        box-sizing: border-box;
        background: #F2F2F2;
	    font-family: sans-serif;
    }
    .calc{

        width: 335px;
        background: #2F495A;
        margin: 100px auto;
        padding: 10px 20px 50px 20px;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px #D1D1D1;
        
    }
    .numb{
        width: 300px;
        margin: 5px;
        border: none;
        font-size: 16pt;
        border-radius: 5px;
        padding: 10px;	
    }
    .opt{
        font-size: 16pt;
        border: none;
        width: 215px;
        margin: 5px;
        border-radius: 5px;
        padding: 10px;
    }
    .click{
        background: #EC5159;
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #eee;
        font-size: 15pt;
        border-bottom:4px solid #BF3D3D;
    }
    .brand{
        color: #eee;
        font-size: 11pt;
        float: right;
        text-decoration: none;
        margin: 12px;
    }
    .judul{
        text-align: center;
	    color: #eee;
	    font-weight: normal;
    }
    form{
        background-color: brown;
        border-radius: 5px;
        box-shadow: 0px 10px 20px 0px #D1D1D1;
    }
    
    </style>
</head>
<body>
<div class="calc">
    <h2 class="judul">CALCULATOR</h2>
    
        <form action="" method="post">

                    <input class="numb" type="text" name="angka1" id="angka1" placeholder="Number 1" autocomplete="off">
                    <input class="numb" type="text" name="angka2" id="angka2" placeholder="Number 2" autocomplete="off">
                
                    <select class="opt" name="operasi" id="opt">
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="multi">*</option>
                        <option value="divide">/</option>
                    </select>
                    <button class="click" type="submit" name="submit">Result</button>
                
                <?php if(isset($_POST['submit'])): ?>
                    <input class="numb" type="text" value="<?php echo $angka3; ?>">
                <?php else: ?>
                    <input class="numb" type="text" value="0">
                <?php endif; ?>
                
                
        </form>
        <a class="brand" href="https://github.com/wan-dev27/_php">copyright&copy;wan27</a>
    </div>
</body>
</html>