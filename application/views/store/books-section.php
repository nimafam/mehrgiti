<section class="store">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="main">
                    <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                        <div class="cbp-vm-options">
                                <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
                                <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
                            <label for="filter"></label>
                            <select class="left" id="filter">
                                    <option class="curent">تمامی گروه‌های سنی</option>
                                    <option>خردسال</option>
                                    <option>کودک</option>
                                    <option>نوجوان</option>
                                    <option>جوان</option>
                            </select>

                            <input type="radio" onclick="filterSelection('all')" name="category" checked>نمایش همه
                            <input type="radio" onclick="filterSelection('poem')" name="category" checked>شعر
                            <input type="radio" onclick="filterSelection('story')" name="category" checked>داستان
                            <input type="radio" onclick="filterSelection('translate')" name="category" checked>ترجمه
                            <input type="radio" onclick="filterSelection('all')" name="category" checked>نمایشنامه


                        </div>
                        <ul class="gallery">
                            <li class="filterDiv  baby story">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/dastan/1/jelds.jpg"></a>
                                <h3 class="cbp-vm-title">گدلگدو و نی‌نی پسری</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add cd-add-to-cart" href="#" data-price="10000">سبد خرید</a>
                            </li>
                            <li class= "filterDiv baby story">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/dastan/2/jelds.jpg"></a>
                                <h3 class="cbp-vm-title">گدلگدو و نی‌نی دختری</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add cd-add-to-cart" href="#" data-price="10000">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby story">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/dastan/3/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">لوپه‌تو و نی‌نی پسری</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add cd-add-to-cart" href="#" data-price="10000">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby story">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/dastan/3/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">لوپه‌تو و نی‌نی دختری</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add cd-add-to-cart" href="#" data-price="10000">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/1/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">الاغی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add cd-add-to-cart" href="#" data-price="10000">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/2/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">خرگوشی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/3/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">خروسی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/4/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">روباهی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/5/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">زنبوری بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/6/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">کلاغی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/7/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">گربه‌ای بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/8/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">گوزنی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv baby poem">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/khordsal/9/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">هشت‌پایی بود</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/1/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">اینترنت مثل یک گودال است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/2/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">تو مثل خودت هستی</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/3/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">خانواده مثل یک کیک است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/4/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">دوستی مثل یک الاکلنگ است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/5/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">زمین بازی مثل یک جنگل است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/6/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">زندگی مثل باد است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/7/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">عشق مثل یک درخت است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                            <li class="filterDiv kid translate">
                                <a class="cbp-vm-image" href="#"><img src="<?php echo template_url('images'); ?>/translate/8/jeld.jpg"></a>
                                <h3 class="cbp-vm-title">نگرانی مثل یک ابر است</h3>
                                <div class="cbp-vm-price"><?php echo number_format(10000); ?>ريال</div>
                                <div class="cbp-vm-details">
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add" href="#">سبد خرید</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cd-cart-container empty">
    <a href="#0" class="cd-cart-trigger">
        Cart
        <ul class="count"> <!-- cart items count -->
            <li>0</li>
            <li>0</li>
        </ul> <!-- .count -->
    </a>

    <div class="cd-cart">
        <div class="wrapper">
            <header>
                <h2>سبد خرید</h2>
                <span class="undo">محصول حذف شد. <a href="#0">برگرداندن</a></span>
            </header>

            <div class="body">
                <ul>
                    <!-- products added to the cart will be inserted here using JavaScript -->
                </ul>
            </div>

            <footer>
                <a href="#0" class="checkout btn"><em>تکمیل خرید- تومان <span>0</span></em></a>
            </footer>
        </div>
    </div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->


<script type="text/javascript">
    $(document).ready(function() {
        $('select > option').on('click', function() {

            $('select#filter .current').removeClass('current');
            $(this).parent().addClass('current');

            var filterVal = $(this).text().toLowerCase().replace(' ','-');

            if(filterVal == 'all') {
                $('select#gallery option.hidden').fadeIn('slow').removeClass('hidden');
            } else {

                $('select#gallery option').each(function() {
                    if(!$(this).hasClass(filterVal)) {
                        $(this).fadeOut('normal').addClass('hidden');
                    } else {
                        $(this).fadeIn('slow').removeClass('hidden');
                    }
                });
            }

            return false;
        });
    });


    filterSelection('all')

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";

        for (i = 0; i < x.length; i++) {
            removeClass(x[i], "showItem");
            if(x[i].className.indexOf(c) > -1) addClass(x[i], "showItem");
        }
    }

    function removeClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for( i=0; i < arr2.length; i++){
            if(arr1.indexOf(arr2[i]) == -1){
                element.className += " " + arr2[i];
            }
        }
    }
    function addClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i=0; i < arr2.indexOf(arr2[i]); i++){
            while (arr1.indexOf(arr2[i]) > -1){
                arr1.splice(arr1.indexOf(arr2[i]), 1)
            }
        }
        element.className = arr1.join(" ");
    }

</script>