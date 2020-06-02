@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
        <div class="col-sm-4">
        <a href="#" class="active" >Informations</a>
        </div>
        <div class="col-sm-4">
        <a href="#">Offres</a>
        </div>
        <div class="col-sm-0">
        <a href="#">Biens en vente</a>
        </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajout Propriété') }}</div>

                    <div class="card-body">
                    
                    <form method="post" class="form" action="{{ route('proprietes.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('name') is-invalid @enderror" name="type" value="T2" required autocomplete="type" autofocus>

                                
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="surface" class="col-md-4 col-form-label text-md-right">{{ __('Surface') }}</label>

                            <div class="col-md-6">
                                <input id="surface" type="text" class="form-control @error('name') is-invalid @enderror" name="surface" value="48" required autocomplete="surface" autofocus>

                                
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control @error('name') is-invalid @enderror" name="prix" value="100000" required autocomplete="prix" autofocus>

                                
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" name="adresse" value="123 rue des chinois" required autocomplete="adresse" autofocus>

                                
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="chambres" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de chambres') }}</label>

                            <div class="col-md-6">
                                <input id="chambres" type="text" class="form-control @error('name') is-invalid @enderror" name="chambres" value="1" required autocomplete="chambres">

                                
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="salles_de_bains" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Salle de bains') }}</label>

                            <div class="col-md-6">
                                <input id="salles_de_bains" type="text" class="form-control @error('name') is-invalid @enderror" name="salles_de_bains" value="1" required autocomplete="salles_de_bains" autofocus>

                                
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="balcons" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de balcons') }}</label>

                            <div class="col-md-6">
                                <input id="balcons" type="text" class="form-control @error('name') is-invalid @enderror" name="balcons" value="1" required autocomplete="balcons" autofocus>

                                
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="piscines" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de piscine') }}</label>

                            <div class="col-md-6">
                                <input id="piscines" type="text" class="form-control @error('name') is-invalid @enderror" name="piscines" value="0" required autocomplete="piscines" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jardin" class="col-md-4 col-form-label text-md-right">{{ __('Surface Jardin (en m²') }}</label>

                            <div class="col-md-6">
                                <input id="jardin" type="text" class="form-control @error('name') is-invalid @enderror" name="jardin" value="20" required autocomplete="jardin" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="garages" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de garages / Place de parking') }}</label>

                            <div class="col-md-6">
                                <input id="garages" type="text" class="form-control @error('name') is-invalid @enderror" name="garages" value="0" required autocomplete="garages" autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description du bien') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('name') is-invalid @enderror" name="description" value="Décrivez votre bien !" required autocomplete="description" autofocus>

                                
                            </div>
                        </div>


                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

