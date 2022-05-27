<?php 
    use App\Core\HtmlProvider;
    HtmlProvider::navInfo(text:$titre,link:"/newprof",textBtn:"Nouveau Prof");
?>
<div class="container mt-5">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>
        
        <?php
        $i=1;
            foreach ($profs as $prof){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $prof->nom_complet ?></td>
            <td><?= $prof->grade?></td>
            <td><?= $prof->role?></td>
            <td  class="text-center">
                <a class="btn btn-warning btn-sm">Modifier</a>
                <a class="btn btn-danger btn-sm">Supprimer</a>
                <a href="/professeur/<?=$prof->id?>" class="btn btn-outline-primary btn-sm " >Details</a>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
