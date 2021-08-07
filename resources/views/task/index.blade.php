@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="card">
            <div class="card-header">
                New Task
            </div>
            <div class="card-body">
                @include('common.errors')
                
                <form action='{{ url('task') }}' method='post' class='form-horizontal'>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus">Add Task</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>

@endsection