<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Ajouter Etudiant</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="/newEtu">


            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="nom_complet"/>
              <label class="form-label" for="form2Example18">Nom Complet</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example28" class="form-control form-control-lg" name="login"/>
              <label class="form-label" for="form2Example28">Login</label>
            </div>
            <div class="form-outline mb-4">
              <input type="Password" id="form2Example28" class="form-control form-control-lg" name="password"/>
              <label class="form-label" for="form2Example28">Password</label>
            </div>
            <div class="form-outline mb-4">
              <input type="Password" id="form2Example28" class="form-control form-control-lg" name="password"/>
              <label class="form-label" for="form2Example28">Confirm Password</label>
            </div>
            <div class="form-outline mb-4 form-check form-check-inline">

          <div class="form-check form-check-inline">
            <label for="sexe" class="form-label">Homme</label>
            <input class="btn" type="radio" value="H" name="sexe">
          </div>
          <div class="form-check form-check-inline">
            <label for="sexe" class="form-label">Femme</label>
            <input class="btn" type="radio" value="F" name="sexe">
          </div>
          <div>
            <label class="form-label display-6" for="sexe">Sexe</label>
          </div>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="adresse"/>
              <label class="form-label" for="form2Example18">Adresse</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="matricule"/>
              <label class="form-label" for="form2Example18">Matricule</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block">Inscrire</button>
            </div>


          </form>

        </div>

      </div>
 
    </div>
  </div>
</section>