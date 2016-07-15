<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Downloads';
  // Define body class
  $bodyClass = 'download';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Downloads</h1>
    <h3>
      Release: <span class="text-yellow">4.4.2</span><br>
      Date: <span class="text-yellow">July 6, 2016</span>
    </h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">    
  
  This page only includes signed binaries. 
  <a href='../installers'>The complete list of getting started options.</a><br>
  <div class="separator"></div>

  <h2><a id="signed">Eclipse Signed Packages</a></h2>
  <p>Packages let you run Che natively. These packages extract Che into a directory. You must have </a><a href="https://www.java.com/en/download/">Java 1.8</a> and <a href="https://www.docker.com/">Docker</a> installed. Docker for Windows is currently supported. You can optionally use Virtual Box to launch Docker with Boot2Docker.</p>

  <ul>
    <li><h4>ZIP Package for Windows, Mac, and Linux</h4></li>
    <li><i>Installs Che in any directory</i></li>
    <li><h4><b><a href="https://www.eclipse.org/downloads/download.php?file=/che/eclipse-che-latest.zip&r=1">❯ Download signed binaries from Eclipse mirrors (133 MB)</a></b></h4></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.zip">❯ Download unsigned latest release from Codenvy servers (130 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.zip">❯ Download unsigned nightly from Codenvy servers (130 MB)</a></li>
  </ul>

  <ul>
    <li><h4>TGZ Package for Windows, Mac, and Linux</h4></li>
    <li><i>Installs Che in any directory</i></li>
    <li><h4><b><a href="https://www.eclipse.org/downloads/download.php?file=/che/eclipse-che-latest.tar.gz&r=1">❯ Download latest signed binaries from Eclipse mirrors (131 MB)</a></b></h4></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.tar.gz">❯ Download unsigned latest release from Codenvy servers (130 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.tar.gz">❯ Download unsigned nightly from Codenvy servers (130 MB)</a></li>
  </ul>

  <p>Need help getting Che to run? Please check the oodles of <a href="https://eclipse-che.readme.io/docs/">installation and usage docs</a>.</p>
  <div class="separator"></div>

  <h2>Prerequisites</h2>
  <p>Eclipse Che has different prerequisites for different platforms. The <b><a href="https://eclipse-che.readme.io/docs/install-pre-reqs">prerequisites page</a></b> in our docs itemizes the list of dependencies and how they are used.</p>
  <div class="separator"></div>
   
  <h2>Build Assembly From Source</h2>
  <p>You will need maven, Java, and Git to build Che from source. <b><a href="http://github.com/eclipse/che">Our GitHub repository has build and contribution instructions</a></b>.</p>
  <div class="separator"></div>

  <h2>Older Releases</h2>
  <p>Archived versions of previous releases are maintained on the <b><a href="https://github.com/eclipse/che/releases">Che GitHub release page</a></b>.</p>
</div> <!-- /.container-fluid -->


<?php include '../includes/footer.php'; ?>
