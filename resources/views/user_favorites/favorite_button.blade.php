@if (Auth::id() != $favorite->id)
    @if (Auth::user()->is_favorite($favorite->id))
        {{-- アンフェイバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorite', $favorite->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイバリットボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $favorite->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif