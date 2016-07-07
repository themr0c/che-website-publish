<?php 
  include 'includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Next-Generation Eclipse IDE, Cloud IDE, and Workspace Server';
  // Define body class
  $bodyClass = 'index';

  include 'includes/head.php';
  include 'includes/header.php';
?>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>Next-Generation Eclipse IDE</h1>
    <h3>Eclipse Che is a developer workspace server and cloud IDE. <a href="<?php echo $rootPath; ?>/getting-started/">Get Started</a></h3>

    <img alt="" class="img-responsive" src="<?php echo $rootPath; ?>/images/hero-home@2x.jpg" />
  </div> <!-- .container-fluid -->
</div> <!-- .jumbotron -->


<div class="bg-dark-space get-started">
  <div class="container-fluid content">
    <div class="row">
      <div class="col-md-4">
        <h3>SaaS Cloud</h3>
        <p>Self-service Eclipse Che workspaces hosted at Codenvy.com</p>
        <a href="<?php echo $rootPath; ?>/getting-started/cloud/" class="btn-yellow">Create Free Account</a></li>

      </div>
      <div class="col-md-4">
        <h3>Local Install</h3>
        <p>Install and host Eclipse Che on your machine or server.</p>
        <a href="<?php echo $rootPath; ?>/getting-started/download/" class="btn-yellow">Download</a>

      </div>
      <div class="col-md-4">
        <h3>Private Cloud</h3>
        <p>Install Eclipse Che on AWS, Azure or Google private cloud.</p>
        <a href="https://bitnami.com/stack/eclipse-che" class="btn-yellow" target="_blank">One-Click Install</a>
      </div>
    </div>
  </div>
</div>


<div class="annoucement">
  <div class="container-fluid">
    <p>Read the Eclipse Che <a href="http://che.eclipse.org/release-notes-eclipse-che-4-4" target="_blank">4.4 Release Notes</a></p>
  </div>
</div>


<hr class="gray">
<div class="container-fluid content whats-new">
  <h2>What's New</h2>
  <div class="row">
    <div class="col-md-4">
      <img src="images/img-summit-redhat@2x.png" alt="" class="img-responsive">
      <h3>Che at Red Hat</h3>
      <p>See Che used to do cloud native development in Paul Cormier's Red Hat Summit keynote.</p>
      <a href="https://www.youtube.com/embed/wMTgIIJ-oqQ?start=2995&autoplay=1" class="btn-yellow">Watch the Video</a>
    </div>
    <div class="col-md-4">
      <img src="images/img-home-whatsnew2@2x.png" alt="" class="img-responsive">
      <h3>Hands-on with Che</h3>
      <p>Learn how to configure commands, develop your own plugins, and pair program with your peers.</p>
      <a href="http://che.eclipse.org/tag/hands-on/" class="btn-yellow">Technical Blogs</a>
    </div>
    <div class="col-md-4">
      <img src="images/img-home-whatsnew3@2x.png" alt="" class="img-responsive">
      <h3>EclipseCon Keynote</h3>
      <p>Watch Tyler Jewell at EclipseCon talk about Eclipse Che alongside SAP, Red Hat, IBM, and Microsoft.</p>
      <a href="<?php echo $rootPath; ?>/community/" class="btn-yellow">Watch the Keynote</a>
    </div>
  </div>
</div>

<!-- 
<div class="bg-purple google-hangout">
  <div class="container-fluid content">
    <table>
      <tr>
        <td><img src="<?php echo $rootPath; ?>/images/img-google-hangout@2x.png" alt=""></td>
        <td>
          <h2>Google Hangout: Introduction to Eclipse Che</h2>
          <p>Every few weeks, our product team hosts a Google Hangout to show users how to setup and use Eclipse Che for everyday development and team collaboration.</p>
          <a href="<?php echo $rootPath; ?>/" class="btn-yellow" target="_blank">Join the Hangout</a>
        </td>
      </tr>
    </table>
  </div>
</div>
-->

<hr class="gray">
<div class="container-fluid content contributors">
  <h2>Contributors</h2>
  <ul>
    <li><img src="images/logo-codenvy-navy@2x.png" alt="Codenvy" class="img-responsive"></li>
    <li><img src="images/logo-eclipsesource@2x.png" alt="Eclipse Source" class="img-responsive"></li>
    <li><img src="images/logo-exo@2x.png" alt="eXo Platform" class="img-responsive"></li>
    <li><img src="images/logo-ibm@2x.png" alt="IBM" class="img-responsive"></li>
    <li><img src="images/logo-redhat@2x.png" alt="RedHat" class="img-responsive"></li>
    <li><img src="images/logo-restlet@2x.png" alt="Restlet" class="img-responsive"></li>
    <li><img src="images/logo-samsung@2x.png" alt="Samsung" class="img-responsive"></li>
    <li><img src="images/logo-sap@2x.png" alt="SAP" class="img-responsive"></li>
    <li><img src="images/logo-serli@2x.png" alt="Serli" class="img-responsive"></li>
    <li><img src="images/logo-smartbear@2x.png" alt="SmartBear" class="img-responsive"></li>
    <li><img src="images/logo-tomitribe@2x.png" alt="Tomibrite" class="img-responsive"></li>
    <li><img src="images/logo-typefox@2x.png" alt="Type Fox" class="img-responsive"></li>
    <li><img src="images/logo-wso2@2x.png" alt="WSO2" class="img-responsive"></li>
    <li><img src="images/logo-yatta@2x.png" alt="Yatta" class="img-responsive"></li>
  </ul>

  <a href="https://github.com/eclipse/che/" class="btn-yellow" target="_blank">Become a Contributor</a>
</div>


<div class="bg-gray5 share-story">
  <div class="container-fluid content">
    <h2>Share Your Eclipse Che Story</h2>
    <p>Are you using Eclipse Che to build your project? Share your story with us and we will publish it on our blog.</p>
    <a href="<?php echo $rootPath; ?>/community/share/" class="btn-yellow">Share your Story</a>
  </div>
</div>


<div class="bg-hero">&nbsp;</div>


<div class="bg-deep-purple feedback">
  <div class="container-fluid content">
    <h2>Feedback <a href="https://twitter.com/eclipse_che" target="_blank">@eclipse_che</a></h2>

    <ul>
      <li><span><i class="fa fa-twitter"></i> @ciberado</span> @eclipse_che is potentially the greatest innovation in tools since Maven.</li>
      <li><span><i class="fa fa-twitter"></i> @monkchips</span> @eclipse_che developer workspace server - what kind of witchcraft is this?</li>
      <li><span><i class="fa fa-twitter"></i> @smithkenny</span> There is some seriously disruptive #Devops technology coming with #Eclipse Che. Solves probs with dev workstations &amp; workspaces</li>
      <li><span><i class="fa fa-twitter"></i> @mogreau</span> Contribute to an open source project in less than 10 minutes with @eclipse_che!</li>
      <li><span><i class="fa fa-twitter"></i> @jack-y</span> I develop micro services in Java. @eclispe_che saves my life - I can work on my code out of my office.</li>
      <li><span><i class="fa fa-twitter"></i> @CarlesZ</span> Developers of the world, a big applause!!!</li>
      <li><span><i class="fa fa-twitter"></i> @kaloyanraev</span> Hooray! Feeling like 10 years ago when I got my very first patch in #Eclipse WTP.</li>
      <li><span><i class="fa fa-twitter"></i> @ejuliot</span> Several years ago, there were competitors. Now, @eclipse_che and Orion are working together. Great collaboration in the open.</li>
      <li><span><i class="fa fa-twitter"></i> @nilsbundi</span> PS: Your product is pretty awesome and I never want to switch back to desktop Eclipse.</li>
      <li><span><i class="fa fa-twitter"></i> @thomasehardt</span> Not many dev tools blow my mind, but @eclipse_che certain does - it is the future of IDEs!</li>
    </ul>

    <a href="https://twitter.com/eclipse_che" class="btn-yellow" target="_blank">Follow Us on Twitter</a>
  </div>
</div>



<?php include 'includes/footer.php'; ?>