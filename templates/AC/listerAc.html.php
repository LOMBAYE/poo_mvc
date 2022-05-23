
<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo($titre,"dark",6,"New Ac","secondary","/newac");
?>
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($ac as $attaches){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $attaches->nom_complet ?></td>
            <td><?= $attaches->role ?></td>

            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
