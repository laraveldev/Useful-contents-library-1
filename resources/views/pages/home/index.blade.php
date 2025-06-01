@extends('home')

@section('content')
    <div class="space-y-12 px-4">
        @forelse ($categories as $category)
            <div>
                <h2 class="text-white text-2xl font-bold mb-4">{{ $category->name }}</h2>

                @if ($category->contents->isEmpty())
                    <p class="text-gray-400">Bu kategoriya uchun hech qanday kontent topilmadi.</p>
                @else
                    {{-- GORIZONTAL SLIDER KO‘RINISHI --}}
                    <div class="overflow-x-auto">
                        <div class="flex gap-4">
                            @foreach ($category->contents as $content)
                                <a href="/contents/{{ $content->id }}"
                                    class="w-[250px] flex-shrink-0 bg-[#181818] rounded-lg overflow-hidden shadow-sm hover:shadow-md hover:rounded-none transition-shadow duration-300">
                                    <div class="w-full aspect-video relative overflow-hidden">
                                      <img src="https://bmw.scene7.com/is/image/BMW/g90_driving-dynamics_fb?qlt=80&wid=1024&fmt=webp"
                                        alt="Image" class="absolute inset-0 w-full h-full object-cover" />
                                    </div>
                                    <div class="p-4 text-white flex flex-col">
                                        <h3 class="text-base font-semibold truncate mb-1">
                                            {!! $content->title !!}
                                        </h3>
                                        <p class="text-xs text-gray-400 truncate mb-1">
                                            @foreach ($content->authors as $author)
                                                <span class="hover:text-white underline">
                                                    {{ $author->name }}
                                                </span>{{ !$loop->last ? ', ' : '' }}
                                            @endforeach
                                        </p>
                                        <p class="text-xs text-gray-400">
                                            {{ $content->category->name }} &middot; {{ $content->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @empty
            <p class="text-white">Hech qanday kategoriya topilmadi.</p>
        @endforelse
    </div>
@endsection