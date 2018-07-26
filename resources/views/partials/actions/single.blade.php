<section class="single-action">
    <h2>{{$action->action_name}}</h2>
    <p><span>Type : </span>{{$action->action_type}}</p>
    <p>à {{$action->action_location}}</p>
    <p>
        <span>Du <date>{{$action->action_begin}}</date><span> au </span><date>{{$action->action_end}}</date>
      </p>
    <div>{{$action->action_desc}}</div>
    <p>proposée par :{{$action->request_company_id}}</p>

  <a href="/actions/{{$action->id}}/subcscription" class="btn subscribe d-inline-flex">S'inscrire</a>
  <a href="/action/{{$action->id}}/update" class="btn btn-update modify d-inline-flex">Modifier</a>
  <a href="/action/{{$action->id}}/delete" class="btn btn-delete delete d-inline-flex">Supprimer</a>

</section>
