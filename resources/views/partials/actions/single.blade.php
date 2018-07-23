<section class="single-action">
    <h2>{{$action->action_name}}</h2>
    <p><span>Type : </span>{{$action->action_type}}</p>
    <p>à {{$action->action_location}}</p>
    <p>
        <span>Du <date>{{$action->action_begin}}</date><span> au </span><date>{{$action->action_end}}</date>
      </p>
    <div>{{$action->action_desc}}</div>
    <p>proposée par :{{$action->request_company_id}}</p>
</section>
<section class="subcscribe">
  <a href="/actions/{{$action->id}}/subcscription" class="btn">S'inscrire</a>
</section>
