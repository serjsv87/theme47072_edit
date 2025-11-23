<?php /* Wrapper Name: Footer */ ?>
<footer class="site-footer">
	<div class="container p-relative">
		<div class="logo-watermark" aria-label="Logo Watermark">
			<img src="/assets/footer-logo.svg" alt="СоюзХлеб" class="logo-watermark-fallback"/>
		</div>
	</div>
</footer>
<script src="/assets/main.js" type="module"></script>
<script>
// Fix navigation for WordPress pages - allow links to main page to work
document.addEventListener('DOMContentLoaded', function() {
  const currentPath = window.location.pathname;
  const isWordPressPage = currentPath.includes('/blog/');
  
  if (isWordPressPage) {
    // On WordPress pages, don't prevent default for nav links
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        // If link points to homepage with anchor, allow normal navigation
        if (href && (href.startsWith('/') || href.includes('/#'))) {
          // Don't prevent default - let browser navigate normally
          return true;
        }
      }, true); // Use capture phase to run before other listeners
    });
  }
});
</script>
