
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>#</th>
            <th>Nom Complet</th>
            <th>Login</th>
            <th>Role</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($etudiants as $etud){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $etud->nom_complet ?></td>
            <td><?= $etud->login ?></td>
            <td><?= $etud->role ?></td>

            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
                <button class="btn btn-outline-primary btn-sm ">Details</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
