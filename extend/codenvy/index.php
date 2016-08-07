<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Codenvy Enterprise Powered by Eclipse Che';
  // Define body class
  $bodyClass = 'extend-child extend-sap';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>Codenvy: Eclipse Che for the Enterprise</h1>
    <h3>Codenvy Enterprise builds upon Eclipse Che to provide workspaces for the team and organization. <a target="_blank" href="https://codenvy.com/getting-started/">Get Your Team Onboard.</a></h3>
    <img alt="" class="img-responsive" src="../../images/img-extend-codenvy@2x.png" />  
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->

<!-- <hr class="gray"> -->
<div class="container-fluid content features">
  <div class="row">
    <div class="col-sm-6">
      <h3>Certified Eclipse Che Package</h3>
      <p>Codenvy packages Eclipse Che and popular community plugins into a tested and supported bundle delivered with an update service.</p>
      <!-- <a href="../getting-started/" target="_blank" class="btn-yellow">Get Eclipse Che</a> -->
    </div>
    <div class="col-sm-6">
      <h3>Team and Organization Extensions</h3>
      <p>Codenvy adds Eclipse Che extensions for multi-user, permissions, security and workspace automation to let DevOps integrate Che into any process. 
      <!-- <a href="../getting-started/" target="_blank" class="btn-yellow">Get Eclipse Che</a> -->
    </div>
  </div> <!-- .row -->
  
  <div class="separator"></div>

  <div class="row">
    <div class="col-sm-6">
      <h3 style="margin-top: -60px;">DevOps Infrastructure</h3>
      <p>Operate an Eclipse Che cloud that scales workspaces indpendently of hardware and users. Codenvy Enterprise operationalized backup, monitoring, and infrastructure management.</p>
      <!-- <a href="../getting-started/" target="_blank" class="btn-yellow">Get Eclipse Che</a> -->
    </div>
    <div class="col-sm-6">
      <h3 style="margin-top: -60px;">Customize with Che</h3>
      <p>Eclipse Che's powerful stack and extension frameworkss let you build anything for anyone. Codenvy interoperates with Eclipse Che to enable custom cloud products based on Che to scale.</p>
      <!-- <a href="../getting-started/" target="_blank" class="btn-yellow">Get Eclipse Che</a> -->
    </div>
  </div> <!-- .row -->

  <p class="h3"><a target="_blank" href="https://codenvy.com">Try Hosted or a Private Codenvy Based on Eclipse Che</a>.</p>
</div> <!-- .container-fluid -->

<?php include '../../includes/footer.php'; ?>
