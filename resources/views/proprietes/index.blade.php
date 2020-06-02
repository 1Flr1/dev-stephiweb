@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Propriétés') }}</div>

                    <div class="card-body">
                        <div class="row">
                            @foreach($proprietes as $propriete)
                                <div class ="col-sm">
                                    Type : {{$propriete->type}}
                                    Surface : {{$propriete->surface}} m²</br>
                                    Prix : {{$propriete->prix}} €</br>
                                    <a href="{{route('proprietes.show', $propriete->id) }}" class="btn btn-primary">Voir l'offre</a>
                                </div>        
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

