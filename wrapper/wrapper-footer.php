<?php /* Wrapper Name: Footer */ ?>
<footer class="site-footer">
	<div class="container p-relative">
		<div class="logo-watermark" aria-label="Logo Watermark">
			<img src="/assets/footer-logo.svg" alt="СоюзХлеб" class="logo-watermark-fallback"/>
		</div>
	</div>
</footer>
<script>
// Fix navigation for WordPress pages - prevent smooth scroll errors
document.addEventListener('DOMContentLoaded', function() {
  const currentPath = window.location.pathname;
  const isWordPressPage = currentPath.includes('/blog/');
  
  if (isWordPressPage) {
    // Override querySelector to handle invalid anchor selectors gracefully
    const originalQuerySelector = Document.prototype.querySelector;
    Document.prototype.querySelector = function(selector) {
      try {
        // If selector starts with /# it's an invalid anchor link
        if (typeof selector === 'string' && selector.startsWith('/#')) {
          return null; // Return null so code won't try to scroll
        }
        return originalQuerySelector.call(this, selector);
      } catch (e) {
        return null;
      }
    };
    
    // Ensure nav links work normally on WordPress pages
    setTimeout(() => {
      document.querySelectorAll('.nav-link').forEach(link => {
        const newLink = link.cloneNode(true);
        link.parentNode.replaceChild(newLink, link);
      });
    }, 100);
  }
});
</script>
<script src="/assets/main.js" type="module"></script>
