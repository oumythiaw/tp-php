<form action="?controller=utilisateur&&action=update" method="POST">
    <input type="text" name="id" value=<?= $utilisateur['id']?> hidden><br>
    <label for="">nom</label>
    <input type="text" name="nom" value=<?= $utilisateur['nom']?>><br>
    <label for="">prenom</label>
    <input type="text" name="prenom" value=<?= $utilisateur['prenom']?>><br>
    <label for="">email</label>
    <input type="text" name="email" value=<?= $utilisateur['email']?>><br>
    <label for="">Mot de passe</label>
    <input type="text" name="motdepasse" value=<?= $utilisateur['motdepasse']?>><br>

    <button type="submit">Update</button>

</form>
