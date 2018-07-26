<section class="action-update-form">
<h2>Modifier une action</h2>
<form method="post" action="/action/{{$action->id}}/update">
  {{ csrf_field() }}
  <input type="hidden" id="actionId" name="actionId" value="{{$action->id}}" readonly>
  <div class="form-group">
    <label for="actionName">Nom de l'action</label>
    <input type="text" id="actionName" name="actionName" value="{{$action->action_name}}" maxlength="100" size="<?= strlen($action->action_name)+10?>" required>
  </div>
  <div class="form-group">
    <label for="actionType">Type d'action</label>
    <select id="actionType" name="actionType" required>
      <option value="sociale" <?= $action->action_type=="sociale"?'selected':'';?> >Actions Sociale</option>
      <option value="environnement" <?= $action->action_type=="environnement"?'selected':'';?> >Actions Environnementales</option>
      <option value="civil" <?= $action->action_type=="civil"?'selected':'';?> >Actions Civiles</option>
    </select>
  </div>
  <div class="form-group">
    <label for="actionDesc"></label>
    <textarea name="actionDesc" id="actionDesc" rows="20" required placeholder="description de l'action">{{$action->action_desc}}</textarea>
  </div>
  <div class="form-group">
    <label for="actionBegin">Date de début</label>
    <input type="text" id="actionBegin" name="actionBegin" value="{{$action->action_begin}}">
  </div>
  <div class="form-group">
    <label for="actionEnd">Date de fin</label>
    <input type="text" id="actionEnd" name="actionEnd" value="{{$action->action_end}}">
  </div>
  <div class="form-group">
    <label for="actionLocation">Localisation</label>
    <input type="text" id="actionLocation" name="actionLocation" value="{{$action->action_location}}">
  </div>
  <input type="hidden" id="requestCompany" name="requestCompany" value="{{$action->request_company}}" readonly>
  <input type="submit" class="btn" value="Mettre à jour">
</form>
@include ('partials.form-errors')
</section>
