
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Login</th>
            <th>Role</th>
            <th>Adresse</th>

            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($user as $rpp){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $rpp->nom_complet ?></td>
            <td><?= $rpp->login?></td>
            <td><?= $rpp->role?></td>
            <td><?= $rpp->adresse?></td>

            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
                <button class="btn btn-outline-secondary btn-sm">details</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
