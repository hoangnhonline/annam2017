@include('frontend.partials.meta')
@section('content')
<div class="block block_breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{!! route('home') !!}">Trang chủ</a></li>
        <li><a href="{!! route('news-list') !!}">Tin tức</a></li>        
        <li class="active">{!! $detail->title !!}</li>
    </ol>
</div><!-- /block_breadcrumb -->
<div class="block_news row">
    <div class="col-md-9 col-sm-9 col-xs-12 block_cate_left">
        <div class="block_news_content">
            <h1 class="article-title">{!! $detail->title !!}</h1>
            <p class="content-date">Ngày tạo: {!! date('d/m/Y H:i', strtotime($detail->created_at)) !!}</p>
            <div class="block">
                <p class="block_intro">
                    <img src="{!! Helper::showImage($detail->image_url ) !!}" alt="{!! $detail->title !!}">
                </p>
                {!! $detail->content !!}
            </div><!-- /block -->
            @if( $otherArr )
                       
            <div class="block_news_related">
                <span class="block_title">CÁC TIN KHÁC</span>
                <ul>
                 @foreach( $otherArr as $articles)
                <li>                
                   <a href="{{ route('news-detail', ['slug' => $articles->slug, 'id' => $articles->id]) }}" title="{!! $articles->title !!}" style="font-size:15px">{!! $articles->title !!}</a>[{!! date('d/m/Y', strtotime($detail->created_at)) !!}]
                </li>
                @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div><!-- /block_cate_left -->

    @include('frontend.news.sidebar')
</div><!-- /block_categories -->
@endsection