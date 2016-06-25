<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Extend';
  // Define body class
  $bodyClass = 'extend';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Extend</h1>
    <h3>Samsung, SAP, Red Hat and others are customizing Eclipse Che to create great developer experiences. Get inspired, then extend Che yourself.<br><a href="https://eclipse-che.readme.io/docs/introduction" target="_blank">Explore how to extend and embed Eclipse Che.</a></h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content options">
  <div class="row">
    <div class="col-sm-6">
      <img src="../images/logo-extend-sap@2x.jpg" alt="SAP">
      <h2>SAP Hana Cloud IDE</h2>
      <p>Che is the foundation of every developer workspace in the SAP Hana Cloud. Using a custom client focused on the workflow and UI their customer developers wanted, SAP then leveraged Che’s RESTful APIs to get powerful, portable, containerized workspaces for database-driven applications.</p>
    <a href="<?php echo $rootPath; ?>/extend/sap/" class="btn-yellow">Learn More</a>


    </div>

    <div class="col-sm-6">
      <img src="../images/logo-extend-redhat@2x.jpg" alt="RedHat">
      <h2>Red Hat Open Shift</h2>
      <p>Red Hat has selected Eclipse Che as their development tool standard because of its open source licensing, flexible deployment and extensibility. Che is the foundation for an Open Shift web IDE with the goal of providing a tailored, no-setup development experience.</p>
      <a href="https://eclipse-che.readme.io/docs/openshift-config" class="btn-yellow" target="_blank">Learn More</a>  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <img src="../images/logo-extend-samsung@2x.jpg" alt="Samsung">
      <h2>Samsung ARTIK IDE</h2>
      <p>Samsung chose Eclipse Che as the basis for their IoT-focused IDE in order to give their ARTIK customers an instant, zero-effort development solution. In a hotly contested market, Samsung used Che to eliminate configuration and simplify common developer workflows.</p>
    <a href="<?php echo $rootPath; ?>/extend/artik/" class="btn-yellow">Learn More</a>
    </div>

    <div class="col-sm-6">
      <img src="../images/logo-extend-codenvy@2x.jpg" alt="Codenvy">
      <h2>Codenvy</h2>
      <p>Codenvy provides a multi-user, multi-tenant and elastic Eclipse Che with enterprise features including LDAP, single sign-on, security, and resource controls. You can use Codenvy in a shared hosted cloud, private cloud, or download installed onto your own servers.</p>
      <a href="https://codenvy.com/product/technology/" class="btn-yellow" target="_blank">Learn More</a>  
    </div>
  </div> <!-- /.row -->
</div> <!-- /.container-fluid -->


<div class="bg-gray5 get-help">
  <div class="container-fluid content">
    <h2>Commercial and Enterprise Support</h2>
    <p>Codenvy offers commercial and enterprise support options for Eclipse Che, please contact them to discuss your needs.</p>
    <a href="https://codenvy.com/contact/questions/" class="btn-yellow" target="_blank">Talk to Codenvy</a>  
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->



<?php include '../includes/footer.php'; ?>
