    </main>
    <footer class="footer-wrap bg-primary text-light">
      <div class="container-fluid py-2">
        <div class="row">
          <div class="col-7 col-md-8 text-left">
            <p class="omnicp-copy">&copy;2018 <?php echo (empty($campaign['company'])) ? 'Ominicom Media Group' : strtoupper ($campaign['company']); ?> Portugal.</p>
          </div>
          <div class="col-5 col-md-4 text-right">
            <p class="omnicp-version">[Campaign Preview]<small data-toggle="tooltip" data-placement="top" data-html="true" title="<?php echo $version[desc]; ?>"><?php echo $version[number]; ?></small></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scripts Build -->
    <script src="/assets/js/main.js"></script>
    <!-- //Scripts Build -->
  </body>
</html>
