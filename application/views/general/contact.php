<section class="contact-us-intro">
    <div class="container-fluid">
        <div id="map">
            <div class="overlay"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.3690109931513!2d51.409810237211595!3d35.73266099505982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQzJzU3LjYiTiA1McKwMjQnMzkuMiJF!5e0!3m2!1sen!2s!4v1498768428995" width="100%" height="100%" scrolling="no" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<section class="contact-us">
    <div class="container">

        <div class="row">
            <div class="col-4">
                <div class="box">
                    <div class="head">
                        <span class="fa-stack fa-lg">
                          <i style="color: #ED1F24" class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="body">
                        <h4 class="text-right">آدرس</h4>
                        <p>تهران، خیابان ولی‌عصر، نرسیده به پارک ساعی، برج نگین ساعی، طبقه 12، واحد 1202 &nbsp;&nbsp;&nbsp; ک.پ:
                            1433893975</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="head">
                        <span class="fa-stack fa-lg">
                          <i style="color: #ED1F24" class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="body">
                        <h4 class="text-right">تلفن</h4>
                        <p class="text-center">88717100 - 021</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div class="head">
                        <span class="fa-stack fa-lg">
                          <i style="color: #ED1F24" class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="body">
                        <h4 class="text-right">ایمیل</h4>
                        <p class="text-center">loopetoo.pb[at]gmail[dot]com</p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>


        <div class="row">
            <div class="col-12">
                <div class="gray">
                    <form data-toggle="validator" role="form">
                        <div class="row">

                            <div class="form-group has-feedback col-sm-4">
                                <label for="inputName" class="control-label">نام و نام خانوادگی</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="inputName" placeholder="نام و نام خانوادگی" required>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback col-sm-4">
                                <label for="inputPhone" class="control-label">شماره تماس</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input type="text" maxlength="15" class="form-control" id="inputPhone" placeholder="شماره تماس" required>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback col-sm-4">
                                <label for="inputEmail" class="control-label">آدرس ایمیل</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="آدرس ایمیل" data-error="That email address is invalid" required>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group has-feedback col-sm-12">
                                <label for="inputSubject" class="control-label">موضوع</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="text" class="form-control" id="inputSubject" placeholder="موضوع" required>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group has-feedback col-sm-12">
                                <label for="inputMessage" class="control-label">پیام شما</label>
                                <textarea type="text" class="form-control" id="inputMessage" placeholder="متن پیام شما" required></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $("#map").mouseenter(function () {
            $(".overlay").animate({top: '-700px'}, 800, 'easeOutQuint');
        });
        $("#map").mouseleave(function () {
            $(".overlay").animate({top: '0'}, 800, 'easeInQuint');
        });
    })
</script>