
<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo(text:$titre,textBtn:"Nouvelle Classe",link:"/newclass");
?>
<div class="container mt-5">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>#</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Libelle</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($classes as $classe){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $classe->filiere?></td>
            <td><?= $classe->niveau ?></td>
            <td><?= $classe->libelle ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
