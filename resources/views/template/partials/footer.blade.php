
<!-- footer -->
<footer class="bg-secondary">
    <div class="py-100 border-bottom" style="border-color: #454547 !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mb-5 mb-md-0 text-center text-md-left">
                        <!-- logo -->
                        <img src="{{asset('template/img/'.session('site_logo'))}}" alt="logo" class="mb-3">
                        <p class="text-white mb-30 mt-3">
                        Progressive Web App (PWA)<br>
                        December 3, 2019
                        Log Of Last Login History To Keep Check On Security Of Account
                        November 27, 2019
                        .</p>
                        <!-- social icon -->
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="ti-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <h4 class="text-white mb-4">Head Office</h4>
                    <p class="text-white">Plot # 2, County Park
                    Mahalaxmi Nagar, MR-5
                    Indore-452010 (M.P)
                    India<p>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6">
                <h4 class="text-white mb-4">Services</h4>
                <ul class="footer-links">
                     @foreach(session('catgs') as $catg)
                        <li>
                            <a href="{{$catg->catg_url !=null ? url($catg->catg_url) : '#'}}">{{$catg->catg_name}}</a>
                        </li>
                        
                    @endforeach
                 
                </ul>
                </div>  
                
                <div class="col-lg-3 col-md-12 offset-lg-1">
                    <div class="mt-5 mt-lg-0 text-center text-md-left">
                        <h4 class="mb-4 text-white">News Letter</h4>
                        <p>Get our newsletter twice a week for more tips, tricks, and trends.</p>
                        <form action="#" class="position-relative">
                            <input type="text" class="form-control subscribe" name="subscribe" id="Subscribe" placeholder="Enter Your Email">
                            <button class="btn-subscribe" type="submit" value="send">
                                <i class="ti-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-primary">Advocate Mail</span> &copy; 2019 All Right Reserved</p>
                </div>
                <div class="col-lg-6 col-md-7">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Sitemap</a>
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                            <a class="font-secondary text-white" href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" href="#">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- back to top -->
        <button class="back-to-top">
            <i class="ti-angle-up"></i>
        </button>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('template/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('template/plugins/magnific-popup/jquery.magnific.popup.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('template/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('template/plugins/filterizr/jquery.filterizr.min.js')}}"></script>


<script src="{{asset('template/plugins/syotimer/jquery.syotimer.js')}}"></script>
<!-- aos -->
<script src="{{asset('template/plugins/aos/aos.js')}}"></script>
<!-- swiper -->
<script src="{{asset('template/plugins/swiper/swiper.min.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('template/js/template.js')}}"></script>

</body>

<!-- Mirrored from demo.themefisher.com/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 09:05:21 GMT -->
</html>