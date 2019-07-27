@foreach($buttons as $button)

<a href="{{route($button['url'])}}" class="btn btn-round btn-default">
	<i class="fa fa-{{$button['type']}} fa-icon"></i>
	{{$button['title']}}
</a>
@endforeach