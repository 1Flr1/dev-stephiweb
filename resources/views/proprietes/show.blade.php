@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
        <div class="col-sm-4">
        <a href="{{url('/home')}}" class="active" >Informations</a>
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
                <div class="card-header">{{ __('Propriétés') }}</div>

                    <div class="card-body">
                    <table class="table">
                            <tr>
                            
                                <th>Type</th>
                                <td>{{$propriete->type}}</td>
                            </tr>
                            <tr>
                                <th>Surface</th>
                                <td>{{$propriete->surface}} m²</td>
                            </tr>
                            <tr>
                                <th>Prix</th>
                                <td>{{$propriete->prix}} €</td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td>{{$propriete->adresse}}</td>
                            </tr>
                            <tr>
                                <th>Chambres</th>
                                <td>{{$propriete->chambres}}</td>
                            </tr>
                            <tr>
                                <th>Salles de bains</th>
                                <td>{{$propriete->salles_de_bains}}</td>
                            </tr>
                            <tr>
                                <th>Balcons</th>
                                <td>{{$propriete->balcons}}</td>
                            </tr>
                            <tr>
                                <th>Piscines</th>
                                <td>{{$propriete->piscines}}</td>
                            </tr>

                            <tr>
                                <th>Jardin</th>
                                <td>{{$propriete->jardin}} m²</td>
                            </tr>

                            <tr>
                                <th>Garages</th>
                                <td>{{$propriete->garages}}</td>
                            </tr>

                            <tr>
                                <th>Description</th>
                                <td>{{$propriete->description}}</td>
                            </tr>
                        </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

