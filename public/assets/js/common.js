/*
 * ---------------------------------------------------
 * 1. Slide Carousel
 * 2. Scroll to Top
 * 3. Sticky Menu
 * 4. Accordion has icon
 * 5. Hover tag a show ul page Product
 * 6. POPUP order a product - check on info Payment
 * 7. Scroll News Item Tablet & Mobile
 */

  (function($){
    "use strict";
  /* ==================================================== */

  /*
   * 1. Slide Carousel
  */
  $(document).ready(function() {
    $('.owl-carousel').each(function(index, el) {
      var config = $(this).data();
      config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
      config.smartSpeed="800";
      
      if($(this).hasClass('owl-style2')){
        config.animateOut='fadeOut';
        config.animateIn='fadeIn';    
      }
      if($(this).hasClass('dotsData')){
        config.dotsData="true";
      }
      $(this).owlCarousel(config);
    });
  });

  /*
   * 2. Scroll to Top
  */
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {
      $('#return-to-top').addClass('td-scroll-up-visible');
    } else {
      $('#return-to-top').removeClass('td-scroll-up-visible');
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 'slow');
  });

  /*
   * 3. Sticky Menu
  */
  $('.fixed').sticky({ topSpacing: 0 });

  /*
   * 4. Accordion has icon
  */
  $(document).on('click','.box-accordion > .accordion-header',function(event){
    $(this).toggleClass('active');
    $(this).toggleClass('opened');
    $(this).next('.box-collapse').slideToggle(200);
  });

  /*
   * 6. POPUP order a product - check on info Payment
  */
  $('.info-payment .item-group > input[type="checkbox"]').on('change', function(e){
    console.log($(this).attr('checked'));
    if ($(this).is(':checked')) {
      $(this).siblings('.sub-hide-box').show();
    } else {
      $(this).siblings('.sub-hide-box').hide();
    }
  });

  /*
   * 7. Main Menu
  */
  $(".navbar-toggle").on( 'click', function() {
    $( this ).toggleClass('has-open');
    $("header .menu").toggleClass("has-open");
    $("body").toggleClass("menu-open");
  });

  /*
   * 7. Main Menu
  */
  $(document).ready(function(){
    $('.menu ul li.parent').append('<span class="plus"></span>');
    $('.menu ul li.parent .plus').click(function(){
      $(this).toggleClass('open').siblings('.submenu').slideToggle();
    });
  });

  /*
   * 7. Click show hide Search Mobile
  */
  $('.block_search_mobile .fa_search_show').on('click', function() {
    $('.block_search_mobile .block_search_inner').toggleClass('show');
  })

  if (!$('.pro-sts > a')) { return; }
  $('.pro-sts').on( "mouseover", function() { 
    $(this).addClass('shw');
  }).on( "mouseout", function() {
    $(this).removeClass('shw');
  });   
    $('.cart-link').click(function() {
      $.ajax({
        url: $('#route-short-cart').val(),
        method: "GET",
       
        success : function(data){
          $('#short-cart-content').html(data);
          $('#scart_popup').modal('show');
        }
      });
    });
    
    $('.btn-checkout').click(function() {
       $('form#shopping-cart').submit();
       //location.href = "{{ route('shipping-step-1') }}";
     });
   
     
      $(document).on('change', '.change_quantity', function(){
       var quantity = $(this).val();
       var id = $(this).data('id');
       update_product_quantity(id, quantity, 'ajax');
     });   
      $(document).on('change', '.change_quantity_payment', function(){
       var quantity = $(this).val();
       var id = $(this).data('id');
       update_product_quantity(id, quantity, 'normal');
     });   
      
     
      $(document).on('click', '.remove-product', function(){
       var id = $(this).data('id');
       update_product_quantity(id, 0, 'ajax');
     });
    $(document).on('click', '.keep-buying', function(){
      $('#scart_popup').modal('hide');
    });
     
})(jQuery); // End of use strict

function add_product_to_cart(product_id) {
  $.ajax({
    url: $('#route-add-to-cart').val(),
    method: "POST",
    data : {
      id: product_id
    },
    success : function(data){
      $('.cart-link').click();
      calTotalProduct();
    }
  });
}
function calTotalProduct(){
  var total = 0;
  $('.change_quantity ').each(function(){
    total += parseInt($(this).val());
  });
  $('.order_total_quantity').html(total);
}
function update_product_quantity(id, quantity, type) {
       $.ajax({
         url: $('#route-update-product').val(),
         method: "POST",
         data : {
           id: id,
           quantity : quantity
         },
         success : function(data){
           $.ajax({
            url: $('#route-short-cart').val(),
            method: "GET",
           
            success : function(data){
              if(type == 'ajax'){
                $('#short-cart-content').html(data);  
                calTotalProduct();
              }else{
                window.location.reload();
              }
            }
          });
         }
       });
     }