
<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="block-content">
    <div class="block-common block-sale-products">        
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a class="home" href="<?php echo e(route('parent-cate', $rs->slug)); ?>" title="<?php echo e($rs->name); ?>"><?php echo e($rs->name); ?></a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php echo e($rsCate->name); ?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module" style="margin-bottom:10px">
                    <p class="title_block">Danh mục</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <?php foreach( $cateArr as $cate): ?>
                                    <li <?php echo e($rsCate->id == $cate->id  ? "class=active" : ""); ?>>
                                        <span></span><a href="<?php echo e(route('child-cate', [$rs->slug, $cate->slug])); ?>"><?php echo e($cate->name); ?></a>                                        
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <div class="block left-module">
                    <p class="title_block">Tìm theo giá</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <?php 
                                    $priceArr = DB::table('price_range')->where('loai_id', $rs->id)->orderBy('id')->get();

                                    ?>
                                    <?php foreach($priceArr as $price): ?>                                   
                                    <li><span></span><a href="<?php echo e(route('theo-gia-parent-cate',['slugLoaiSp' => $rs->slug, 'slugGia' => $price->alias])); ?>"><?php echo e($price->name); ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <?php echo $__env->make('frontend.partials.banner-slidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
             
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">             
              
                <!-- view-product-list-->
                <div id="view-product-list" class="products">
                    <h1 class="page-heading">
                        <span class="page-heading-title"><?php echo e($rsCate->name); ?></span>
                    </h1>                    
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        <?php foreach( $productArr as $product ): ?>
                        <?php 
                            if( $rs->is_hover == 1){                                                        
                                $tmp = isset($product['thuoc_tinh']) ? $product['thuoc_tinh'] : "";
                                $thuocTinhArr = json_decode($tmp, true);                                                     
                            }

                        ?>
                        <li class="col-md-3 col-sm-4 col-xs-4">
                            <div class="item">
                                <!--<p class="trapezoid">-18%</p>-->
                                <div class="pro-thumb">
                                    <a href="<?php echo e(route('product-detail', [ $product['slug'], $product['id'] ])); ?>" title="<?php echo e($product['name']); ?>">
                                        <img src="<?php echo e(Helper::showImage($product['image_url'])); ?>" alt="<?php echo e($product['name']); ?>">
                                    </a>
                                </div>
                                <div class="pro-info">
                                    <h2 class="pro-title"><a href="<?php echo e(route('product-detail', [ $product['slug'], $product['id'] ])); ?>"><?php echo e($product['name']); ?></a></h2>
                                    <div class="price-products">
                                        <p class="pro-price"><?php if($product['price'] > 0): ?>
                                        <?php echo e($product['is_sale'] == 1 ? number_format($product['price_sale']) : number_format($product['price'])); ?>

                                        <?php else: ?>
                                        Liên hệ
                                        <?php endif; ?> </p>
                                        <!-- <p class="pro-sale"><del>7,940,000đ</del></p> -->
                                    </div>
                                    <a href="<?php echo e(route('product-detail', [ $product['slug'], $product['id'] ])); ?>" title="" class="btn btn-select-buy">Chọn mua</a>
                                </div>
                            </div><!-- /item -->
                        </li><!-- /col-sm-2 col-xs-6 -->    
                    <?php endforeach; ?>
                        
                    </ul>
                    <!-- ./PRODUCT LIST -->

                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <?php echo e($productArr->links()); ?>

                        </nav>
                    </div>                    
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>