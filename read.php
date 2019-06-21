<?php 

require 'header.php';
require 'connection.php';

?>

<?php 

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("Location:index.php");
    exit;
}

$sorgu = $pdo->prepare('SELECT * FROM idontknow WHERE id = ?');
$sorgu->execute([
    $_GET['id']
]);
$sql = 'SELECT * FROM idontknow';
$q = $pdo->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
if(!$ders){
    header('Location:index.php');
    exit;
}
?>
<hr>
<h3>
<?php echo($q['username']);?>
<?php echo($q['password']);?>
<?php echo($q['email']);?>
</h3>
