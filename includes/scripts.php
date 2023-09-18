<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      });
    </script>
    <!-- Accordion js -->
    <script>
      // Get all the accordion buttons and content
      const accordionButtons = document.querySelectorAll(
        ".hs-accordion-toggle"
      );
      const accordionContents = document.querySelectorAll(
        ".hs-accordion-content"
      );

      // Add click event listener to each accordion button
      accordionButtons.forEach((button) => {
        button.addEventListener("click", () => {
          const contentId = button.getAttribute("aria-controls");
          const content = document.getElementById(contentId);

          // Toggle the 'hidden' class on the accordion content
          content.classList.toggle("hidden");

          // Update the height style to trigger the transition
          if (content.classList.contains("hidden")) {
            content.style.height = "0";
          } else {
            content.style.height = content.scrollHeight + "px";
          }

          // Toggle the active state of the button
          button.classList.toggle("hs-accordion-active");
        });
      });
    </script>

    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="main.js"></script>