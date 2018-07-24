<section class="actions-form">
  <div class="search-action">
      <h2>Quelle action bénéficiera de votre temps?</h2>
      <p>Votre investissement est la plus belle des aides</p>
      <form method="POST" action="/actions">
        {{ csrf_field() }}
          <div class="form-group d-inline-flex flex-row align-items-center">
            <label for="actionType">Type d'action</label>
            <select id="actionType" name="actionType">
                <option value="all">Toutes</option>
                <option value="sociale">Actions Sociale</option>
                <option value="environnement">Actions Environnementales</option>
                <option value="civil">Actions Civiles</option>
            </select>
          </div>
          <div class="form-group d-inline-flex flex-row align-items-center">
            <label for="actionDate">Date</label>
            <input type="date"  id="actionDate" name="actionDate">
          </div>
          <div class="form-group d-inline-flex flex-row align-items-center">
            <label for="actionSearch">Région</label>
            <input type="search"  id="actionSearch" name="actionSearch">
          </div>
          <div class="row justify-content-center">
          <input type="submit" class="btn" value="Rechercher">
        </div>
      </form>
  </div>
</section>
