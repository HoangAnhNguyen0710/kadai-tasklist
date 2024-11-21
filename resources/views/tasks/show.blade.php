@extends ('layouts.app')

@section ('content')

<div class="prose ml-4">
    <h2> Task detail page for id = {{ $task->id}} </h2>
</div>


<table class="table w-full my-4">
    <tr>
        <th> id </th>
        <td> {{ $task->id}} </td>
    </tr>


    <t>
        <th> Task </th>
        <td> {{ $task->content}} </td>
        </tr>
</table>
<a class="btn btn-outline" href=" {{ route('tasks.edit', $task->id) }} ">Edit this task </a>
<form method="POST" action=" {{ route('tasks.destroy', $task->id) }} " class="my-2">
    @csrf
    @method ('DELETE')

    <button type="submit" class="btn btn-error btn-outline"
        onclick="return confirm(' Delete the message with id = {{ $task->id}}. Are you sure?')">Delete </button>
</form>

@endsection