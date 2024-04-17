<script>
  const slides = document.querySelector(".slides");
  const slideWidth = slides.clientWidth;
  let currentSlide = 0;

  function slideNext() {
    currentSlide = (currentSlide + 1) % slides.children.length;
    slides.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  }

  // Change slide every 3 seconds (adjust as needed)
  setInterval(slideNext, 3000);
</script>
