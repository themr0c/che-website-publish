<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Share Your Eclipse Che Story';
  // Define body class
  $bodyClass = 'share-story';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1 class="no-margin">Share Your Eclipse Che Story</h1>
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  <div class="row">
    <div class="col-sm-6">
      <h3>Are you using Eclipse Che to build your project? Share your story with us and we will publish it on our blog.</h3>
      <p> </p>
    </div>

    <div class="col-sm-6">
      <script src="//app-ab05.marketo.com/js/forms2/js/forms2.min.js"></script>
      <script>MktoForms2.loadForm("//app-ab05.marketo.com", "519-AYY-549", 1296);</script>
      <form id="mktoForm_1296"></form>
    </div>
  </div>
</div> <!-- .container-fluid -->


<?php include '../../includes/footer.php'; ?>