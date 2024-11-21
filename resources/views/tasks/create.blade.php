@extends('layouts.app')
@section ( 'content' )
<!-- content for each page goes here -->
<div class="prose ml-4" >
        <h2 class="text-lg" >Create new task</h2>
    </div>
    <div class="flex justify-center" >
        <form method="POST" action="{{ route('tasks.store') }}" class="w-1/2" >
             @csrf
                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">Task Name:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full" >
                </div>
            <button type="submit" class="btn btn-primary btn-outline">Submit</button>
        </form>
    </div>
@endsection