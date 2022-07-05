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

<section id="booking" class="section">
    <div class="section-center">
        <div class="container-fluid py-3 bbb">
            <div class="row">
                <div class="col-md-4 col-md-push-5">
                    <div class="booking-cta">
                        <h1>LISTE RESERVATION</h1>
                    </div>
                </div>
                <div class="col-lg-7 mx-auto bg-white rounded shadow">

                    <!-- Fixed header table-->
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col">#</th>
                                    <th scope="col" class="col">Num_piece</th>
                                    <th scope="col" class="col">Nom</th>
                                    <th scope="col" class="col">Prénom</th>
                                    <th scope="col" class="col">Sexe</th>
                                    <th scope="col" class="col">Place</th>
                                    <th scope="col" class="col">VOLS Num</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($passagers as $passager)
                                <tr>
                                    <th scope="row" class="col">
                                        {{$passager->id}}
                                    </th>
                                    <td class="col"> {{$passager->num_piece}}</td>
                                    <td class="col"> {{$passager->nom}}</td>
                                    <td class="col"> {{$passager->prenom}}</td>
                                    <td class="col"> {{$passager->sexe}}</td>
                                    <td class="col"> {{$passager->place}}</td>
                                    <td class="col"> {{$passager->listes_id}}</td>

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