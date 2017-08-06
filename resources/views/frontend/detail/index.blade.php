@extends('frontend.layout')
@include('frontend.partials.meta')
@section('header')
  @include('frontend.partials.header')
  
@endsection

@include('frontend.detail.content')

@include('frontend.partials.footer')

@section('javascript_page')


	<script type="text/javascript">
		$(document).ready(function() {
      $('.btnMuaDetail').click(function() {
        var product_id = $(this).attr('product-id');
        add_product_to_cart(product_id);
      });

      function add_product_to_cart(product_id) {
        $.ajax({
          url: "{{route('add-product')}}",
          method: "POST",
          data : {
            id: product_id
          },
          success : function(data){
            location.href = '{{route("cart")}}';
          },
          error : function(e) {
            alert( JSON.stringify(e));
          }
        });
      }

		});
	</script>
@endsection