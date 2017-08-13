@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="block block_breadcrumb">
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
        <li class="active">Liên hệ</li>
    </ol>
</div><!-- /block_breadcrumb -->

<div class="block_form" style="padding-top:20px">
    <div class="block_contact_note">
        <h2>MỌI NHU CẦU, QUÝ KHÁCH VUI LÒNG LIÊN HỆ</h2>
        <p class="ctact-time">An Nam Mobile phục vụ từ 8:00 đến 21:30 Thứ 2 đến Chủ Nhật</p>
        <div class="ctact-note-inner">           
            <p>
                <span>Email: <strong>abc@xyz.vn
                </strong></span><span>cc: <strong>abc@xyz.vn</strong></span>
            </p>
        </div>
    </div><!-- /block_contact_note -->
    <div class="contact-form">
        <div class="arr_bottom">
            <div class="arr_bt_inner"></div>
        </div>
        <div class="ctact-frm-inner">
            <header class="frm-head">
                <h2>LIÊN HỆ</h2>
                <p>
                    Xin chân thành cảm ơn những ý kiến đóng góp, phản hồi từ phía
                    khách hàng.
                </p>
            </header>
            <article class="frm-content">
                <div class="row">
                    @if(Session::has('message'))
                    <div class="col-md-12">
                        <p class="alert alert-info" >{{ Session::get('message') }}</p>
                    </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="col-md-12">
                      <div class="alert alert-danger ">
                        <ul>                           
                            <li>Vui lòng nhập đầy đủ thông tin.</li>                            
                        </ul>
                      </div>
                    </div>
                    @endif  
                    <form method="POST" action="{{ route('send-contact') }}">
                    {{ csrf_field() }}                    
                        <div class="col-md-6 col-sm-6 col-xs-12 frm-itm">
                            <input type="text" placeholder="Họ và tên" name="full_name" id="full_name" class="ipt txt-name" value="{{ old('full_name') }}"><span class="required">*</span>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 frm-itm">
                            <input type="tel" placeholder="Số điện thoại" name="phone" id="phone" class="ipt txt-phone" value="{{ old('phone') }}"><span class="required">*</span>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <input type="email" placeholder="Email liên lạc" value="{{ old('email') }}" name="email" id="email" class="ipt txt-email"><span class="required">*</span>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <textarea placeholder="Nội dung liên hệ ..." name="content" id="content">{{ old('content') }}</textarea>
                        </div>
                        <div class="col-xs-12 frm-itm">
                            <input type="submit" value="GỬI LIÊN HỆ" class="btn-submit">
                        </div>
                    </form>
                </div>
            </article>
        </div>
    </div><!-- /contact-form -->
</div><!-- /block_form -->
<style type="text/css">
    span.required{
        color:red !important;
    }
    .contact-form-box input {
        font-size: 14px;
        border: 1px solid #ccc
    }
</style>
@endsection