

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="form-group m-5 w-25">
        <label for="name">Task Name</label>
        <input id="name" class="form-control form-control-lg" type="text" placeholder="Task Name">

{{--        <label for="description">Description</label>--}}
{{--        <input id="description" class="form-control form-control-lg" type="text" placeholder="Task Description">--}}

{{--        <label for="exampleFormControlInput1">Email address</label>--}}
{{--        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">--}}

{{--        <label for="exampleFormControlInput1">Email address</label>--}}
{{--    <input name="submit" type="submit">--}}
        <button name="submit">submit</button>
    </div>
</form>



{{--{!! Form::open(['route' => 'task.store', 'method' => 'STORE']) !!}--}}
{{--    {{ Form::label('name', 'Task Name', ['class' => 'control-label']) }}--}}
{{--    {{ Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Task Name..']) }}--}}

{{--    <div>--}}
{{--        <button class="btn btn-success"> New Task </button>--}}
{{--    </div>--}}
{{--{!! Form::close() !!}--}}
