
<?php 
    use App\Core\HtmlProvider;
    if($_SESSION['user-connect']->role!="ROLE_ETUDIANT"){
    HtmlProvider::navInfo(text:$titre,link:"/newetu");
}
?>
<div class="container mt-5 ">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($etudiants as $etud){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $etud->nom_complet ?></td>
            <td><?= $etud->role ?></td>

            <td  class="text-center">
                <a class="btn btn-warning btn-sm">Modifier</a>
                <a class="btn btn-danger btn-sm">Supprimer</a>
                <a href="/detailsetu/<?=$etud->id?>" class="btn btn-outline-primary btn-sm " >Details</a>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
