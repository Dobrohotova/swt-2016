<?php 


switch ($_POST['op']) {
	case 'plus':
		echo $_POST['a'] + $_POST['b'];
	break;
	case 'minus':
		echo $_POST['a'] - $_POST['b'];
		break;
	case 'multiply':
		echo $_POST['a'] * $_POST['b'];
	break;
	case 'divide':
		echo $_POST['a'] / $_POST['b'];
	break;
	case 'module':
		echo $_POST['a'] % $_POST['b'];
	break;
}



?>