@extends('layouts.app')

@section('title', $title)
@section('content')
    <div class="container">
        @foreach($polls as $poll)
            <div class="card">
                <div class="card-header bg-dark text-white">
                <span class="float-left" id="{{'question'.strval($poll->id)}}">{{$poll->question}}</span>
                @if ($poll->user_id == Auth::user()->id)
                <form class="float-right" action="{{route('polls.destroy', $poll->id )}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                @endif
                
                </div>
                <div class="card-body">
                @foreach($options_array[$poll->id] as $option)
                        <div class="form-check mb-3">
                            <input type="radio" name="{{'poll'.strval($poll->id)}}" id="{{'option'.strval($option->id)}}"
                            poll_id="{{$poll->id}}" option_id="{{$option->id}}">
                            <label for="{{'option'.strval($option->id)}}" id="{{'label'.strval($option->id)}}">{{$option->text}}</label>
                            <div class="progress d-none" id="{{'progressdiv'.strval($option->id)}}">
                            <div class="progress-bar bg-info" id="{{'progress'.strval($option->id)}}" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                    </div>
                @endforeach
                <span class="d-none mt-3" id="{{'span'.strval($poll->id)}}"></span>
            </div>
        @endforeach
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/vote.js') }}"></script>
@endsection

