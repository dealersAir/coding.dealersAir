<!-- FOOTER/ -->
<footer class="footer">
	<div class="row row_wrp">
		<div class="col-12">
			<ul class="foot-nav">
				<li class="foot-nav__item">
					<a href="/javascript" class="foot-nav__a">JavaScript</a>
				</li>
				<li class="foot-nav__item">
					<a href="/php" class="foot-nav__a">php</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row row_wrp">
		<div class="col-12">
			<div class="footer__txt">
				Шпаргалка программиста. Решение практических задач в программировании.
			</div>
      </div>
	</div>
	<div class="row row_wrp row_col-middle row_sm-x-nw">
		<div class="col col_grow">
			<div class="footer__txt">
				&copy; <?php echo date('Y'); ?> Dealers Air Coding, https://coding.dealersair.com<br>
				Licensed under <a href="#license" data-popup="#license" class="js-open-popup light-link light-link_rev light-link_dash">MIT License</a>
			</div>
      </div>
      <div class="col">
			<a href="https://dealersair.com" target="_blank" title="«Dealers Air» — интернет-проекты и сервисы" class="footer__logo"><img src="/static/images/dealersair.svg" alt="Dealers Air"></a>
		</div>
	</div>
</footer>
<!-- /FOOTER -->

<!--POPUPs/-->
<div class="popup">

	<div id="license" class="popup__window">
		<button class="js-popup-close popup-close-btn"></button>
		<div class="popup__inner">
			<p>
				MIT License
			</p>
			<p>
				Copyright (c) <?php echo date('Y'); ?> coding.dealersAir, https://coding.dealersair.com
			</p>
			<p>
				Permission is hereby granted, free of charge, to any person obtaining a copy
				of this software and associated documentation files (the "Software"), to deal
				in the Software without restriction, including without limitation the rights
				to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
				copies of the Software, and to permit persons to whom the Software is
				furnished to do so, subject to the following conditions:
			</p>
			<p>
				The above copyright notice and this permission notice shall be included in all
				copies or substantial portions of the Software.
			</p>
			<p>
				THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
				IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
				FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
				AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
				LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
				OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
				SOFTWARE.
			</p>
		</div> 
	</div>

	<div id="popup-2" class="popup__window" style="max-width: 550px;">
		<button class="js-popup-close popup-close-btn"></button>
		<div class="popup__inner" style="height: 1300px;">
			
		</div>
	</div>

	<!--Message Popup/-->
	<div id="message-popup" class="popup-message popup__window">
		<button class="js-popup-close popup-close-btn"></button>
		<div class="popup__inner">
			<!-- message html -->
		</div>
	</div>
	<!--/Message Popup-->

</div>
<!--/POPUPs-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49744337-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-49744337-5');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");

   ym(51804476, "init", {
        id:51804476,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51804476" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="/static/js/script.js"></script>
<script src="/static/js/common.js"></script>
</body>
</html>