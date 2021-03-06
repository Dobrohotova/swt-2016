<?php 

$image_type = 'image/jpeg';
$image_size = 1024 * 1024 * 2;

$err = 0;

if (!isset($_POST['title']) || strlen(trim($_POST['title'])) == 0) {$err++;}
if (!isset($_POST['content']) || strlen(trim($_POST['content'])) == 0) {$err++;}
if (!isset($_POST['publish_date']) || strlen(trim($_POST['publish_date'])) == 0) {$err++;}
if (!isset($_POST['id_category']) || strlen(trim($_POST['id_category'])) == 0) {$err++;}

if(!isset($_FILES['image']) || $_FILES['image']['size'] > $image_size || $_FILES['image']['type'] != $image_type){
	$err++;
}

if($err == 0){
	$image_prefix = rand(1000000000, 9999999999);
	$image_path = 'uploads/';
	$image = $image_path.$image_prefix.$_FILES['image']['name'];

	$e = move_uploaded_file($_FILES['image']['tmp_name'], $image);

	if($e){
		$config = 'mysql:host=127.0.0.1;dbname=homework_db';
		$username = 'root';
		$password = 'root';
		$db = new PDO($config, $username, $password);

		$sql = 'insert into blogposts (title, content, publish_date, id_category, image) values (:title, :content, :publish_date, :id_category, :image)';
		$query = $db->prepare($sql);
		$query->bindValue(':title', $_POST['title']);
		$query->bindValue(':content', $_POST['content']);
		$query->bindValue(':publish_date', $_POST['publish_date']);
		$query->bindValue(':id_category', $_POST['id_category']);
		$query->bindValue(':image',$image);

		$query->execute();
	}

}

header('location: blogposts.php');

?>