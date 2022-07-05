@extends('layouts.master')
@section('contenu')
<!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
<!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
<!-- <div class="container text-center text-white"> -->
<!-- <div class="row pt-2"> -->
<!-- <div class="col-lg-8 mx-auto"> -->
<!-- <h1 class="display-4">Bootstrap table fixed header</h1> -->
<!-- <p class="lead mb-0">Build a bootstrap table with a fixed header and scrollable body using Bootstrap 4.</p> -->
<!-- <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white"> -->
<!-- <u>Bootstrapious</u></a></p> -->
<!-- </div> -->
<!-- </div> -->
<!-- </div>End -->

<section id="booking" class="sectio">
  <div class="section-cent">
    <div class="container py-3 bbb">
      <div class="row">
        <div class=" text-center text-light">
          <h1>LISTE VOLS</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 mx-auto bg-white rounded shadow">

          <!-- Fixed header table-->
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead>
                <tr>
                  <th scope="col">Compagnie</th>
                  <th scope="col">Destination</th>
                  <th scope="col">Date Départ</th>
                  <th scope="col">Heure Départ</th>
                  <th scope="col">NB place A</th>
                  <th scope="col">NB place B</th>
                  <th scope="col">Prix place A</th>
                  <th scope="col">Prix place B</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listes as $liste)
                <tr>
                  <!-- <th scope="row">1</th> -->
                  <th scope="row" class="col">
                    {{$liste->id}}
                  </th>
                  <td class="col">{{$liste->destination}}</td>
                  <td class="col">{{$liste->date_depart}}</td>
                  <td class="col">{{$liste->heure}}</td>
                  <td class="col">{{$liste->placeA}}</td>
                  <td class="col">{{$liste->placeB}}</td>
                  <td class="col">{{$liste->prixA}}</td>
                  <td class="col">{{$liste->prixB}}</td>
                  <td class="col">
                    <div class="btn-group">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Détails</a></li>
                        <li><a class="dropdown-item" href="{{ route('reserver')}}">Réserver</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- End -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection