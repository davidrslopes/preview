    </main>
    <footer class="footer-wrap bg-primary text-light fixed-bottom">
      <div class="container">
        <div class="row">
          <div class="col text-left">
            <p class="project-copy">&copy;2018 <?php echo (empty($campaign['company'])) ? 'Ominicom Media Group' : strtoupper ($campaign['company']); ?> Portugal.</p>
          </div>
          <div class="col text-right">
            <p class="project-version">[Campaign Preview]<small data-toggle="tooltip" data-placement="top" title="<?php echo $version[desc]; ?>"><?php echo $version[number]; ?></small></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Scripts Build -->
    <script src="/assets/js/main.js"></script>
    <!-- //Scripts Build -->
  </body>
</html>
