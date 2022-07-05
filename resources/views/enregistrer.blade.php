@extends('layouts.master')
@section('contenu')
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>ENREGISTREMENT VOLS</h1>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form method="POST" action="{{ route('enregistrer')}}">
                        @csrf
                            <div class="row">
                                <div class="form-group col-6">
                                    <span class="form-label">Destination</span>
                                    <input class="form-control" type="text" placeholder="Destination" name="destination">
                                </div>
                                <div class="form-group col-6">
                                    <span class="form-label">Date départ</span>
                                    <input class="form-control" type="date" placeholder="Entrez votre Nom" name="date_depart">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <span class="form-label">Heure départ</span>
                                    <input class="form-control" type="time" placeholder="Entrez le numéro de votre Carte" name="heure">
                                </div>
                                <div class="form-group col-6">
                                    <span class="form-label">Place A Nb</span>
                                    <input class="form-control" type="text" placeholder="Nombre classe A" name="placeA">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <span class="form-label">Place B Nb</span>
                                        <input class="form-control" type="text" placeholder="Nombre classe B" name="placeB">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <span class="form-label">Prix A</span>
                                        <input class="form-control" type="text" placeholder="Prix classe A" name="prixA">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <span class="form-label">Prix B</span>
                                        <input class="form-control" type="text" placeholder="Prix classe B" name="prixB">
                                    </div>
                                </div>
                            </div>

                            <div class="form-btn">
                                <button type="submit" class="submit-btn">ENREGISTRER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/time.js') }}"></script>

@endsection