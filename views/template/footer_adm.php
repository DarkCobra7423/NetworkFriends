<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=<?php echo $recursos_bs_jq ?>></script>
<script src=<?php echo $recursos_pop_js ?>></script>
<script src=<?php echo $recursos_bs_js ?>></script>
<script>
    $(".linkborrar").click(function () {
        var id = $(this).attr('href');
        $("#inpborrar").val(id)
    });
</script>
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Copyright &copy; Instituto Tecnológico de Villahermosa</span>
    <a class="footer" href="https://www.facebook.com/carlosdaniel.angelpadilla.3/">
      <h6>By Carlos Daniel Angel Padilla</h6>
    </a>
  </div>
</footer>
</body>
</html>