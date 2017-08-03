<?php $__env->startSection('content'); ?>
<div class="block block_hero">
  <div class="row">
    <?php echo $__env->make('frontend.home.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.home.hot-news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div><!-- /block_hero -->
<?php echo $__env->make('frontend.home.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
<?php foreach( $loaiSpList as $loaiSp): ?>
<div class="block block_product">
  <h3 class="block_title">
    <span><?php echo $loaiSp->name; ?></span>
  </h3>
  <div class="block_content row">
    <ul class="list">
      <?php foreach( $productArr[$loaiSp->id] as $product ): ?>
      <li class="col-sm-5ths col-xs-6 product_item">
        <div class="item">
          <a href="<?php echo e(route('product-detail', [$product->slug, $product->id])); ?>" title="<?php echo $product->name; ?>">
            <div class="product_img">              
              <img src="<?php echo e($product->image_url ? Helper::showImageThumb($product->image_url) : URL::asset('admin/dist/img/no-image.jpg')); ?>" alt="<?php echo $product->name; ?>" title="<?php echo $product->name; ?>">
            </div>
            <div class="product_info">
              <h3 class="product_name"><?php echo $product->name; ?></h3>
              <div class="product_price">
              <span class="product_price_new"><?php echo e($product->is_sale == 1 ? number_format($product->price_sale) : number_format($product->price)); ?>đ</span>
              <?php if($product->is_sale): ?>
              <span class="product_price_old"><?php echo e(number_format($product->price)); ?>đ</span>
              <?php endif; ?>
            </div>
            <?php if($product->is_new): ?>
            <span class="new">NEW</span>
            <?php endif; ?>
            </div>
            <div class="product_detail">
              <p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
                    <div class="product_price">
              <span class="product_price_new">650.000đ</span>
              <span class="product_price_old">280.000đ</span>
            </div>
                      <p>Màn hình: 9.7", Retina</p>
                      <p>HDH: IOS 10, CPU: 2 nhân</p>
                      <p>RAM: 2 GB, ROM: 128 GB</p>
                      <p>Camera: 8 MP và 1.2 MP</p>
                      <p>Kết Nối: Wifi</p>
                      <p>Pin: 32.4 Wh</p>
            </div>
          </a>
        </div>
      </li><!-- /product_item -->
      <?php endforeach; ?>
      
    </ul>
  </div>
</div><!-- /block_product -->
<?php endforeach; ?>
<?php $__env->stopSection(); ?>