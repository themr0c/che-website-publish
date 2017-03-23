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
    <h3>Eclipse Che is a developer workspace server and cloud IDE. <a href="<?php echo $rootPath; ?>/getting-started/">Get Started</a></h3>

    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/hero-home@2x.jpg" />
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<div class="annoucement">
  <div class="container-fluid">
    <center><h3>Che 5.0 is released!  &nbsp;&nbsp;&nbsp;Run it now with: <code>docker run eclipse/che start</code></h3>
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
        <p>Install and host Eclipse Che anywhere Docker runs.</p>
        <a href="<?php echo $rootPath; ?>/docs/setup/getting-started/" class="btn-yellow">Download</a>

      </div>
      <!--
      <div class="col-md-4">
        <h3>Cloud</h3>
        <p>Install Eclipse Che on AWS, Azure or Google private cloud.</p>
        <a href="<?php echo $rootPath; ?>/docs/setup/bitnami/" class="btn-yellow">One-Click Install</a>
      </div>
      -->
    </div>
  </div>
</div>

<hr class="gray">
<div class="container-fluid content whats-new">
  <h2>What's New</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="images/img-home-che5@2x.png" alt="Che 5.0" class="img-responsive">
      <h3>Eclipse Che 5.0</h3>
      <p>Run multiple machines in your workspace. Mount your desktop IDE to a portable Che workspace.</p>
      <a href="<?php echo $rootPath; ?>/technology" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-md-4">
      <img src="images/img-home-codenvy-ent@2x.png" alt="Codenvy: Che for Enterprises" class="img-responsive">
      <h3>Eclipse Che Enterprise</h3>
      <p>Codenvy uses Eclipse Che to provide dev team collaboration on a scalable workspace platform for DevOps.</p>
      <a href="<?php echo $rootPath; ?>/extend/codenvy" class="btn-yellow">See How</a>
    </div>
    <div class="col-md-4">
      <img src="images/img-home-checonf3.png" alt="CheConf 2016" class="img-responsive">
      <h3>CheConf 2016</h3>
      <p>Watch sessions on the future of Che, building plugins, Docker, and many more cloud development topics.</p>
      <a href="<?php echo $rootPath; ?>/checonf/sessions.html" class="btn-yellow">Watch the Sessions</a>
    </div>
  </div>
</div>

<hr class="gray">
<div class="container-fluid content contributors">
  <h2>Contributors</h2>
  <div class="row">
    <ul>
      <li><img src="images/logo-bitnami@2x.png" alt="Bitnami" style="width: 190px" class="img-responsive"></li>
      <li><img src="images/logo-codenvy-navy@2x.png" alt="Codenvy" class="img-responsive"></li>
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
      <li><img src="images/logo-smartbear@2x.png" alt="SmartBear" class="img-responsive"></li>
      <li><img src="images/logo-software-ag@2x.png" alt="Software AG" class="img-responsive"></li>
      <li><img src="images/logo-tomitribe@2x.png" alt="Tomibrite" class="img-responsive"></li>
      <li><img src="images/logo-typefox@2x.png" alt="Type Fox" class="img-responsive"></li>
    </ul>
  </div>
  <div class="row">
    <ul>
      <li><img src="images/logo-wso2@2x.png" alt="WSO2" class="img-responsive"></li>
      <li><img src="images/logo-yatta@2x.png" alt="Yatta" class="img-responsive"></li>
      <li><img src="images/logo-zend@2x.png" style="width: 190px" alt="Zend" class="img-responsive"/></li>
    </ul>
  </div>
  <a href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md" class="btn-yellow" target="_blank">Become a Contributor</a>
</div>


<div class="bg-purple google-hangout">
  <div class="container-fluid content">
    <table>
      <tr>
        <td><img src="<?php echo $rootPath; ?>/images/img-google-hangout@2x.png" alt=""></td>
        <td>
          <h2>Chefiles - Clonable, Reproducible, Lightweight Workspaces in Eclipse Che</h2>
          <p>Chefiles provide an easy to configure, reproducible and portable developer workspaces controlled by a repeatable workflow to maximize the productivity of your team. Chefiles launch synchronized workspaces within Eclipse Che tied to your repo.</p>
          <a href="<?php echo $rootPath; ?>/docs/chedir/getting-started/" class="btn-yellow" target="_blank">Learn More</a>
        </td>
      </tr>
    </table>
  </div>
</div>



<div class="bg-deep-purple feedback">
  <div class="container-fluid content">
    <h2>Feedback <a href="https://twitter.com/eclipse_che" target="_blank">@eclipse_che</a></h2>

    <ul>
      <li><span><i class="fa fa-twitter"></i> @zepag</span> Yet another incredible release of Eclipse CHE, with Docker images based on CentOS available!</li>
      <li><span><i class="fa fa-twitter"></i> @mmilinkov</span> "docker run eclipse/che" That is one damn cool way to install an IDE! Congrats to the @eclipse_che team!</li>
      <li><span><i class="fa fa-twitter"></i> @nicosommi</span> "I just tried "eclipse che"... it's just brilliant @eclipse_che</li>
      <li><span><i class="fa fa-twitter"></i> @monkchips</span> @eclipse_che developer workspace server - what kind of witchcraft is this?</li>
      <li><span><i class="fa fa-twitter"></i> @oyku</span> I'm an @intellijidea user and have suffered from @EclipseFdn IDE a lot but everyone should keep an eye on Eclipse Che</li>
      <li><span><i class="fa fa-twitter"></i> @ciberado</span> @eclipse_che is potentially the greatest innovation in tools since Maven.</li>
      <li><span><i class="fa fa-twitter"></i> @puffybsd</span> The stuff eclipse che is doing, particularly workspace server and language server protocol, is seriously cool.</li>
      <li><span><i class="fa fa-twitter"></i> @smithkenny</span> There is some seriously disruptive #Devops technology coming with #Eclipse Che. Solves probs with dev workstations &amp; workspaces.</li>
      <li><span><i class="fa fa-twitter"></i> @mogreau</span> Contribute to an open source project in less than 10 minutes with @eclipse_che!</li>
      <li><span><i class="fa fa-twitter"></i> @thomasehardt</span> Not many dev tools blow my mind, but @eclipse_che certain does - it is the future of IDEs!</li>
      <li><span><i class="fa fa-twitter"></i> @DaveZaffrey</span> #eclipse che - been waiting for this for many years! Dev workspace that is standardized, clonable, Web UI and highly response.</li>
      <li><span><i class="fa fa-twitter"></i> @twobree</span> A2+ I was using Eclipse Che in the cloud, and wow, it alerts me about SO MANY issues and warnings! I can't imagine coding Java without it.</li>
      <li><span><i class="fa fa-twitter"></i> @nilsbundi</span> PS: Your product is pretty awesome and I never want to switch back to desktop Eclipse.</li>
      <li><span><i class="fa fa-twitter"></i> @jack-y</span> I develop micro services in Java. @eclispe_che saves my life - I can work on my code out of my office.</li>
      <li><span><i class="fa fa-twitter"></i> @CarlesZ</span> Developers of the world, a big applause!!!</li>
    </ul>

    <a href="https://twitter.com/eclipse_che" class="btn-yellow" target="_blank">Follow Us on Twitter</a>
  </div>
</div>



<?php include 'includes/footer.php'; ?>