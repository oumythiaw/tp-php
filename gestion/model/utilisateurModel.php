<?php

require_once('./model/db.php');

function getAll(){
    global $connexion;
    $sql ="SELECT * FROM utilisateur";
    return pg_query($connexion,$sql);
}

function delete($id){
    global $connexion;
    $sql ="DELETE FROM utilisateur WHERE id=$id";
   return pg_query($connexion,$sql);
}

function add($nom,$prenom,$email,$mot_de_passe){
    global $connexion;
    $sql ="INSERT INTO utilisateur (nom,prenom,email,mot_de_passe) values
     ('$nom','$prenom','$email','$mot_de_passe')";
   return pg_query($connexion,$sql);
}

function updateUtilisateur($id,$nom,$prenom,$email,$mot_de_passe){
    global $connexion;
    $sql ="UPDATE utilisateur SET nom='$nom',prenom='$prenom',email='$email',mot_de_passe='$mot_de_passe' 
    where id=$id";
   return pg_query($connexion,$sql);
}

function getById($id){
    global $connexion;
    $sql ="SELECT * FROM utilisateur where id = $id";
    return pg_query($connexion,$sql);
}



?>