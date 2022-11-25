@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto bg-gray-200 flex flex-col px-10 min-h-screen gap-10">
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
                    <a href="">Delete</a>
                </div>
            </th>
        </tr>
        <tr>
        @empty
        <th colsppan ="12" class="px-4 py-2 border">Belum Ada Konten</th>
        @endforelse
        </tr>
    </table>
</div>
@endsection