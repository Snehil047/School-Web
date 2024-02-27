<!-- footer__section__start -->
<div class="footerarea">
    <div class="container">
        <div class="footerarea__wrapper footerarea__wrapper__2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="footerarea__inner footerarea__about__us">
                        <div class="footerarea__heading">
                            <h3>About us</h3>
                        </div>
                        <div class="footerarea__content">
                            <p>Gurukul International School, Janjgir is run by MARS EDUCATION SOCIETY, Janjgir with firm belief that children are valuable assets for our country and we need to invest in their future adequately. <a href="#">Read More</a></p>
                        </div>
                        <div class="footerarea__icon footerarea__icon__2" style="text-align:start;">
                            <ul>
                                <li><a href="//facebook.com"><i class="icofont-facebook"></i></a></li>

                                <li><a href="//linkedin.com"><i class="icofont-linkedin"></i></a></li>

                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="footerarea__inner">
                        <div class="footerarea__heading">
                            <h3>Usefull Links</h3>
                        </div>
                        <div class="footerarea__list">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Academics</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Facilities</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                    <div class="footerarea__inner footerarea__padding__left">
                        <div class="footerarea__heading">
                            <h3>Location Map</h3>
                        </div>
                        <div class="footerarea__list">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.912785815945!2d82.5478240747413!3d22.014652453189598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a27c08f5aa50869%3A0x4198ac3a75b7009e!2sGurukul%20International%20School%20Janjgir!5e0!3m2!1sen!2sin!4v1708175317165!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                    <div class="footerarea__right__wraper footerarea__inner">
                        <div class="footerarea__heading">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footerarea__right__list">
                            <div class="aboutarea__list__2">
                                <ul>
                                    <li>
                                        <a class="text-white" href="tel:8184071000"> <i class="bi bi-telephone-fill"></i>+91-8184071000</a>
                                    </li>
                                    <li>
                                        <a class="text-white" href="mailto:info@marsgurukul.com"><i class="bi bi-envelope"></i> info@marsgurukul.com</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footerarea__copyright__wrapper footerarea__copyright__wrapper__2">
            <div class="col-md-12">
                <div class="footerarea__copyright__content footerarea__copyright__content__2 text-center">
                    <p>Design And Develop By <span><a target="_blank" href="https://www.spitech.in/">SpiTech Web Services Pvt. Ltd</a></span> </p>
                </div>
            </div>


        </div>
    </div>

</div>
</div>
<!-- footer__section__end -->

</main>





<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<!-- <script src="js/lightbox-plus-jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

<script>$(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        $('.filter').show('1000');
    }
    else
    {

        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});</script>

<script>
        let scrollContainer = document.querySelector(".gallery");
        let nextBtn = document.getElementById("nextBtn");
        let backBtn = document.getElementById("backBtn");
        let img = document.getElementById("1stImg");

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrollBehavior = "auto";
        });

        nextBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 900;
        });

        backBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 900;
        });
    </script>



</body>

</html>