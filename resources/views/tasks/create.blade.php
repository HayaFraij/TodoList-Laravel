@extends('layouts.main')

@section('title', 'Create Task')

@section('content')
    <h1>Create Form</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div class="form-group m-5 w-25">
            <label for="name">Task Name</label>
            <input name="task" class="form-control form-control-lg" type="text" placeholder="Task Name">

            {{--        <label for="description">Description</label>--}}
            {{--        <input id="description" class="form-control form-control-lg" type="text" placeholder="Task Description">--}}

            {{--        <label for="exampleFormControlInput1">Email address</label>--}}
            {{--        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">--}}

            {{--        <label for="exampleFormControlInput1">Email address</label>--}}
            {{--    <input name="submit" type="submit">--}}
            <button name="submit">submit</button>
        </div>
    </form>




{{--    @component('components.taskForm')--}}
{{--    @endcomponent--}}

    @endsection
