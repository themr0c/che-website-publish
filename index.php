<?php 
  include 'includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Eclipse Next-Generation IDE, Cloud IDE, and Workspace Server';
  // Define body class
  $bodyClass = 'index';

  include 'includes/head.php';
  include 'includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>Eclipse Next-Generation IDE</h1>
    <h3>Eclipse Che is a developer workspace server and cloud IDE built for teams and organizations. <a href="<?php echo $rootPath; ?>/getting-started/">Get Started</a></h3>

    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/hero-home@2x.jpg" />
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<div class="annoucement">
  <div class="container-fluid">
    <center><h3><a style="color:white"; href="<?php echo $rootPath; ?>/getting-started/">Che 6 is out: try it with your team or enterprise</a></h3>
  </div>
</div>

<div class="bg-dark-space get-started">
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-6">
        <h3>SaaS</h3>
        <p>Self-service Che workspaces hosted at Codenvy.io</p>
        <a href="<?php echo $rootPath; ?>/getting-started/cloud/" class="btn-yellow">Create Free Account</a></li>

      </div>
      <div class="col-md-6">
        <h3>Local Install</h3>
        <p>Install Eclipse Che on localhost or shared server.</p>
        <a href="<?php echo $rootPath; ?>/docs/quick-start.html" class="btn-yellow">Download</a>

      </div>

    </div>
  </div>
</div>

<hr class="gray">
<div class="container-fluid content whats-new">
  <h2>What's New</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="images/img-home-checonf2018.png" alt="CheConf 2018" class="img-responsive">
      <h3>CheConf 2018</h3>
      <p>Register for our virtual Che user conference to hear what's new - streaming February 21, 2018.</p>
      <a href="<?php echo $rootPath; ?>/checonf18/index.html" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-md-4">
      <img src="images/img-home-che6@2x.png" alt="image by doug walters" class="img-responsive">
      <h3>Eclipse Che 6.0</h3>
      <p>Multi-tenancy, authentication with LDAP/AD, security and scalable OpenShift install.</p>
      <a href="https://che.eclipse.org/release-notes-eclipse-che-6-0-43feff5797e5" target="_blank" class="btn-yellow">Read Release Notes</a>
    </div>

    <div class="col-md-4">
      <img src="images/img-home-che5@2x.png" alt="Che 5.0" class="img-responsive">
      <h3>Eclipse Che</h3>
      <p>Run multiple machines in your workspace. Mount your desktop IDE to a portable Che workspace.</p>
      <a href="<?php echo $rootPath; ?>/technology" class="btn-yellow">Learn More</a>
    </div>

  </div>
</div>

<div class="bg-purple chefile">
  <div class="container-fluid content">
    <h2>Core Capabilities</h2>
    <div class="row">
      <div class="col-md-4">
        <h4>One-Click Workspaces</h4>
        <p>Create workspaces with production runtimes containing your projects and tools. Define single machine or multi-machine workspaces – even mirror production.</p>
        <ul>
          <li>Automate workspace creation</li>
          <li>Mimic production environments</li>
          <li>Code in kubernetes pods</li>
          <li>Integrate your version control</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Instant Project Onboarding</h4>
        <p>Onboard teams with powerful collaboration, workspace automation, and permissions. Developers in a team can use their local IDE or the Che browser IDE.</p>
        <ul>
          <li>Share workspaces with anyone</li>
          <li>Control workspace permissions</li>
          <li>Use a browser or desktop IDE</li>
          <li>Define resource limits for teams</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>DevOps Workspace Platform</h4>
        <p>Manage workspaces at scale with programmable and customizable infrastructure that lets you control system performance, availability, and functionality.</p>
        <ul>
          <li>Use in the cloud or install locally</li>
          <li>Scale horizontally or vertically</li>
          <li>Keep source code off devices</li>
          <li>Connect to your LDAP/AD</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<hr class="gray">
<div class="container-fluid content contributors">
  <h2>Contributors</h2>
  <div class="row">
    <ul>
      <li><img src="images/logo-bitnami@2x.png" alt="Bitnami" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-codenvy-black.png" alt="Codenvy" class="img-responsive"></li>
      <li><img src="images/logo-docker@2x.png" alt="Docker" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-eclipsesource@2x.png" alt="Eclipse Source" class="img-responsive"></li>
      <li><img src="images/logo-exo@2x.png" alt="eXo Platform" class="img-responsive"></li>
    </ul>
  </div>
  <div class="row">
    <ul>
      <li><img src="images/logo-gsoc@2x.png" alt="Google Summer of Code" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-ibm@2x.png" alt="IBM" class="img-responsive"></li>
      <li><img src="images/logo-kichwa@2x.png" alt="Kichwa Coders" class="img-responsive"></li>
      <li><img src="images/logo-nuxeo@2x.png" alt="Nuxeo" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-platformio@2x.png" alt="Platform.io" style="width: 190px" class="img-responsive"></li>
    </ul>
  </div>
  <div class="row">
    <ul>
      <li><img src="images/logo-redhat@2x.png" alt="RedHat" class="img-responsive"></li>
      <li><img src="images/logo-restlet@2x.png" alt="Restlet" class="img-responsive"></li>
      <li><img src="images/logo-sfdc@2x.png" alt="Salesforce.com" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-samsung@2x.png" alt="Samsung" class="img-responsive"></li>
      <li><img src="images/logo-sap@2x.png" alt="SAP" class="img-responsive"></li>
    </ul>
  </div>
  <div class="row">
    <ul>
      <li><img src="images/logo-serli@2x.png" alt="Serli" class="img-responsive"></li>
      <li><img src="images/logo-silexica@2x.png" alt="Silexica" class="img-responsive"></li>
      <li><img src="images/logo-smartbear@2x.png" alt="SmartBear" class="img-responsive"></li>
      <li><img src="images/logo-software-ag@2x.png" alt="Software AG" class="img-responsive"></li>
      <li><img src="images/logo-tomitribe@2x.png" alt="Tomibrite" class="img-responsive"></li>
    </ul>
  </div>
  <div class="row">
    <ul>
      <li><img src="images/logo-typefox@2x.png" alt="Type Fox" class="img-responsive"></li>
      <li><img src="images/logo-wso2@2x.png" alt="WSO2" class="img-responsive"></li>
      <li><img src="images/logo-yatta@2x.png" alt="Yatta" class="img-responsive"></li>
      <li><img src="images/logo-zend@2x.png" style="width: 190px" alt="Zend" class="img-responsive"/></li>
    </ul>
  </div>
  <a href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md" class="btn-yellow" target="_blank">Become a Contributor</a>
</div>





<div class="bg-purple chefile">
  <div class="container-fluid content">
    <h2>Feature Highlight</h2>
    <table>
      <tr>
        <td><img src="<?php echo $rootPath; ?>/images/img-chefile@2x.png" alt=""></td>
        <td>
          <h4>Chefiles - Clonable, Reproducible, Lightweight Workspaces in Eclipse Che</h4>
          <p>Chefiles provide an easy to configure, reproducible and portable developer workspaces controlled by a repeatable workflow to maximize the productivity of your team. Chefiles launch synchronized workspaces within Eclipse Che tied to your repo.</p>
          <a href="<?php echo $rootPath; ?>/docs/chedir-getting-started.html" class="btn-yellow" target="_blank">Learn More</a>
        </td>
      </tr>
    </table>
  </div>
</div>


<div class="bg-deep-purple feedback">
  <div class="container-fluid content">
    <h2>Feedback <a href="https://twitter.com/eclipse_che" target="_blank">@eclipse_che</a></h2>

    <ul>
      <li><span><i class="fa fa-twitter"></i> @monkchips</span> @eclipse_che developer workspace server - what kind of witchcraft is this?</li>
      <li><span><i class="fa fa-twitter"></i> @nicosommi</span> "I just tried "eclipse che"... it's just brilliant @eclipse_che</li>
      <li><span><i class="fa fa-twitter"></i> @ciberado</span> @eclipse_che is potentially the greatest innovation in tools since Maven.</li>
      <li><span><i class="fa fa-twitter"></i> @oyku</span> I'm an @intellijidea user and have suffered from @EclipseFdn IDE a lot but everyone should keep an eye on Eclipse Che</li>
      <li><span><i class="fa fa-twitter"></i> @puffybsd</span> The stuff eclipse che is doing, particularly workspace server and language server protocol, is seriously cool.</li>
      <li><span><i class="fa fa-twitter"></i> @smithkenny</span> There is some seriously disruptive #Devops technology coming with #Eclipse Che. Solves probs with dev workstations &amp; workspaces.</li>
      <!--
      <li><span><i class="fa fa-twitter"></i> @DaveZaffrey</span> #eclipse che - been waiting for this for many years! Dev workspace that is standardized, clonable, Web UI and highly response.</li>
      <li><span><i class="fa fa-twitter"></i> @mogreau</span> Contribute to an open source project in less than 10 minutes with @eclipse_che!</li>
      <li><span><i class="fa fa-twitter"></i> @thomasehardt</span> Not many dev tools blow my mind, but @eclipse_che certain does - it is the future of IDEs!</li>
    -->
    </ul>

    <a href="https://twitter.com/eclipse_che" class="btn-yellow" target="_blank">Follow Us on Twitter</a>
  </div>
</div>


<?php include 'includes/footer.php'; ?>