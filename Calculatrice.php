<?php
session_start();

/**
 *  4 var of session one for operation second for first number third for second number and fourth for testing  like mock up
 */

function QuickCalucle($nbr1,$operation,$nbr2)
{
	switch ($operation) {
		case '+':
		$result = $nbr1+$nbr2;
			break;
		case '-':
		$result = $nbr1-$nbr2;
			break;
		case '*':
		$result = $nbr1*$nbr2;
			break;
		case '/':
			if ($nbr1!=0 and $nbr2!=0) {
				$result = $nbr1/$nbr2;
			}else
				echo "error syntax";
			break;
	}

	return $result;
}


	if (!isset($_SESSION["nbr1"]))
		$_SESSION["nbr1"]="";
	if (!isset($_SESSION["operation"]))
		$_SESSION["operation"]="=";
	if (!isset($_SESSION["nbr2"]))
		$_SESSION["nbr2"]= 0;
	if (!isset($_SESSION['calcul']))
		$_SESSION['calcul']=false;


	if (isset($_POST['num'])) {
		$num = $_POST['num'];
	}else
		$num='';

	switch ($num) {

			case 'Clear':
					session_destroy();
					$_SESSION['nbr1']="";
				break;

			case '0':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '1':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '2':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '3':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '4':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '5':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '6':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '7':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '8':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '9':
				if ($_SESSION['calcul']) {
					$_SESSION['nbr1']=$num;
					$_SESSION['calcul'] = false;
				}else
					$_SESSION['nbr1']= $_SESSION['nbr1'].$num;
				break;

			case '.':
				$_SESSION['nbr1'] .= $num;
				break;

			case '=':
				$_SESSION["nbr1"]=QuickCalucle($_SESSION["nbr2"],$_SESSION["operation"],$_SESSION["nbr1"]);
				$_SESSION['calcul'] = true;
				break;

			case '+':
				$_SESSION['operation'] = "+";
				$_SESSION['nbr2']= $_SESSION['nbr1'];
				$_SESSION['calcul'] = true;
				break;

			case '-':
				$_SESSION['operation'] = "-";
				$_SESSION['nbr2']= $_SESSION['nbr1'];
				$_SESSION['calcul'] = true;
				break;

			case '*':
				$_SESSION['operation'] = "*";
				$_SESSION['nbr2']= $_SESSION['nbr1'];
				$_SESSION['calcul'] = true;
				break;

			case '/':
				$_SESSION['operation'] = "/";
				$_SESSION['nbr2']= $_SESSION['nbr1'];
				$_SESSION['calcul'] = true;
				break;

		}

?>
<html>
<head>
	<title>Calculatrice</title>
	<!-- bootstrap.min.css -->
	<link rel="stylesheet" type="text/css" href="../../biblio/bootstrap.min.css">
	<style type="text/css">
		 body{
			 background: #E8E0E8;
			 margin:0 auto;
			 padding: 0;
			 font-family: helvetica,sans-serif;
		}
		#box{
			position: relative;
			top: 50px;
			left: 25%;
			width: 50%;
			background: white;
			border-radius: 10px;
			padding:20px 50px;
		}
		.bg-success,.bg-danger,.bg-info,.bg-primary,.br-error,.bg-warning{
			padding:10px;
			text-align: center;
			border-radius: 10px;
		}
		table{border-collapse:collapse}
		::-webkit-scrollbar {
			width: 12px;
		}
		::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
			border-radius: 10px;
		}
		::-webkit-scrollbar-thumb {
			border-radius: 10px;
			-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
		}
		table{
			width:80%;
			margin: auto;
			padding:0;
		}
		input[type=text],.btn{
			height: 60px;
			font-size: 1.3em;
		}
		.btn{
			width: 80px;
		}
		.btn-danger{
			width: 100%;
		}
		td{
			padding: 5px 10px;
		}
		.calcul{
			border: 1px solid rgba(0,0,0,.2);
			padding: 20px 0px;
			border-radius: 6px;
			background: #F0EBEB;
			width: 90%;
			margin: auto;
		}
	</style>
</head>
<body>
<div id="box">
	<div class="calcul">
		<table border="0" >
		<tr height="50">
			<td colspan="5" align="center" ><input type='text' placeholder='Result' name='text' value="<?= $_SESSION["nbr1"]; ?>" disabled class="form-control">
		</tr>
		<form  method="post">
		<tr>

		    <td colspan="4" align="center" > <input type="submit" name="num" value="Clear" class="btn btn-danger"></td></tr>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="7"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="8"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="9"></td>
			<td align="center"> <input type="submit" name="num" value="+" id='op' class="btn btn-success"></td>
		</tr>
		<tr>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="4"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="5"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="6"></td>
			<td align="center"> <input type="submit" name="num" value="-" id='op' class="btn btn-success"></td>
		</tr>
		<tr>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="1"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="2"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="3"></td>
			<td align="center"> <input type="submit" name="num" value="*" id='op' class="btn btn-success"></td>
		</tr>
		<tr>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="0"></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="."></td>
			<td align="center"> <input type="submit" name="num" class="btn btn-primary" value="="></td>
			<td align="center"> <input type="submit" name="num" value="/" id='op' class="btn btn-success"></td>
		</tr>
		<tr>

		</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>
