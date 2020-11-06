@extends('frontend.layouts.master')
@section('content')
<section id="wrapper">
   <nav data-depth="1" class="breadcrumb">
      <div class="container">
         <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
               <a itemprop="item" href="index.html">
               <span itemprop="name">Home</span>
               </a>
               <meta itemprop="position" content="1">
            </li>
         </ol>
      </div>
      <div class="category-cover hidden-sm-down">
         <img src="frontend_asset/themes/leo_zlin/assets/img/bg-breadcrumb.jpg" class="img-fluid" alt="Breadcrumb image">
      </div>
   </nav>
   <div class="row">
      <div id="content-wrapper" class="col-lg-12 col-xs-12">
         <section id="main">
            <section id="content" class="page-home">
               @include('frontend.layouts.sliders')
               <div class="wrapper">
                  <div class="container">
                     <div        class="row h2-box-img-cate ApRow  has-bg bg-boxed"
                        style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                        <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn ">
                           <div class="widget-category_image block ApCategoryImage">
                              <div class="block_content">
                                 <ul class="level0  ul-categories-image-3112913214">
                                    <li class="cate_3">
                                       <a href="3-special-tea.html">
                                       <span class="cate_content">
                                       <span class="cover-img">
                                       <img src='frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/icon/h2-bn1.jpg' alt='Special tea'
                                          />
                                       </span>
                                       <span>Special tea</span>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="level0  ul-categories-image-3112913214">
                                    <li class="cate_6">
                                       <a href="6-new-arrival.html">
                                       <span class="cate_content">
                                       <span class="cover-img">
                                       <img src='frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/icon/h2-bn2.jpg' alt='New Arrival'
                                          />
                                       </span>
                                       <span>New Arrival</span>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                                 <ul class="level0  ul-categories-image-3112913214">
                                    <li class="cate_9">
                                       <a href="9-best-selling.html">
                                       <span class="cate_content">
                                       <span class="cover-img">
                                       <img src='frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/icon/h2-bn3.jpg' alt='Best Selling'
                                          />
                                       </span>
                                       <span>Best Selling</span>
                                       </span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div id="view_all_wapper_categories-image-3112913214" class="view_all_wapper hide">
                                    <a class="btn btn-primary view_all" href="javascript:void(0)">View all</a>
                                 </div>
                              </div>
                           </div>
                           <script type="text/javascript">
                              ap_list_functions.push(function(){
                               $(".view_all_wapper").hide();
                               var limit = 5;
                               var level = 1 - 1;
                               $("ul.ul-categories-image-3112913214, ul.ul-categories-image-3112913214 ul").each(function(){
                                 var element = $(this).find(">li").length;
                                 var count = 0;
                                 $(this).find(">li").each(function(){
                                   count = count + 1;
                                   if(count > limit){
                                     // $(this).remove();
                                     $(this).hide();
                                   }
                                 });
                                 if(element > limit) {
                                   view = $(".view_all","#view_all_wapper_categories-image-3112913214").clone(1);
                                   // view.appendTo($(this).find("ul.level" + level));
                                   view.appendTo($(this));
                                   var href = $(this).closest("li").find('a:first-child').attr('href');
                                   $(view).attr("href", href);
                                 }
                               })
                              });

                           </script>
                           <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/appagebuilder/views/templates/hook//ApCategoryImage.tpl -->
                        </div>
                        <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                     </div>
                  </div>
               </div>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- begin modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
               <div class="wrapper"
                  >
                  <div class="container">
                     <div        class="row ApRow  has-bg bg-boxed"
                        style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                        <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                        <div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn "
                           >
                           <!-- begin modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl -->
                           <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                           <div class="block products_block exclusive appagebuilder ApProductCarousel">
                              <h4 class="title_block">
                                 New Arrival
                              </h4>
                              <div class="block_content">
                                 <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                                 <div class="owl-row">
                                    <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3" data-md="4" data-sm="3" data-m="1">
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="carousel-1676220065" class="owl-carousel owl-theme owl-loading product-default">
                                       <div class="item first">
                                          <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="37" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="black-tea/1-37-hummingbird-printed-t-shirt.html#/3-size-l/18-color-pink" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/24-home_default/hummingbird-printed-t-shirt.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="1"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="1" data-id-product-attribute="37" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-20%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="black-tea/1-37-hummingbird-printed-t-shirt.html#/3-size-l/18-color-pink">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <meta itemprop="worstRating" content = "0" />
                                                            <meta itemprop="ratingValue" content = "5" />
                                                            <meta itemprop="bestRating" content = "5" />
                                                         </div>
                                                         <span class="nb-revews"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Recharge your skin with this refreshing toner, made with Jeju Green Tea. Especially great for combination skin, it balances, moisturizes, and...</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="19.12">$19.12</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$23.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="0" class="quantity_product quantity_product_1" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_1" name="minimal_quantity">
                                                            <input type="hidden" value="37" class="id_product_attribute id_product_attribute_1" name="id_product_attribute">
                                                            <input type="hidden" value="1" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_1" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_1 disabled" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="1" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                          <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/2-46-brown-bear-printed-sweater.html#/4-size-xl/11-color-black" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/30-home_default/brown-bear-printed-sweater.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/30-large_default/brown-bear-printed-sweater.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="2"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="2" data-id-product-attribute="46" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-20%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/2-46-brown-bear-printed-sweater.html#/4-size-xl/11-color-black">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort. </div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="28.72">$28.72</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$35.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="27" class="quantity_product quantity_product_2" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_2" name="minimal_quantity">
                                                            <input type="hidden" value="46" class="id_product_attribute id_product_attribute_2" name="id_product_attribute">
                                                            <input type="hidden" value="2" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_2" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_2" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="2" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="42" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="best-selling/3-42-the-best-is-yet-to-come-framed-poster.html#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/59-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                      alt = "Jade Citrus Mint™..."
                                                      data-full-size-image-url = "frontend_asset/59-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="3"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="3" data-id-product-attribute="42" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="best-selling/3-42-the-best-is-yet-to-come-framed-poster.html#/1-size-s/10-color-red">Jade Citrus Mint™...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid matt paper and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="29" class="quantity_product quantity_product_3" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_3" name="minimal_quantity">
                                                            <input type="hidden" value="42" class="id_product_attribute id_product_attribute_3" name="id_product_attribute">
                                                            <input type="hidden" value="3" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_3" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_3" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="3" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                          <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="49" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/4-49-the-adventure-begins-framed-poster.html#/3-size-l/11-color-black" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/34-home_default/the-adventure-begins-framed-poster.jpg"
                                                      alt = "Emperor&#039;s Clouds and Mist®..."
                                                      data-full-size-image-url = "frontend_asset/34-large_default/the-adventure-begins-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="4"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="4" data-id-product-attribute="49" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/4-49-the-adventure-begins-framed-poster.html#/3-size-l/11-color-black">Emperor&#039;s Clouds and Mist®...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid matt finish and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="29" class="quantity_product quantity_product_4" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_4" name="minimal_quantity">
                                                            <input type="hidden" value="49" class="id_product_attribute id_product_attribute_4" name="id_product_attribute">
                                                            <input type="hidden" value="4" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_4" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_4" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="4" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="55" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="best-selling/5-55-today-is-a-good-day-framed-poster.html#/4-size-xl/15-color-green" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/36-home_default/today-is-a-good-day-framed-poster.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/36-large_default/today-is-a-good-day-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="5"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="5" data-id-product-attribute="55" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="best-selling/5-55-today-is-a-good-day-framed-poster.html#/4-size-xl/15-color-green">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid paper with matt finish and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_5" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_5" name="minimal_quantity">
                                                            <input type="hidden" value="55" class="id_product_attribute id_product_attribute_5" name="id_product_attribute">
                                                            <input type="hidden" value="5" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_5" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_5" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="5" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                          <article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="52" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/6-52-mug-the-best-is-yet-to-come.html#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/38-home_default/mug-the-best-is-yet-to-come.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/38-large_default/mug-the-best-is-yet-to-come.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="6"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="6" data-id-product-attribute="52" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/6-52-mug-the-best-is-yet-to-come.html#/2-size-m/14-color-blue">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug, 325ml.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_6" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_6" name="minimal_quantity">
                                                            <input type="hidden" value="52" class="id_product_attribute id_product_attribute_6" name="id_product_attribute">
                                                            <input type="hidden" value="6" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_6" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_6" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="6" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="58" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/7-58-mug-the-adventure-begins.html#/4-size-xl/18-color-pink" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/40-home_default/mug-the-adventure-begins.jpg"
                                                      alt = "Jade Citrus Mint™..."
                                                      data-full-size-image-url = "frontend_asset/40-large_default/mug-the-adventure-begins.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="7"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="7" data-id-product-attribute="58" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/7-58-mug-the-adventure-begins.html#/4-size-xl/18-color-pink">Jade Citrus Mint™...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug. 325ml</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_7" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_7" name="minimal_quantity">
                                                            <input type="hidden" value="58" class="id_product_attribute id_product_attribute_7" name="id_product_attribute">
                                                            <input type="hidden" value="7" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_7" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_7" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="7" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                          <article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="61" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/8-61-mug-today-is-a-good-day.html#/4-size-xl/13-color-orange" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/42-home_default/mug-today-is-a-good-day.jpg"
                                                      alt = "Emperor&#039;s Clouds and Mist®..."
                                                      data-full-size-image-url = "frontend_asset/42-large_default/mug-today-is-a-good-day.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="8"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="8" data-id-product-attribute="61" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/8-61-mug-today-is-a-good-day.html#/4-size-xl/13-color-orange">Emperor&#039;s Clouds and Mist®...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug. 325ml</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="0" class="quantity_product quantity_product_8" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_8" name="minimal_quantity">
                                                            <input type="hidden" value="61" class="id_product_attribute id_product_attribute_8" name="id_product_attribute">
                                                            <input type="hidden" value="8" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_8" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_8 disabled" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="8" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="64" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/9-64-mountain-fox-cushion.html#/3-size-l/16-color-yellow" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/44-home_default/mountain-fox-cushion.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/44-large_default/mountain-fox-cushion.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="9"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="9" data-id-product-attribute="64" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-99%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/9-64-mountain-fox-cushion.html#/3-size-l/16-color-yellow">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Cushion with removable cover and invisible zip on the back. 32x32cm</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="0.19">$0.19</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$18.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_9" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_9" name="minimal_quantity">
                                                            <input type="hidden" value="64" class="id_product_attribute id_product_attribute_9" name="id_product_attribute">
                                                            <input type="hidden" value="9" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_9" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_9" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="9" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                          <article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="67" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/10-67-brown-bear-cushion.html#/4-size-xl/5-color-grey" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/48-home_default/brown-bear-cushion.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/48-large_default/brown-bear-cushion.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="10"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="10" data-id-product-attribute="67" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/10-67-brown-bear-cushion.html#/4-size-xl/5-color-grey">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Cushion with removable cover and invisible zip on the back. 32x32cm</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="18.9">$18.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_10" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_10" name="minimal_quantity">
                                                            <input type="hidden" value="67" class="id_product_attribute id_product_attribute_10" name="id_product_attribute">
                                                            <input type="hidden" value="10" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_10" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_10" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="10" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                    </div>
                                 </div>
                                 <script type="text/javascript">
                                    ap_list_functions.push(function(){
                                        if($('#carousel-1676220065').parents('.tab-pane').length)
                                        {
                                            if(!$('#carousel-1676220065').parents('.tab-pane').hasClass('active'))
                                            {
                                                var width_owl_active_tab = $('#carousel-1676220065').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();
                                                $('#carousel-1676220065').width(width_owl_active_tab);
                                            }
                                        }
                                     $('#carousel-1676220065').imagesLoaded( function() {
                                       $('#carousel-1676220065').owlCarousel({
                                         items :             4,
                                         itemsDesktop :      [1200,3],
                                         itemsDesktopSmall : [992,3],
                                         itemsTablet :       [768,2],
                                         itemsMobile :       [576,1],
                                         itemsCustom :       [[826, 4], [576, 3], [376, 2], [0, 1]],
                                         singleItem :        false,       // true : show only 1 item
                                         itemsScaleUp :      false,
                                         slideSpeed :        200,        //  change speed when drag and drop a item
                                         paginationSpeed :   800,       // change speed when go next page
                                         autoPlay :          false,       // time to show each item
                                         stopOnHover :       false,
                                         navigation :        false,
                                         navigationText :    ["&lsaquo;", "&rsaquo;"],
                                         scrollPerPage :     false,
                                         pagination :        false,       // show bullist
                                         paginationNumbers : false,       // show number
                                         responsive :        true,
                                         responsiveRefreshRate : 0,
                                         lazyLoad :          false,
                                         lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                         lazyEffect :        "fade",
                                         autoHeight :        false,
                                         mouseDrag :         true,
                                         touchDrag :         true,
                                         addClassActive :    true,
                                         direction:          false,
                                         afterInit: OwlLoaded,
                                         afterAction : SetOwlCarouselFirstLast,
                                       });
                                     });
                                    });
                                    function OwlLoaded(el){
                                        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                                        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                                            el.width('100%');
                                    };

                                 </script>
                              </div>
                           </div>
                           <!-- end modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl -->
                        </div>
                        <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                     </div>
                  </div>
               </div>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- begin modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
               <div class="wrapper"
                  style="background:url(frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/h2-bn4.jpg)  no-repeat center center"
                  >
                  <div class="container">
                     <div        class="row box-img-text ApRow  has-bg bg-fullwidth-container"
                        style=""                >
                        <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                        <div    class="col-sm-12 col-xs-12 col-sp-12 col-md-12 col-lg-12 col-xl-12  ApColumn "
                           >
                           <!-- begin modules/appagebuilder/views/templates/hook/ApGeneral.tpl -->
                           <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
                           <div     class="block block-img-text ApRawHtml">
                              <div class="box-text">
                                 <h2>Tea culture</h2>
                                 <p>Tea may be consumed early in the day to heighten calm alertness; it contains L-theanine, theophylline, and bound caffeine (sometimes called theine). Decaffeinated brands are also sold. While herbal teas are also referred to as tea, most of them do not contain leaves from the tea plant.</p>
                                 <p><a class="btn" href="#" title="Discover now">Discover now</a></p>
                              </div>
                           </div>
                           <!-- end modules/appagebuilder/views/templates/hook/ApGeneral.tpl -->
                        </div>
                        <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                     </div>
                  </div>
               </div>
               <script>
                  ap_list_functions.push(function(){
                      $.stellar({horizontalScrolling:false});
                  });
               </script>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- begin modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
               <div class="wrapper"
                  >
                  <div class="container">
                     <div        class="row h2-product-list ApRow  has-bg bg-boxed"
                        style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                        <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                        <div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn "
                           >
                           <!-- begin modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl -->
                           <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                           <div class="block products_block exclusive appagebuilder ApProductCarousel">
                              <h4 class="title_block">
                                 Featured Products
                              </h4>
                              <div class="block_content">
                                 <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                                 <div class="owl-row">
                                    <div class="timeline-wrapper clearfix prepare"
                                       data-item="4"
                                       data-xl="4"
                                       data-lg="3"
                                       data-md="4"
                                       data-sm="3"
                                       data-m="1"
                                       >
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="carousel-3612068417" class="owl-carousel owl-theme owl-loading product-default">
                                       <div class="item first">
                                          <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="37" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="black-tea/1-37-hummingbird-printed-t-shirt.html#/3-size-l/18-color-pink" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/24-home_default/hummingbird-printed-t-shirt.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/24-large_default/hummingbird-printed-t-shirt.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="1"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="1" data-id-product-attribute="37" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-20%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="black-tea/1-37-hummingbird-printed-t-shirt.html#/3-size-l/18-color-pink">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <div class="star star_on"></div>
                                                            <meta itemprop="worstRating" content = "0" />
                                                            <meta itemprop="ratingValue" content = "5" />
                                                            <meta itemprop="bestRating" content = "5" />
                                                         </div>
                                                         <span class="nb-revews"><span itemprop="reviewCount">1</span> Review(s)</span>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Recharge your skin with this refreshing toner, made with Jeju Green Tea. Especially great for combination skin, it balances, moisturizes, and...</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="19.12">$19.12</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$23.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="0" class="quantity_product quantity_product_1" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_1" name="minimal_quantity">
                                                            <input type="hidden" value="37" class="id_product_attribute id_product_attribute_1" name="id_product_attribute">
                                                            <input type="hidden" value="1" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_1" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_1 disabled" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="1" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="46" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/2-46-brown-bear-printed-sweater.html#/4-size-xl/11-color-black" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/30-home_default/brown-bear-printed-sweater.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/30-large_default/brown-bear-printed-sweater.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="2"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="2" data-id-product-attribute="46" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-20%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/2-46-brown-bear-printed-sweater.html#/4-size-xl/11-color-black">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Regular fit, round neckline, long sleeves. 100% cotton, brushed inner side for extra comfort. </div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="28.72">$28.72</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$35.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="27" class="quantity_product quantity_product_2" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_2" name="minimal_quantity">
                                                            <input type="hidden" value="46" class="id_product_attribute id_product_attribute_2" name="id_product_attribute">
                                                            <input type="hidden" value="2" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_2" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_2" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="2" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="42" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="best-selling/3-42-the-best-is-yet-to-come-framed-poster.html#/1-size-s/10-color-red" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/59-home_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                      alt = "Jade Citrus Mint™..."
                                                      data-full-size-image-url = "frontend_asset/59-large_default/the-best-is-yet-to-come-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="3"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="3" data-id-product-attribute="42" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="best-selling/3-42-the-best-is-yet-to-come-framed-poster.html#/1-size-s/10-color-red">Jade Citrus Mint™...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid matt paper and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="29" class="quantity_product quantity_product_3" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_3" name="minimal_quantity">
                                                            <input type="hidden" value="42" class="id_product_attribute id_product_attribute_3" name="id_product_attribute">
                                                            <input type="hidden" value="3" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_3" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_3" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="3" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="49" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/4-49-the-adventure-begins-framed-poster.html#/3-size-l/11-color-black" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/34-home_default/the-adventure-begins-framed-poster.jpg"
                                                      alt = "Emperor&#039;s Clouds and Mist®..."
                                                      data-full-size-image-url = "frontend_asset/34-large_default/the-adventure-begins-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="4"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="4" data-id-product-attribute="49" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/4-49-the-adventure-begins-framed-poster.html#/3-size-l/11-color-black">Emperor&#039;s Clouds and Mist®...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid matt finish and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="29" class="quantity_product quantity_product_4" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_4" name="minimal_quantity">
                                                            <input type="hidden" value="49" class="id_product_attribute id_product_attribute_4" name="id_product_attribute">
                                                            <input type="hidden" value="4" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_4" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_4" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="4" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="55" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="best-selling/5-55-today-is-a-good-day-framed-poster.html#/4-size-xl/15-color-green" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/36-home_default/today-is-a-good-day-framed-poster.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/36-large_default/today-is-a-good-day-framed-poster.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="5"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="5" data-id-product-attribute="55" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="best-selling/5-55-today-is-a-good-day-framed-poster.html#/4-size-xl/15-color-green">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Printed on rigid paper with matt finish and smooth surface.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="29">$29.00</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_5" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_5" name="minimal_quantity">
                                                            <input type="hidden" value="55" class="id_product_attribute id_product_attribute_5" name="id_product_attribute">
                                                            <input type="hidden" value="5" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_5" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_5" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="5" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="52" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/6-52-mug-the-best-is-yet-to-come.html#/2-size-m/14-color-blue" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/38-home_default/mug-the-best-is-yet-to-come.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/38-large_default/mug-the-best-is-yet-to-come.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="6"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="6" data-id-product-attribute="52" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/6-52-mug-the-best-is-yet-to-come.html#/2-size-m/14-color-blue">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug, 325ml.</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_6" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_6" name="minimal_quantity">
                                                            <input type="hidden" value="52" class="id_product_attribute id_product_attribute_6" name="id_product_attribute">
                                                            <input type="hidden" value="6" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_6" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_6" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="6" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="58" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/7-58-mug-the-adventure-begins.html#/4-size-xl/18-color-pink" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/40-home_default/mug-the-adventure-begins.jpg"
                                                      alt = "Jade Citrus Mint™..."
                                                      data-full-size-image-url = "frontend_asset/40-large_default/mug-the-adventure-begins.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="7"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="7" data-id-product-attribute="58" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/7-58-mug-the-adventure-begins.html#/4-size-xl/18-color-pink">Jade Citrus Mint™...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug. 325ml</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_7" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_7" name="minimal_quantity">
                                                            <input type="hidden" value="58" class="id_product_attribute id_product_attribute_7" name="id_product_attribute">
                                                            <input type="hidden" value="7" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_7" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_7" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="7" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="61" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="home/8-61-mug-today-is-a-good-day.html#/4-size-xl/13-color-orange" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/42-home_default/mug-today-is-a-good-day.jpg"
                                                      alt = "Emperor&#039;s Clouds and Mist®..."
                                                      data-full-size-image-url = "frontend_asset/42-large_default/mug-today-is-a-good-day.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="8"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="8" data-id-product-attribute="61" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="home/8-61-mug-today-is-a-good-day.html#/4-size-xl/13-color-orange">Emperor&#039;s Clouds and Mist®...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">White Ceramic Mug. 325ml</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="11.9">$11.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="0" class="quantity_product quantity_product_8" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_8" name="minimal_quantity">
                                                            <input type="hidden" value="61" class="id_product_attribute id_product_attribute_8" name="id_product_attribute">
                                                            <input type="hidden" value="8" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_8" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_8 disabled" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="8" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="64" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/9-64-mountain-fox-cushion.html#/3-size-l/16-color-yellow" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/44-home_default/mountain-fox-cushion.jpg"
                                                      alt = "Iced Peach Green® Pitcher..."
                                                      data-full-size-image-url = "frontend_asset/44-large_default/mountain-fox-cushion.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="9"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                      <li class="product-flag online-only">Online only</li>
                                                      <li class="product-flag on-sale">On sale!</li>
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="9" data-id-product-attribute="64" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag discount-percentage">-99%</label>
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/9-64-mountain-fox-cushion.html#/3-size-l/16-color-yellow">Iced Peach Green® Pitcher...</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Cushion with removable cover and invisible zip on the back. 32x32cm</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping has_discount">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="0.19">$0.19</span>
                                                      </span>
                                                      <span class="sr-only">Regular price</span>
                                                      <span class="regular-price">$18.90</span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_9" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_9" name="minimal_quantity">
                                                            <input type="hidden" value="64" class="id_product_attribute id_product_attribute_9" name="id_product_attribute">
                                                            <input type="hidden" value="9" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_9" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_9" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="9" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                       <div class="item">
                                          <article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="67" itemscope itemtype="http://schema.org/Product">
                                             <div class="thumbnail-container">
                                                <div class="product-image">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <a href="peach-tea/10-67-brown-bear-cushion.html#/4-size-xl/5-color-grey" class="thumbnail product-thumbnail">
                                                   <img
                                                      class="img-fluid"
                                                      src = "frontend_asset/48-home_default/brown-bear-cushion.jpg"
                                                      alt = "Winterberry Tea Blend"
                                                      data-full-size-image-url = "frontend_asset/48-large_default/brown-bear-cushion.jpg"
                                                      >
                                                   <span class="product-additional" data-idproduct="10"></span>
                                                   </a>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <ul class="product-flags">
                                                   </ul>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <div class="wishlist">
                                                      <a class="leo-wishlist-button btn-primary btn" href="javascript:void(0)" data-id-wishlist="" data-id-product="10" data-id-product-attribute="67" title="Add to Wishlist">
                                                      <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                      <span class="leo-wishlist-bt-content">
                                                      <i class="zmdi zmdi-favorite-outline"></i>
                                                      </span>
                                                      </a>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_wishlist_button.tpl -->
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <div class="box-label">
                                                      <label class="label product-flag new">New</label>
                                                   </div>
                                                </div>
                                                <div class="product-meta">
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <h3 class="h3 product-title" itemprop="name"><a href="peach-tea/10-67-brown-bear-cushion.html#/4-size-xl/5-color-grey">Winterberry Tea Blend</a></h3>
                                                   <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   <!-- begin module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="leo-list-product-reviews" >
                                                      <div class="leo-list-product-reviews-wraper">
                                                         <div class="star_content clearfix">
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                            <div class="star"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <!-- end module:leofeature/views/templates/hook/leo_list_product_review.tpl -->
                                                   <div class="product-description-short" itemprop="description">Cushion with removable cover and invisible zip on the back. 32x32cm</div>
                                                   <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
                                                   <div class="product-price-and-shipping ">
                                                      <span class="sr-only">Price</span>
                                                      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                      <span itemprop="priceCurrency" content="USD"></span><span itemprop="price" content="18.9">$18.90</span>
                                                      </span>
                                                   </div>
                                                   <div class="functional-buttons clearfix">
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <div class="button-container cart">
                                                         <form action="https://demo1.leotheme.com/leo_zlin_demo/en/cart" method="post">
                                                            <input type="hidden" name="token" value="f43db43c0a53847292efcc1cd99adfa1">
                                                            <input type="hidden" value="30" class="quantity_product quantity_product_10" name="quantity_product">
                                                            <input type="hidden" value="1" class="minimal_quantity minimal_quantity_10" name="minimal_quantity">
                                                            <input type="hidden" value="67" class="id_product_attribute id_product_attribute_10" name="id_product_attribute">
                                                            <input type="hidden" value="10" class="id_product" name="id_product">
                                                            <input type="hidden" name="id_customization" value="" class="product_customization_id">
                                                            <input type="hidden" class="input-group form-control qty qty_product qty_product_10" name="qty" value="1" data-min="1">
                                                            <button class="btn add-to-cart leo-bt-cart leo-bt-cart_10" data-button-action="add-to-cart" type="submit">
                                                            <span class="leo-loading cssload-speeding-wheel"></span>
                                                            <span class="leo-bt-cart-content">
                                                            <span class="name-btn-product">Add to cart</span>
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                            </span>
                                                            </button>
                                                         </form>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_cart_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <div class="quickview hidden-md-down">
                                                         <a
                                                            href="#"
                                                            class="quick-view btn-product"
                                                            data-link-action="quickview"
                                                            >
                                                         <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-quickview-bt-content">
                                                         <i class="zmdi zmdi-crop-free"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                      <!-- begin /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <div class="compare">
                                                         <a class="leo-compare-button btn-primary btn-product btn" href="javascript:void(0)" data-id-product="10" title="Add to Compare">
                                                         <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                         <span class="leo-compare-bt-content">
                                                         <i class="zmdi zmdi-collection-text"></i>
                                                         </span>
                                                         </a>
                                                      </div>
                                                      <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/themes/leo_zlin/modules/leofeature/views/templates/hook/leo_compare_button.tpl -->
                                                      <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                                   </div>
                                                </div>
                                             </div>
                                          </article>
                                       </div>
                                    </div>
                                 </div>
                                 <script type="text/javascript">
                                    ap_list_functions.push(function(){
                                        if($('#carousel-3612068417').parents('.tab-pane').length)
                                        {
                                            if(!$('#carousel-3612068417').parents('.tab-pane').hasClass('active'))
                                            {
                                                var width_owl_active_tab = $('#carousel-3612068417').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();
                                                $('#carousel-3612068417').width(width_owl_active_tab);
                                            }
                                        }
                                     $('#carousel-3612068417').imagesLoaded( function() {
                                       $('#carousel-3612068417').owlCarousel({
                                         items :             4,
                                         itemsDesktop :      [1200,3],
                                         itemsDesktopSmall : [992,3],
                                         itemsTablet :       [768,2],
                                         itemsMobile :       [576,1],
                                         itemsCustom :       [[826, 4], [576, 3], [376, 2], [0, 1]],
                                         singleItem :        false,       // true : show only 1 item
                                         itemsScaleUp :      false,
                                         slideSpeed :        200,        //  change speed when drag and drop a item
                                         paginationSpeed :   800,       // change speed when go next page
                                         autoPlay :          false,       // time to show each item
                                         stopOnHover :       false,
                                         navigation :        false,
                                         navigationText :    ["&lsaquo;", "&rsaquo;"],
                                         scrollPerPage :     false,
                                         pagination :        false,       // show bullist
                                         paginationNumbers : false,       // show number
                                         responsive :        true,
                                         responsiveRefreshRate : 0,
                                         lazyLoad :          false,
                                         lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                         lazyEffect :        "fade",
                                         autoHeight :        false,
                                         mouseDrag :         true,
                                         touchDrag :         true,
                                         addClassActive :    true,
                                         direction:          false,
                                         afterInit: OwlLoaded,
                                         afterAction : SetOwlCarouselFirstLast,
                                       });
                                     });
                                    });
                                    function OwlLoaded(el){
                                        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
                                        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
                                            el.width('100%');
                                    };

                                 </script>
                              </div>
                           </div>
                           <!-- end modules/appagebuilder/views/templates/hook/ApProductCarousel.tpl -->
                        </div>
                        <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                     </div>
                  </div>
               </div>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- begin modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
               <div        class="row ApRow  "
                  style=""                >
                  <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn "
                     >
                     <!-- begin modules/appagebuilder/views/templates/hook/ApImageGallery.tpl -->
                     <!-- @file modules\appagebuilder\views\templates\hook\ApImageGallery -->
                     <div class="ApImageGallery form_2887665123281825 widget ap-image-gallery">
                        <div class="widget-images block ApImageGallery">
                           <div class="block_content clearfix">
                              <div class="images-list clearfix">
                                 <div class="row show_image">
                                    <div class="image-item  col-md-2-4  col-xs-12">
                                       <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery1.jpg">
                                       <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery1.jpg" alt=""/>
                                       </a>
                                    </div>
                                    <div class="image-item  col-md-2-4  col-xs-12">
                                       <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery2.jpg">
                                       <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery2.jpg" alt=""/>
                                       </a>
                                    </div>
                                    <div class="image-item  col-md-2-4  col-xs-12">
                                       <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery3.jpg">
                                       <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery3.jpg" alt=""/>
                                       </a>
                                    </div>
                                    <div class="image-item  col-md-2-4  col-xs-12">
                                       <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery4.jpg">
                                       <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery4.jpg" alt=""/>
                                       </a>
                                    </div>
                                    <div class="image-item  col-md-2-4  col-xs-12">
                                       <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery5.jpg">
                                       <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery5.jpg" alt=""/>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="alert alert-danger image_error" style="display:none"></div>
                           <div class="image-template" style="display:none">
                              <div class="image-item  col-md-2-4  col-xs-12">
                                 <a class="fancybox" data-fancybox-group="apimagegalleryform_2887665123281825" href= "frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery5.jpg">
                                 <img class="replace-2x img-fluid" src="frontend_asset/themes/leo_zlin/assets/img/modules/appagebuilder/images/images-gallery/img-gallery5.jpg" alt=""/>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <script type="text/javascript">
                           ap_list_functions.push(function(){
                               $(".fancybox").fancybox({
                                   openEffect : 'none',
                                   closeEffect : 'none'
                               });
                           });
                        </script>
                     </div>
                     <!-- end modules/appagebuilder/views/templates/hook/ApImageGallery.tpl -->
                  </div>
                  <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
               </div>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- begin modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
               <div class="wrapper"
                  >
                  <div class="container">
                     <div        class="row box-blog box-padding ApRow  has-bg bg-boxed"
                        style="background: no-repeat;"        data-bg_data=" no-repeat"        >
                        <!-- begin modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                        <div    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12  ApColumn "
                           >
                           <!-- begin modules/appagebuilder/views/templates/hook/ApBlog.tpl -->
                           <!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
                           <div id="blog-form_8876701337304758" class="block latest-blogs exclusive appagebuilder ApBlog">
                              <h4 class="title_block">
                                 Latest News
                              </h4>
                              <div class="block_content">
                                 <!-- @file modules\appagebuilder\views\templates\hook\BlogOwlCarousel -->
                                 <div class="owl-row">
                                    <div class="timeline-wrapper clearfix prepare"
                                       data-item="3"
                                       data-xl="3"
                                       data-lg="3"
                                       data-md="2"
                                       data-sm="2"
                                       data-m="1"
                                       >
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="timeline-parent">
                                          <div class="timeline-item">
                                             <div class="animated-background">
                                                <div class="background-masker content-top"></div>
                                                <div class="background-masker content-second-line"></div>
                                                <div class="background-masker content-third-line"></div>
                                                <div class="background-masker content-fourth-line"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="carousel-3323878726" class="owl-carousel owl-theme owl-loading">
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b16.html" title="Nullam ullamcorper nisl quis ornare molestie" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/16/953_567/b-b-blog-1.jpg"
                                                      alt="Nullam ullamcorper nisl quis ornare molestie"
                                                      title="Nullam ullamcorper nisl quis ornare molestie"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b16.html" title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis ornare...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Suspendisse posuere, diam in bibendum lobortis, turpis ipsum aliquam risus, sit amet dictum...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b15.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/15/953_567/b-b-blog-2.jpg"
                                                      alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"
                                                      title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b15.html" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at eleifend leo mi elit Aenean...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Turpis at eleifend leo mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b14.html" title="Morbi condimentum molestie Nam enim odio sodales" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/14/953_567/b-b-blog-3.jpg"
                                                      alt="Morbi condimentum molestie Nam enim odio sodales"
                                                      title="Morbi condimentum molestie Nam enim odio sodales"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b14.html" title="Morbi condimentum molestie Nam enim odio sodales">Morbi condimentum molestie Nam enim...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Sed mauris Pellentesque elit Aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b13.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/13/953_567/b-b-blog-4.jpg"
                                                      alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"
                                                      title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b13.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b12.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/12/953_567/b-b-blog-5.jpg"
                                                      alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"
                                                      title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b12.html" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium elit mauris cursus...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Mi vitae magnis Fusce laoreet nibh felis porttitor laoreet Vestibulum faucibus. At Nulla id...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b11.html" title="Ipsum cursus vestibulum at interdum Vivamus" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/11/953_567/b-b-blog-6.jpg"
                                                      alt="Ipsum cursus vestibulum at interdum Vivamus"
                                                      title="Ipsum cursus vestibulum at interdum Vivamus"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/ipsum-cursus-vestibulum-at-interdum-vivamus-b11.html" title="Ipsum cursus vestibulum at interdum Vivamus">Ipsum cursus vestibulum at interdum...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Donec tellus Nulla lorem Nullam elit id ut elit feugiat lacus. Congue eget dapibus congue...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                       <div class="item">
                                          <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                                          <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                                             <div class="left-block">
                                                <div class="blog-image-container">
                                                   <a class="blog_img_link" href="blog/at-risus-pretium-urna-tortor-metus-fringilla-b10.html" title="At risus pretium urna tortor metus fringilla" itemprop="url">
                                                   <img class="img-fluid" src="frontend_asset/img/leoblog/b/1/10/953_567/b-b-blog-7.jpg"
                                                      alt="At risus pretium urna tortor metus fringilla"
                                                      title="At risus pretium urna tortor metus fringilla"
                                                      width="953"            height="567"           itemprop="image" />
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="right-block">
                                                <h5 class="blog-title" itemprop="name"><a href="blog/at-risus-pretium-urna-tortor-metus-fringilla-b10.html" title="At risus pretium urna tortor metus fringilla">At risus pretium urna tortor metus...</a></h5>
                                                <div class="blog-meta">
                                                   <span class="created">
                                                      <span class=""></span>
                                                      <time class="date" datetime="2019">
                                                         January
                                                         <!-- day of month -->
                                                         4
                                                      </time>
                                                   </span>
                                                </div>
                                                <p class="blog-desc" itemprop="description">
                                                   Odio ut pretium ligula quam Vestibulum consequat convallis fringilla Vestibulum nulla. Accumsan...
                                                </p>
                                             </div>
                                             <div class="hidden-xl-down hidden-xl-up datetime-translate">
                                                Sunday
                                                Monday
                                                Tuesday
                                                Wednesday
                                                Thursday
                                                Friday
                                                Saturday
                                                January
                                                February
                                                March
                                                April
                                                May
                                                June
                                                July
                                                August
                                                September
                                                October
                                                November
                                                December
                                                st
                                                nd
                                                rd
                                                th
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <script type="text/javascript">
                                    ap_list_functions.push(function(){
                                     $('#carousel-3323878726').imagesLoaded( function() {
                                       $('#carousel-3323878726').owlCarousel({
                                         items :             3,
                                         itemsDesktop :      [1200,3],
                                         itemsDesktopSmall : [992,2],
                                         itemsTablet :       [768,2],
                                         itemsMobile :       [576,1],
                                         itemsCustom :       false,
                                         singleItem :        false,       // true : show only 1 item
                                         itemsScaleUp :      false,
                                         slideSpeed :        200,        //  change speed when drag and drop a item
                                         paginationSpeed :   800,       // change speed when go next page
                                         autoPlay :          false,       // time to show each item
                                         stopOnHover :       false,
                                         navigation :        false,
                                         navigationText :    ["&lsaquo;", "&rsaquo;"],
                                         scrollPerPage :     false,
                                         pagination :        false,       // show bullist
                                         paginationNumbers : false,       // show number
                                         responsive :        true,
                                         lazyLoad :          false,
                                         lazyFollow :        false,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                         lazyEffect :        "fade",
                                         autoHeight :        false,
                                         mouseDrag :         true,
                                         touchDrag :         true,
                                         addClassActive :    true,
                                         direction:          false,
                                         afterInit: OwlLoaded,
                                         afterAction : SetOwlCarouselFirstLast,
                                       });
                                     });
                                    });
                                    function OwlLoaded(el){
                                        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');

                                    };

                                 </script>
                              </div>
                           </div>
                           <!-- end modules/appagebuilder/views/templates/hook/ApBlog.tpl -->
                        </div>
                        <!-- end modules/appagebuilder/views/templates/hook/ApColumn.tpl -->
                     </div>
                  </div>
               </div>
               <!-- end modules/appagebuilder/views/templates/hook/ApRow.tpl -->
               <!-- end /var/www/demo1.leotheme.com/public_html/leo_zlin_demo/modules/appagebuilder/views/templates/hook/appagebuilder.tpl -->
               <!-- end module:appagebuilder/views/templates/hook/appagebuilder.tpl -->
            </section>
            <footer class="page-footer">
               <!-- Footer content -->
            </footer>
         </section>
      </div>
   </div>
</section>
@endsection
