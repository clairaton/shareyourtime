<section class="action-create-form">
<h2>Soumettez une nouvelle action</h2>
<form method="post" action="/action/create">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="actionName">Nom de l'action</label>
    <input type="text" id="actionName" name="actionName" required>
  </div>
  <div class="form-group">
    <label for="actionType">Type d'action</label>
    <select id="actionType" name="actionType" required>
      <option value="sociale">Actions Sociale</option>
      <option value="environnement">Actions Environnementales</option>
      <option value="civil">Actions Civiles</option>
    </select>
  </div>
  <div class="form-group">
    <label for="actionDesc"></label>
    <textarea name="actionDesc" id="actionDesc" rows="20" required placeholder="description de l'action"></textarea>
  </div>
  <div class="form-group">
    <label for="actionBegin">Date de début</label>
    <input type="date" id="actionBegin" name="actionBegin" >
  </div>
  <div class="form-group">
    <label for="actionEnd">Date de fin</label>
    <input type="date" id="actionEnd" name="actionEnd" >
  </div>
  <div class="form-group">
    <label for="actionLocation">Localisation</label>
    <input type="text" id="actionLocation" name="actionLocation" >
  </div>
  <input type="submit" class="btn" value="Enregistrer">
</form>
@include ('partials.form-errors')
</section>
