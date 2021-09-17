<?php include(VIEWS . '_partials/header.php'); ?>
<a href="<?= BASE_PATH.'categories/add'; ?>" class="btn btn-secondary mb-2 mt-2">Ajouter</a>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $categorie): ?>
    <tr>
        <th scope="row"><?= $categorie['id'] ?></th>
        <td><?= $categorie['nom'] ?></td>
        <td>
            <a href="<?= BASE_PATH.'categories/add?id='.$categorie['id'] ?>" class="btn btn-light">Modifier</a>
            <a onclick="return(confirm('Etes vous sûr de vouloir supprimer cette catégorie?'))" href="<?= BASE_PATH.'categories/delete?id='.$categorie['id'] ?>" class="btn btn-danger">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>





<?php include(VIEWS . '_partials/footer.php'); ?>
