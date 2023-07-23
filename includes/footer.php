
<footer>
&copy; 2023 Book Title. All rights reserved.
</footer>
<script>
window.addEventListener('scroll', function() {
    // Get the footer element
    const footer = document.querySelector('footer');

    // Check if the user has scrolled down
    if (window.scrollY > 0) {
      // Show the footer by removing the 'hidden' class
      footer.classList.remove('hidden');
    } else {
      // Hide the footer by adding the 'hidden' class
      footer.classList.add('hidden');
    }
  });
  </script>
</body>
</html>

