<x-guest-layout>
    @if($page->publish_check)
    <h1>{{$page->title}}</h1>
    <p>{{$page->body}}</p>
    @else
    <h1>Error: This is not a published page</h1>
    @endif
</x-guest-layout>
