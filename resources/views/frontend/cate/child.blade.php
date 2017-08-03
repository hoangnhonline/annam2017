@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block_breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
        <li><a href="{{ route('parent-cate', $loaiDetail->slug) }}" title="{!! $loaiDetail->name !!}">{!! $loaiDetail->name !!} </a></li>
        <li class="active">{{ $cateDetail->name }}</li>
    </ol>
</div><!-- /block_breadcrumb -->
@include('frontend.home.ads')
<div class="block_categories row">
    <div class="col-md-3 col-sm-3 col-xs-12 block_cate_left">
        <div class="block block_modul">
            <div class="block_price">
                <h3 class="block_title">Khoảng giá</h3>
                <div class="block_content clearfix">
                    <div class="slider-range">
                        <div id="slider-range"></div>
                        <div class="action clearfix">
                            <span id="amount-left"></span>
                            <span id="amount-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /block_modul -->
        <div class="block block_modul">
            <div class="block_brands">
                <div class="box-accordion in">
                    <div class="box-header accordion-header">
                        <h3 class="block_title">Hãng âm thanh</h3>
                        <a href="javascript:void(0);" class="btn-opened" title="Down Up"></a>
                    </div>
                    <div class="box-collapse">
                        <div class="block_content">
                            <ul class="clearfix">
                                @foreach( $cateArrByLoai[$loaiDetail->id] as $cate)
                                <li {{ $cateDetail->id == $cate->id  ? "class=active" : "" }}>
                                    <input type="checkbox" name="brand" value="{!! $cate->id !!}" id="brand-514"> 
                                    <label for="brand-514" title="{!! $cate->name !!}">{!! $cate->name !!}<span class="number-prod">4</span></label>                            
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /block_brands -->
        </div><!-- /block_modul -->
        <div class="block block_modul">
            <div class="block_colors">
                <div class="box-accordion in">
                    <div class="box-header accordion-header">
                        <h3 class="block_title">MÀU SẮC</h3>
                        <a href="javascript:void(0);" class="btn-opened" title="Down Up"></a>
                    </div>
                    <div class="box-collapse">
                        <div class="block_content">
                            <ul class="search-color">
                                <li class="active"><a href="#" style="background:#363636;"></a></li>
                                <li><a href="#" style="background:#f26c4f;"></a></li>
                                <li><a href="#" style="background:#7da7d9;"></a></li>
                                <li><a href="#" style="background:#9e0b0f;"></a></li>
                                <li><a href="#" style="background:#fff200;"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /block_colors -->
        </div><!-- /block_modul -->
    </div><!-- /block_cate_left -->
    <div class="col-md-9 col-sm-9 col-xs-12 block_cate_right">                        
        <div class="block block_view">
            <span>Xem theo:</span>
            <ul class="block_content">
                <li class="active"><a href="">Mới nhất</a></li>
                <li><a href="#" title="Cũ nhất">Cũ nhất</a></li>
                <li><a href="#" title="Giá cao nhất">Giá cao nhất</a></li>
                <li><a href="#" title="Giá thấp nhất">Giá thấp nhất</a></li>
            </ul>
            <div class="block_status">
                <div class="pro-sts">
                    <a href="javascript:void(0);" class="dpl-status">
                        <span>Đang &amp; Sắp có hàng</span>
                    </a>
                    <ul>
                        <li><a href="#">Đang có hàng</a></li>
                        <li><a href="#">Sắp có hàng</a></li>
                        <li><a href="#">Đã hết hàng</a></li>
                        <li><a href="#">Tất cả</a></li>
                    </ul>
                </div>
            </div>
            <!-- <a href="#" onclick="return false;" class="filter-prod">Bộ lọc sản phẩm</a> -->
        </div><!-- /block_view_by -->
        <div class="block block_product">
            <h3 class="block_title block_title_link">
                {!! $loaiDetail->name !!} {!! $cateDetail->name !!}
                <span class="num">29</span>
            </h3>
            <div class="block_content row">
                <ul class="list">
                    @foreach( $productList as $product )
                    <li class="col-sm-3 col-xs-6 product_item">
                        <div class="item">
                            <a href="detail.html" title="">
                                <div class="product_img">
                                    <img src="{{ $product->image_url ? Helper::showImageThumb($product->image_url) : URL::asset('admin/dist/img/no-image.jpg') }}" alt="{!! $product->name !!}" title="{!! $product->name !!}">
                                </div>
                                <div class="product_info">
                                  <h3 class="product_name">{!! $product->name !!}</h3>
                                  <div class="product_price">
                                  <span class="product_price_new">{{ $product->is_sale == 1 ? number_format($product->price_sale) : number_format($product->price) }}đ</span>
                                  @if($product->is_sale)
                                  <span class="product_price_old">{{ number_format($product->price) }}đ</span>
                                  @endif
                                </div>
                                @if($product->is_new)
                                <span class="new">NEW</span>
                                @endif
                                </div>
                                <div class="product_detail">
                                  <p class="name">{!! $product->name !!}</p>
                                        <div class="product_price">
                                  <span class="product_price_new">{{ $product->is_sale == 1 ? number_format($product->price_sale) : number_format($product->price) }}đ</span>
                                  @if($product->is_sale)
                                  <span class="product_price_old">{{ number_format($product->price) }}đ</span>
                                  @endif
                                </div>
                                @if( $loaiDetail->is_hover == 1)            
                                    @foreach($hoverInfo as $info)
                                    <?php 
                                    $tmpInfo = explode(",", $info->str_thuoctinh_id);              
                                    ?>

                                    <p>
                                    {{ $info->text_hien_thi}}: 
                                    <?php
                                    $tmp = DB::table('sp_thuoctinh')->where('product_id', $product->id)->select('thuoc_tinh')->first();            
                                    if( $tmp ){
                                        $spThuocTinhArr = json_decode( $tmp->thuoc_tinh, true);                 
                                    }
                                    $countT = 0; $totalT = count($tmpInfo);
                                    foreach( $tmpInfo as $tinfo){
                                        $countT++;
                                        if(isset($spThuocTinhArr[$tinfo])){
                                            echo $spThuocTinhArr[$tinfo];
                                            echo $countT < $totalT ? ", " : "";
                                        }
                                    }

                                     ?>                   
                                     </p>
                                    @endforeach
                                    
                                  @endif                    

                                </div>
                            </a>
                        </div>
                    </li><!-- /product_item -->        
                    @endforeach                          
                </ul>
            </div>
        </div><!-- /block_product -->
    </div><!-- /block_cate_right -->
</div><!-- /block_categories -->
@stop
@section('js')
<script>
    (function($) {
        "use strict";
        /*  [ Filter by price ]
        - - - - - - - - - - - - - - - - - - - - */
        $('#slider-range').slider({
            range: true,
            min: 0,
            max: 500,
            values: [0, 0],
            slide: function (event, ui) {
                $('#amount-left').text(ui.values[0] + 'k' );
                $('#amount-right').text(ui.values[1] + 'k' );
            }
        });
        $('#amount-left').text($('#slider-range').slider('values', 0) + 'k');
        $('#amount-right').text($('#slider-range').slider('values', 1) + 'k');
    })(jQuery);
    </script>
@stop