
<a href="?controller=produit&&action=add">ADD PRODUCT</a>
<table>
    <tr>
        <th>ID</th>
        <th>Libelle</th>
        <th>Quantite</th>
        <th>Prix Unitaire</th>
    </tr>
    <?php while( $p = pg_fetch_assoc($produits)){ ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            <td><?= $p['qt'] ?></td>
            <td><?= $p['p_unitaire'] ?></td>
            <td>
                <a href="?controller=produit&&action=delete&id=<?= $p['id'] ?>">Delete</a>
                <button>Update</button>
            </td>
        </tr>
    <?php } ?>    
</table>