@extends('layouts.master')
@section('contenu')
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>FAITES VOTRE RÉSERVATION</h1>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form method="post" action="{{ route('reserver')}}">
                            @csrf
                            <div class="form-group">
                                <span class="form-label">ID CARTE NINA</span>
                                <input class="form-control" type="text" placeholder="Entrez le numéro de votre Carte" name="num_piece">
                            </div>
                            <div class="form-group">
                                <span class="form-label">NOM</span>
                                <input class="form-control" type="text" placeholder="Entrez votre Nom" name="nom">
                            </div>
                            <div class="form-group">
                                <span class="form-label">PRENOM</span>
                                <input class="form-control" type="text" placeholder="Entrez votre Prénom" name="prenom">
                            </div>
                            <p class="contro">Sexe : <input type="radio" name="sexe" value="H" checked> Homme <input type="radio" name="sexe" value="F" class="form-label"> Femme</p>

                            <p class="contro">Classe : <SELECT name="place" class="contro">
                                    <OPTION class="contro">placeA
                                    <OPTION class="contro">placeB
                                </SELECT>
                            </p>
                            <div class="form-group">
                                <span class="form-label">Destination</span>
                                <input class="form-control" type="text" placeholder="Entrez le numéro du vol" name="listes_id">
                            </div>

                            <div class="form-btn">
                                <button type="submit" class="submit-btn">RESERVER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection