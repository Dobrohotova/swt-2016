<?php 


// http://127.0.0.1/swt-2016/calc.php?a=4&b=8&op=plus



// $a = $_GET['a'];
// $b = $_GET['b'];
// $op = $_GET['op'];



switch ($_GET['op']) {
	case 'plus':
		echo $_GET['a'] + $_GET['b'];
	break;
	case 'minus':
		echo $_GET['a'] - $_GET['b'];
		break;
	case 'multiply':
		echo $_GET['a'] * $_GET['b'];
	break;
	case 'divide':
		echo $_GET['a'] / $_GET['b'];
	break;
	case 'module':
		echo $_GET['a'] % $_GET['b'];
	break;
}






 ?>