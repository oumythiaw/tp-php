<h2>Modifier le Produit</h2>

<form action="?controller=produit&action=update" method="POST">

    <input type="hidden" name="id" value="<?= $produit['id'] ?>">

    <label for="libelle">Libellé</label>
    <input type="text" name="libelle" value="<?= htmlspecialchars($produit['libelle']) ?>" required><br>

    <label for="quantite">Quantité</label>
    <input type="number" name="quantite" value="<?= $produit['qt'] ?>" min="0" required><br>

    <label for="prix">Prix Unitaire</label>
    <input type="number" step="0.01" name="prix" value="<?= $produit['p_unitaire'] ?>" min="0" required><br>

    <button type="submit">Mettre à jour</button>
</form>
