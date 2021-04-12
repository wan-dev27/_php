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
        padding: 0;
        font-size: 14px;
    }
    form{
        background-color: brown;
        /* border: 1px solid black; */
    }
    ul li{
        list-style: none;
    }
    ul li input{
        font-size: 2em;
        padding: 10px;
        margin: 5px;
    }
    ul li select{
        font-size: 2em;
        color: blue;
        background-color: burlywood;
    }
    ul li button{
        font-size: 2em;
        padding: 5px;
    }
    </style>
</head>
<body>

    <form action="" method="post">
    <ul>
        <li>
            <input type="text" name="angka1" id="angka1" placeholder="Number 1">
        </li>
        <li>
            <input type="text" name="angka2" id="angka2" placeholder="Number 2">
        </li>

        <li>
            <select name="operasi" id="opt">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="multi">*</option>
                <option value="divide">/</option>
            </select>
            <button type="submit" name="submit">Result</button>
        </li>
        <li>
        <?php if(isset($_POST['submit'])): ?>
			<input type="text" value="<?php echo $angka3; ?>">
        <?php else: ?>
			<input type="text" value="0">
		<?php endif; ?>
        </li>
    </ul>
    </form>

</body>
</html>