{{-- sezione card  --}}

<div class="container">
  <div class="row d-flex align-items-center justify-content-center my-3">
    <div class="col-12 col-md-8">
      {{-- @dd($place->user->name); --}}
      <div class="photo" style="width: 18rem;">
        
        {{-- <img src="@if($article->img){{Storage::url($place->img)}} @else{{Storage::url('public/img/default.png')}}@endif" class="card-img-top photo" alt="posti visitati"> --}}
        
        <div class="card-body ">
          <h5 class="card-title py-4"><i class="fa-solid fa-street-view"></i>{{$article->title}}</h5>
          <p class="card-text text py-3">{{$article->price}}</p>
          <p class="card-text text py-3">{{$article->description}}</p>
          <div class="row px-5 py-4 d-flex align-items-center justify-content-center">
            <a href="" class="btn">Piu dettagli</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
