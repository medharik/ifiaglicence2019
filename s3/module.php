<?php
require_once ("constantes.php"); 
function connecter_db(){
 try{

 $cnx=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER,PWD);
 $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
 return $cnx; 
 }catch(PDOException $e){
die( "erreur de connexion ".$e->getMessage());
 }
   

}

//ajout
function store($libelle,$prix,$qte_stock){
$cnx=connecter_db();
$rp=$cnx->prepare("insert into produits (libelle,prix,qte_stock) 
values(?,?,?)
");
$rp->execute(array($libelle,$prix,$qte_stock));

}
//modifier
function update($libelle,$prix,$qte_stock,$id){

    $cnx=connecter_db();
    $rp=$cnx->prepare("
    update produit set libelle=?, prix=? , qte_stock=? where id=?
    ");
    $rp->execute(array($libelle,$prix,$qte_stock,$id));
    

}
function delete($id,$comment="soft"){
//supprimer


    $cnx=connecter_db();
if($comment=="soft"){
    $rp=$cnx->prepare(" update produit set trash='yes' where id=?   ");
}
    else {
        $rp=$cnx->prepare("delete from produit where id=? ");
        
    }
    $rp->execute(array($id));
 
    
}
function restaurer($id){
//supprimer

try{
    $cnx=connecter_db();
    $rp=$cnx->prepare(" update produit set trash='no' where id=?   ");
    $rp->execute(array($id));
}catch(PDOException $e){
die("erreur ds restaurer ".$e->getMessage());
}
    
}
//toutes les ressources
function all($trash){
    try{
    $cnx=connecter_db();
    $rp=$cnx->prepare("select * from produit where trash=? order by id desc
    ");
    $rp->execute(array($trash));

  $resultat=  $rp->fetchAll();// tableau de produit (produit ausi est un tab associtatif et indexé)
    return $resultat;
    }catch(PDOException $e){
echo "erreur dans all".$e->getMessage();
    }
}
//recuprer une ressource 
function find($id){
    $cnx=connecter_db();
    $rp=$cnx->prepare(" 
    select * from produit where id=?
    ");
    $rp->execute(array($id));
    return $rp->fetch();
}

function vers($url){
header("location:$url");
}


?>