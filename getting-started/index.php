<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Getting Started';
  // Define body class
  $bodyClass = 'getting-started';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1 class="no-margin">Get Started with Eclipse Che</h1>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content options">
  <div class="row">
    <div class="col-md-4">
      <img src="../images/getting-started/icon-saas-cloud.jpg" alt="Eclipse Che | SaaS Cloud">
      <h3>SaaS Cloud</h3>
      <p>Self-service Eclipse Che developer workspaces hosted at Codenvy.com</p>
        <a href="<?php echo $rootPath; ?>/getting-started/cloud/" class="btn-yellow">Create Free Account</a></li>
    </div>

    <div class="col-md-4">
      <img src="../images/getting-started/icon-local-install.jpg" alt="Eclipse Che | Local Install">
      <h3>Local Install</h3>
      <p>Install Eclipse Che on your computer or a development server.</p>
      <a href="<?php echo $rootPath; ?>/getting-started/download/" class="btn-yellow">Downloads</a> 
    </div>

    <div class="col-md-4">
      <img src="../images/getting-started/icon-private-cloud.jpg" alt="Eclipse Che | Private Cloud Install">
      <h3>Private Cloud Install</h3>
      <p>Install Eclipse Che on AWS, Azure or Google private cloud.</p>
     <a href="https://bitnami.com/stack/eclipse-che" class="btn-yellow" target="_blank">One-Click Install</a>
    </div>
  </div> <!-- /.row -->
</div> <!-- /.container-fluid -->


<div class="bg-gray5 get-help">
  <div class="container-fluid content">
    <h2>How to Get Help</h2>

    <div class="row">
      <div class="col-md-4">
        <h4>Issues</h4>
        <p>Sometimes the unexpected happens. If it does, <a href="https://github.com/eclipse/che/issues" target="_blank">post issues to our GitHub page</a>. Please <a href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md" target="_blank">follow the issue reporting guidelines.</a></p>
      </div>
      <div class="col-md-4">
        <h4>Documentation</h4>
        <p>We put a lot of effort <a href="https://eclipse-che.readme.io/" target="_blank">into our docs.</a> If there are improvements or errors, we'd love that feedback.</p>
      </div>
      <div class="col-md-4">
        <h4>Chat</h4>
        <p>Che engineers hang out on <a href="https://gitter.im/eclipse/che?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge" target="_blank">Gitter</a>, <a href="http://qwebirc.swiftirc.net/?nick=fromwebsite&channels=%23eclipseche" target="_blank">IRC</a> and Slack.</p>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->


<hr class="gray">
<div class="container-fluid content">
  <h2>Share Your Eclipse Che Story</h2>
    <p>Are you using Eclipse Che to build your project? Share your story with us and we will publish it on our blog.</p>
    <a href="<?php echo $rootPath; ?>/" class="btn-yellow">Share your story</a>
</div>


<div class="bg-hero">&nbsp;</div>


<?php include '../includes/footer.php'; ?>
