<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    @include('home.includes.head')
    <title>DBDO - Home Page</title>
</head>

<body class="index-page bg-gray-200">
<!-- Navbar -->
@include('home.includes.navbar')
<!-- Navbar End -->

<!-- Header -->
@include('home.includes.header_home')
<!-- Header End -->

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 px-0">
    <!-- web_cards -->
    @include('home.includes.web_cards')

    <!-- stat_counts -->
    @include('home.includes.stat_count')

    <!-- services -->
    @include('home.includes.services')

    <!-- subscription -->
    @include('home.includes.subscription')

    <!-- works -->
    @include('home.includes.works')

    <!-- customer_says -->
    @include('home.includes.customer_say')

    <!-- blogs -->
    @include('home.includes.blogs')
</div>

<!-- footer -->
@include('home.includes.footer')

<!--   Scripts   -->
@include('home.includes.scripts')
<!-- JS for home page -->
<script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>

</body>

</html>
