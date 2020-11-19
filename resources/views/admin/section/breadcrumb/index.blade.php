<ul id="breadcrumb">
    <li>
        <a href="{{ route('admin.dashboard.index') }}" class="entypo-home"></a>
    </li>
    @isset($breadcrumb)
        @foreach($breadcrumb as $item)
            @if ($loop->last)
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><span title="{{ $item->title }}">{{ $item->title }}</span></li>
            @else
                <li><i class="fa fa-lg fa-angle-right"></i></li>
                <li><a href="{{ $item->url }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
            @endif
        @endforeach
    @endisset

</ul>