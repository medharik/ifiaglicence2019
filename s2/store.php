<?php 
//recuperer les valeurs depuis le form(post)
//insert into users(email,passe)
//values(?,?)
$table="users";
//print_r($_POST);

$email=$_POST['email'];
$passe=$_POST['passe'];

function to_intero ($v){
return '?';
}

//debut
//$_POST=array('email'=>'test@gmail.com','passe'=>123);
$cles=array_keys($_POST);//donne array('email','passe');//=> email,passe
$keys=join($cles,',');
$intro=join(array_map('to_intero',$cles),',');
//var_dump($i);
//echo "<br>$keys<br>"; 


$sql="insert into $table ($keys)  values($intro)";
//echo $sql;
//fin
$pdo=new PDO("mysql:host=localhost;dbname=dbifiag","root","");
$r=$pdo->prepare($sql);
$r->execute(array_values($_POST));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
