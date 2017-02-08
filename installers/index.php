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
    <h1>Installation Options</h1>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">    
  

  <h2>Installation Options</h2>    
    <li>SaaS Cloud: <a href="<?php echo $rootPath; ?>/getting-started/cloud/">Hosted @ Codenvy.com</a></li></br>
    
    <li>Local Install: <a href="https://www.eclipse.org/che/docs/setup/getting-started/">Quick Install</a></li></br>

    <li>Private Cloud: <a href="https://bitnami.com/stack/eclipse-che">Hosted @ AWS / EC2 / Azure by Bitnami</a></li>

  <p>Need help getting Che to run? Please check the oodles of <a href="https://www.eclipse.org/che/docs/index.html">installation and usage docs</a>.</p>
  <div class="separator"></div>

  <h2><a id="installers">Installers</a></h2>
  <p>Installers install Eclipse Che and its platform dependencies including Java, Git Bash, Docker Toolbox, and Virtual Box. These installers are deprecated and will eventually be removed in favor of runnin Che as a Docker container. We will support these installers through the end of 2016.</p>

  <ul>
    <li><h4>EXE Installer for Windows 7+</h4></li>
    <li><i>Installs Che, Java, Docker, Git Bash, and Shortcuts</i></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.exe">❯ Download unsigned latest release from Codenvy servers (416 MB)</a></li>
  </ul>

  <ul>
    <li><h4>JAR Universal Extractor</h4></li>
    <li class="monospace"><i>java -jar &lt;jar-file&gt;</i></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.jar">❯ Download unsigned latest release from Codenvy servers (138 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.jar">❯ Download unsigned nightly from Codenvy servers (138 MB)</a></li>
  </ul>

  <div class="separator"></div>

  <h2>Raspberry Pi</h2>
  <p>The community has instructions for running Eclipse Che as an embedded IDE on a Raspberry Pi. Boot up, get an IP address, and start developing! Amazing work from Benjamin Cabe. <b><a href="https://blog.benjamin-cabe.com/2016/04/01/running-eclipse-che-on-a-raspberry-pi">Read the setup</a></b> instructions.</p>
  <div class="separator"></div>

  <h2>Bosh</h2>
  <p>The community has built a bosh installer for Che. <b><a href="https://bosh.io/docs/about.html">Bosh</a></b> is an open source tool for release engineering, deployment, lifecycle management, and monitoring of distributed systems. Bosh is used to deploy artifacts to various IaaS and PaaS systems like CloudFoundry. @ArthurHlt <b><a href="https://github.com/ArthurHlt/eclipse-che-boshrelease">has a bosh release packaging</a></b> which deploys Che more easily into CloudFoundry.</p>
  <div class="separator"></div>

  <h2>Electron Desktop Clients</h2>
  <p>You can use Che from your favorite browser. We have created a set of experimental Electron clients that you can also use. Electron creates a OS-specific chromium client that you run on any computer. It's fast and flexible. You can get the latest binaries from <b><a href="http://github.com/tylerjewell/che-electron">the che-electron GitHub repository</a></b>.</p>
  <div class="separator"></div>

  <h2>Prerequisites</h2>
  <p>Eclipse Che has different prerequisites for different platforms. The <b><a href="https://www.eclipse.org/che/docs/setup/getting-started/index.html#pre-reqs">prerequisites page</a></b> in our docs itemizes the list of dependencies and how they are used.</p>
  <div class="separator"></div>
   
  <h2>Build Assembly From Source</h2>
  <p>You will need maven, Java, and Git to build Che from source. <b><a href="http://github.com/eclipse/che">Our GitHub repository has build and contribution instructions</a></b>.</p>
  <div class="separator"></div>

  <h2>Older Releases</h2>
  <p>Archived versions of previous releases are maintained on the <b><a href="https://github.com/eclipse/che/releases">Che GitHub release page</a></b>.</p>
</div> <!-- /.container-fluid -->


<?php include '../includes/footer.php'; ?>
