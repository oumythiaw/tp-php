<a href="?controller=utilisateur&&action=add">ADD USER</a>
<table>
    <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>MOT DE PASSE</th>
    </tr>
    <?php while( $u = pg_fetch_assoc($utilisateur)){ ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nom'] ?></td>
            <td><?= $u['prenom'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['motdepasse'] ?></td>
            <td>
                <a href="?controller=utilisateur&&action=delete&&id=<?= $u['id'] ?>">Delete</a>
                <a href="?controller=utilisateur&&action=modif&&id=<?= $u['id'] ?>">Update</a>
            </td>
        </tr>
    <?php } ?>
    </table>
