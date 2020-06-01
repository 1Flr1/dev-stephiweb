@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
        <div class="col-sm-4">
        <a href="#" class="active" >Informations</a>
        </div>
        <div class="col-sm-4">
        <a href="{{view('offres_user')}}">Offres</a>
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
                <div class="card-header">{{ __('Informations') }}</div>

                    <div class="card-body">
                    
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                        <table>
                            <tr>
                            
                                <th>Username</th>
                                <td>{{$user->username}}</td>
                            </tr>
                            <tr>
                                <th>Prenom</th>
                                <td>{{$user->prenom}}</td>
                            </tr>
                            <tr>
                                <th>Nom</th>
                                <td>{{$user->nom}}</td>
                            </tr>
                            <tr>
                                <th>Téléphone</th>
                                <td>{{$user->telephone}}</td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td>{{$user->adresse}}</td>
                            </tr>
                            <tr>
                                <th>Code postal</th>
                                <td>{{$user->code_postal}}</td>
                            </tr>
                            <tr>
                                <th>Ville</th>
                                <td>{{$user->ville}}</td>
                            </tr>
                        
                        </table>
                    </div>
                    </div>
                    </div>
                    
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                            <a href="{{route('user.edit', $user->id) }}" class="btn btn-primary">Modifier</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

