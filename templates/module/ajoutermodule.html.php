<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 text-white">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Ajouter Module</span>
        </div>
        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form style="width: 23rem;" method="POST" action="/newModule">
            <div class="form-outline mb-4">
              <label class="form-label" for="form2Example18">Libelle du Module</label>
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="libelle"/>
            </div>
            <select class="form-select" aria-label="Default select example" name="prof">
                 <option disabled selected>--Choisir un prof--</option>
                 <?php
                  foreach($profs as $prof){?>
                 <option value="<?= $prof->id?>"><?= $prof->nom_complet?></option>
                 <?php }
                 ?>
            </select>
            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" >Ajouter </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>