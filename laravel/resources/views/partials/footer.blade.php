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
</html>