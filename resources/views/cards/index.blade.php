@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($cards) > 0)
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Coût</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($cards as $card)
                            <tr>
                                <td>{{ $card->id }}</td>
                                <td>{{ $card->name }}</td>
                                <td>{{ $card->cost }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Voir</a></li>
                                            <li><a href="#">Modifier</a></li>
                                            <li><a href="#">Supprimer</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>Il n'y a pas encore de cartes.</p>
                @endif
            </div>
        </div>
    </div>
@endsection