      </div>
      <div class="footer centerDiv resizeMiddle">
        © Your copyright/information here
      </div>
    </div>
    <script async>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = 'stylesheet.css';
        var h = document.getElementsByTagName('script')[0];
        h.parentNode.insertBefore(l, h);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
      webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="UI.js" async></script>
  </body>
</html>
