
<nav class="navbar navbar-expand-lg navbar-info bg-light <?=shownav()?>">
  <div class="container-fluid">
 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            LISTES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/profs">Liste des profs</a></li>
            <li><a class="dropdown-item" href="/etudiants">Liste des etudiants</a></li>
            <li><a class="dropdown-item" href="/ac">Liste des attaches</a></li>
            <li><a class="dropdown-item" href="/rp">Liste des responsables</a></li>
          </ul>
        </li>
        <li class="nav-item " >
          <a class="nav-link text-danger " href="<?= $Constantes::WEB_ROOT."logout" ?>">Deconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>