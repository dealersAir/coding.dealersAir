<!--FOOTER/-->
<footer class="footer">
	<div class="row wrap footer__wrap">
		
	</div>
</footer>

<!--/FOOTER-->

</div>
<!--/WRAPPER-->

<!--POPUPs/-->
<div class="popup">

	<div id="popup-1" class="popup__window" style="width: 550px;">
		<button class="popup__close btn-close"></button>
		<div class="popup__inner" style="height: 100px;">
			<a href="#message-popup" class="js-open-msg-popup">POPUP с сообщением</a>
		</div> 
	</div>

	<div id="popup-2" class="popup__window" style="width: 550px;">
		<button class="popup__close btn-close"></button>
		<div class="popup__inner" style="height: 1300px;">
			
		</div>
	</div>

	<div id="message-popup" class="popup__window" style="width: 550px;">
		<button class="popup__close btn-close"></button>
		<div class="popup__inner">
			
		</div>
	</div>

	<div id="media-popup" class="popup-media popup__window popup-media">
		<button class="popup__close btn-close"></button>
		<div class="popup__inner">
			<div class="popup-media__box">
				<img src="#" class="ovf-image popup-media__image" alt="photo">
				<a href="#" class="popup-media__play"></a>
				<button class="popup-media__arr popup-media__arr_l" data-dir="prev"></button>
				<button class="popup-media__arr popup-media__arr_r" data-dir="next"></button>
				<!--iframe src="#" class="popup-media__iframe" allowfullscreen></iframe-->
			</div>
			<div class="popup-media__bar row">
				<div class="col-6 vw1000-col">
					<div class="popup-media__bar-date popup-media__data-0">
						<!--data string 1-->
					</div>
					<div class="popup-media__bar-tit popup-media__data-1">
						<!--data string 2-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="rules" class="p-rules popup__window">
		<button class="popup__close btn-close"></button>
		<div class="popup__inner" style="height: 100px;">
			
		</div> 
	</div>

</div>
<!--/POPUPs-->

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/easing.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/mousewheel.min.js"></script>
<script src="/js/scrollpane.min.js"></script>
<script src="/js/images.js"></script>
<script src="/js/popup.js"></script>
<script src="/js/button.js"></script>
<script src="/js/form.js"></script>
<script src="/js/common.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49744337-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter25953469 = new Ya.Metrika({
                    id:25953469,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/25953469" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>