
<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo(text:$titre,link:"/newrp",textBtn:"Ajouter RP");
?>
<div class="container mt-5">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>
        <?php
        $i=1;
            foreach ($rp as $rpp){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $rpp->nom_complet ?></td>
            <td><?= $rpp->role?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>