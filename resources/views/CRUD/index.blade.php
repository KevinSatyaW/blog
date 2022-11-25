@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto bg-gray-200 flex flex-col px-10 min-h-screen gap-10">
    <div class="px-10 pb-2 flex justify-between">
        <h1 class="text-xl font-bold">Halaman CRUD</h1>
        <a class="text-lg text-blue-500" href="{{ route('crud.create') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>                           
        </a>
    </div>
    <h1 class="text-lg text-stone-700 mt-7">Ini CRUD</h1>
    <table class="text-stone-600">
        <tr class="border">
            <th class="px-4 py-2 border">No</th>
            <th class="px-4 py-2 border">Judul</th>
            <th class="px-4 py-2 border">Konten</th>
            <th class="px-4 py-2 border">Aksi</th>
        </tr>
        @forelse ($konten as $index => $item)
        <tr>
            <th class="px-4 py2 border">{{$index + 1}}</th>
            <th class="px-4 py2 border">{{$item->Judul}}</th>
            <th class="px-4 py2 border">{{$item->konten}}</th>
            <th class="px-4 py2 border">
                <div>
                    <a href="">Edit</a>
                    <form action="{{route ('crud.delete', $item->id )}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        Delete
                    </button>
                    </form>
                    <a href="">Delete</a>
                </div>
            </th>
        </tr>
        @empty
        <tr>
        <th colsppan ="12" class="px-4 py-2 border">Belum Ada Konten</th>
        @endforelse
        </tr>
    </table>
</div>
@endsection