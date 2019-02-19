    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-material-design.min.js')?>"></script>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
      
        function goBack() {
            window.history.back();
        }
    </script>
  </body>
</html>