<x-guest-layout>
    @foreach ($pages as $p)
        <div class="border border-black mb-2">
            <h1 class="text-2xl">{{$p->title}}</h1>
            <p>{{$p->body}}</p>
            <a class="hover:underline" href="{{route('pages_show_public', $p->id)}}">View</a>
        </div>
    @endforeach
</x-guest-layout>
