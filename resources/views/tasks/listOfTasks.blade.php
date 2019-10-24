{{--<h1>hello from list</h1>--}}
{{--<h1>{{ $user_id }}</h1>--}}
@extends('layouts.main')

@section('content')
<table>
{{--    <h1>--}}
{{--        {{ $tasks }}--}}
{{--    </h1>--}}
        @foreach($tasks as $uuser)
        <tr>
{{--            <td>--}}
{{--                {{ $uuser->id }}--}}
{{--            </td>--}}
        <td>{{ $uuser->task}}</td>
            <td>
                <a href="/tasks/{{$uuser->id}}/edit" class="btn btn-info">Edit</a>
            </td>
            <td>
                <form action="/tasks/{{ $uuser->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
    @endsection
