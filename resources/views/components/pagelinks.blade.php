@props(['pagetitle', 'backlink', 'index', 'create', 'admin'])

<button
    class="text-gray-600 bg-transparent
    font-bold text-lg px-4 py-2 rounded outline-none
    mb-1 ease-linear transition-all duration-150"
    type="button">
    {{ $pagetitle }}
</button>
<button
    class="text-gray-400 bg-transparent hover:bg-gray-400 hover:text-white
    active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none
    focus:outline-none mb-1 ease-linear transition-all duration-150"
    type="button">
    <a href="{{ $backlink }}" title="previous page"><i class="fas fa-step-backward"></i></a>
</button>

@if($admin)
    <button
        class="text-gray-400 bg-transparent hover:bg-gray-400 hover:text-white
        active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none
        focus:outline-none mb-1 ease-linear transition-all duration-150"
        type="button">
        <a href="{{ $index }}" title="list {{ $pagetitle }}" class="text-sm"><i class="fas fa-list"></i></a>
    </button>
    <button
        class="text-gray-400 bg-transparent hover:bg-gray-400 hover:text-white
        active:bg-gray-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none
        focus:outline-none mb-1 ease-linear transition-all duration-150"
        type="button">
        <a href="{{ $create }}" title="add {{ $pagetitle }}" class="text-sm"><i class="fas fa-plus"></i></a>
    </button>
@endif
