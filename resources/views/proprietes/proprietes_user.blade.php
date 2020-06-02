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
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Type</td>
                                <td>Prix</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($proprietes_user as $propriete)
                                <tr>
                                    <td>{{$propriete->id}}</td>
                                    <td>{{$propriete->type}}</td>
                                    <td>{{$propriete->prix}}</td>
                                    <td>
                                        <form action="{{route('proprietes.destroy', $propriete->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5">
                        <a href="{{route('proprietes.create') }}" class="btn btn-primary">Ajouter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

