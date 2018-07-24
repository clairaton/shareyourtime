
<section class="search-list">
  @foreach ($actions as $action)
    <article class="action">
      <h2>{{$action->action_name}}</h2>
      <p><span>Type: </span>{{$action->action_type}}</p>
      <p>à {{$action->action_location}}</p>
      <p>
        <span>Du <date>{{$action->action_begin}}</date><span> au </span><date>{{$action->action_end}}</date>
      </p>
      <p>proposée par :{{$action->request_company_id}}</p>
      <a href="/actions/{{$action->action_type}}/{{$action->id}}" title="" class="btn">Voir le détail</a>
    </article>
  @endforeach
</section>
