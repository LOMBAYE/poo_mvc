<div class="container mt-5 ">

<table class="table table-bordeless text-white bg-gradient white">
        <tr class="bg-info">
            <th>Nom Complet</th>
            <th>Adresse</th>
            <th>Login</th>
            <th>Matricule</th>
            <th>Sexe</th>
        </tr>
        <tr>
            <td class="font-weight-bold"><?= $etu->nom_complet ?></td>
            <td><?= $etu->adresse ?><//td>
            <td><?= $etu->login ?></td>
            <td><?= $etu->matricule?></td>
            <td><?= $etu->sexe?></td>
        </tr>

    </table>
</div>   