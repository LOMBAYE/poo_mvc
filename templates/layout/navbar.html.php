
<nav class="navbar navbar-expand-lg  bg-light <?=shownav()?>">
  <div class="container-fluid">
 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item active <?=hide(['ROLE_ETUDIANT'])?>">
        <a class="nav-link" href="/classes">Classes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active <?=hide(['ROLE_ETUDIANT'])?>">
        <a class="nav-link" href="/module">Modules<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/demande">Demande<span class="sr-only">(current)</span></a>
      </li>
   
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              LES LISTES
          </a>
          <ul class="dropdown-menu <?=hide(['ROLE_ETUDIANT'])?>" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/profs">Liste des profs</a></li>
            <li><a class="dropdown-item " href="/etudiants">Liste des etudiants</a></li>
            <li><a class="dropdown-item" href="/ac">Liste des attaches</a></li>
            <li><a class="dropdown-item" href="/rp">Liste des responsables</a></li>
          </ul>
        </li>
        <li class="nav-item offset-10 fw-bolder " >
          <a class="nav-link text-danger " href="<?= $Constantes::WEB_ROOT."logout" ?>">Deconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>