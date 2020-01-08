@include('layouts.head')
<div class="main-content">
<!-- Header -->
<div class="container-fluid pb-4 pt-4 pt-md-8">
      <!-- Card stats -->
    @include('search')

  <div class="row">
    <div class="col">
      <div class="swiper-container">
            <div class="swiper-wrapper" id="getcontent">
              <div class="swiper-slide">Slide 3</div>
              <div class="swiper-slide">Slide 4</div>
              <div class="swiper-slide">Slide 5</div>
              <div class="swiper-slide">Slide 6</div>
              <div class="swiper-slide">Slide 7</div>
              <div class="swiper-slide">Slide 8</div>
              <div class="swiper-slide">Slide 9</div>
              <div class="swiper-slide">Slide 10</div>
            </div>
            <!-- Add Pagination -->
        </div>
    </div>    
  </div>
  <br>
  <div class="row" id="getprod">
    <div class="col-12">
      <img src="/assets/img/theme/loadingnew.gif" width="100%">
    </div> 
  </div>
  <br><br><br>
        
          
@include('layouts.footer')

<script type="text/javascript">
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
</script>

@include('script.home')

</body>
</html>