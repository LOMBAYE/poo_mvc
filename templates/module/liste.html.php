<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo(text:$titre,link:"/newmodule",textBtn:"Ajouter Module");
?>
<div class="container mt-5">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>#</th>
            <th>Libelle</th>
            <th class="text-center">Actions</th>
        </tr>
        
        <?php
        $i=1;
            foreach ($modules as $module){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $module->libelle ?></td>
            <td  class="text-center">
                <a class="btn btn-warning btn-sm">Modifier</a>
                <a class="btn btn-danger btn-sm">Supprimer</a>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
