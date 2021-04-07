<x-guest-layout>
    @foreach ($post as $p)
        @if ($p->publish_check)
        <div class="border border-black mb-2">
            <h1 class="text-2xl">{{$p->title}}</h1>
            <p>{{$p->body}}</p>
            <a class="hover:underline" href="{{route('posts_show_public', $p->id)}}">View</a>
        </div>
        @endif
    @endforeach
</x-guest-layout>
