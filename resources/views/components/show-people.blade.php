@props(["person"])
<div class="w-[1200px] h-16 flex items-center gap-8 h-[60px] border-b-2">

    <div class="flex items-center justify-center h-[60px] w-[250px] text-xl ">{{$person->id}}</div>
    <div
        class="flex items-center justify-center h-[60px] w-[250px] text-xl font-semibold text-blue-800">{{$person->name}}</div>
    <div
        class="flex items-center justify-center h-[60px] w-[250px] text-xl font-semibold text-blue-800">{{$person->email}}</div>
    <div
        class="flex items-center justify-center h-[60px] w-[250px] text-xl font-semibold text-blue-800 ">{{$person->number}}</div>
    <div class="flex items-center justify-center h-[60px] w-[250px] text-xl font-semibold text-blue-800">{{$person->income}}</div>

    @admin
    <div class="flex gap-2 items-center justify-center h-[60px] w-[250px]">
        <a href="/people/{{$person->id}}/edit" class="text-white bg-blue-600 px-3 rounded py-1">Edit</a>
        <form action="/people/{{$person->id}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="px-3 py-1 text-white bg-red-600 rounded">Delete</button>
        </form>
    </div>
    @endadmin
</div>
