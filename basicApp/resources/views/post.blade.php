<x-guest-layout>
    @if($post->publish_check)
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
    @else
        <h1>Error: This is not a published page</h1>
    @endif
</x-guest-layout>
