@extends('layouts.app')
@section ( 'content' )
<!-- content for each page goes here -->
<div class="prose ml-4" >
        <h2 class="text-lg" >Edit task for id: {{ $task->id}}</h2>
    </div>
    <div class="flex justify-center" >
        <form action="{{ route('tasks.update') }}" class="w-1/2" >
             @csrf
             @method('PUT')
                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">Task Content:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full" value={{$task->content}}>
                    <label for="status" class="label">
                        <span class="label-text">Status:</span>
                    </label>
                    <input type="text" name="status" class="input input-bordered w-full" value={{$task->status}}>
                </div>
            <button type="submit" class="btn btn-primary btn-outline">Submit</button>
        </form>
    </div>
@endsection