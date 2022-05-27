<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 text-white">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Ajouter Prof</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="/newProf">


            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="nom_complet"/>
              <label class="form-label" for="form2Example18">Nom Complet</label>
            </div>

            <select class="form-select" aria-label="Default select example" name="grade">
                 <option selected>Grade du prof</option>
                  <option value="Docteur">Docteur</option>
                  <option value="Ingenieur">Ingenieur</option>
                  <option value="Technicien superieur">Technicien superieur</option>
            </select>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" >Inscrire</button>
            </div>

          </form>

        </div>

      </div>
  
    </div>
  </div>
</section>
