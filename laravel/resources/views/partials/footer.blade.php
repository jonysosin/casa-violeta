            <footer>
                <?php if (isset($footerTitle) === true && isset($footerDetail) === true) { ?>
                    <div class="footer-extra">
                        <span class="footer-title">{{ $footerTitle }}</span>
                        <span class="footer-detail">{{ $footerDetail }}</span>
                    </div>
                <?php } else { ?>
                    <img class="social" src="{{ asset('img/social.png')}}" alt="">
                <?php } ?>
                <p class="copyright">TODOS LOS DERECHOS RESERVADOS. CASAVIOLETA* 2018</p>
            </footer>
        </div>
    </body>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>
    <script>
        // if (!!document.querySelector('#owl-slider')) {
        //     $(document).ready(function(){
        //         $('#owl-slider').owlCarousel({
        //             loop:true,
        //             margin:10,
        //             nav:true,
        //             responsive:{
        //                 0:{
        //                     items:1
        //                 },
        //                 600:{
        //                     items:3
        //                 },
        //                 1000:{
        //                     items:5
        //                 }
        //             }
        //         })
        //     });
        // }
        

        $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    loop:true,
                    nav: true,
                    items: 1
                })
            });

    </script>
    <script src="{{ asset('js/site.js') }}"></script>
</html>