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
      Release: <span class="text-yellow">4.3.0</span><br>
      Date: <span class="text-yellow">June 17, 2016</span>
    </h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">    
  

  <h2>Download Options</h2>
  <p>The official signed Eclipse downloads are below, these are typically 1+ releases behind and require the correct Java and Docker versions.</p>

  <p>The latest version of Eclipse Che is available for download: </br>
    <li><a href="<?php echo $rootPath; ?>/getting-started/download/">Vagrant</a></li></br>
    <li><a href="<?php echo $rootPath; ?>/getting-started/download/">Docker</a></li></br>
    <li><a href="https://marketplace.yatta.de/profiles/iQBd" target="_blank">Yatta Profile</a></li>

<p>Eclipse Che is available as a SaaS cloud or private cloud:</br>
<li><a href="<?php echo $rootPath; ?>/getting-started/cloud/">SaaS Cloud hosted at codenvy.com</a> </li></br>
<li><a href="https://bitnami.com/stack/eclipse-che">Deployed to your private cloud by Bitnami</a></li>

  <div class="separator"></div>

  <h2>Eclipse Signed Packages</h2>
  <p><a href="https://eclipse.org/che/getting-started">Packages let you run Che server, for the best performance. Packages extract Eclipse Che into a working directory. You must have </a><a href="https://www.java.com/en/download/">Java 1.8</a> installed. Windows and MacOS also require <a href="https://www.docker.com/docker-toolbox">Docker Toolbox</a> to be separately installed, which itself installs Git Bash, Virtual Box, and Docker.</p>

  <ul>
    <li><h4>ZIP Package for Windows, Mac, and Linux</h4></li>
    <li><i>Installs Che in any directory</i></li>
    <li><h4><b><a href="https://www.eclipse.org/downloads/download.php?file=/che/eclipse-che-4.0.1.zip&amp;r=1">❯ Download signed binaries from Eclipse mirrors (142 MB)</a></b></h4></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.zip">❯ Download unsigned latest release from Codenvy servers (140 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.zip">❯ Download unsigned nightly from Codenvy servers (140 MB)</a></li>
  </ul>

  <ul>
    <li><h4>TGZ Package for Windows, Mac, and Linux</h4></li>
    <li><i>Installs Che in any directory</i></li>
    <li><h4><b><a href="https://www.eclipse.org/downloads/download.php?file=/che/eclipse-che-4.0.1.tar.gz&amp;r=1">❯ Download latest signed binaries from Eclipse mirrors (137 MB)</a></b></h4></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.tar.gz">❯ Download unsigned latest release from Codenvy servers (135 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.tar.gz">❯ Download unsigned nightly from Codenvy servers (135 MB)</a></li>
  </ul>

  <ul>
    <li><h4>JAR Universal Extractor</h4></li>
    <li class="monospace"><i>java -jar &lt;jar-file&gt;</i></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.jar">❯ Download unsigned latest release from Codenvy servers (138 MB)</a></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-nightly.jar">❯ Download unsigned nightly from Codenvy servers (138 MB)</a></li>
  </ul>
  <p>Need help getting Che to run? Please check the oodles of <a href="https://eclipse-che.readme.io/docs/">installation and usage docs</a>.</p>
  <div class="separator"></div>

  <h2>Installers</h2>
  <p>Installers install Eclipse Che and all its platform dependencies including Java, Git Bash, Docker Toolbox, and Virtual Box.</p>

  <ul>
    <li><h4>EXE Installer for Windows 7+</h4></li>
    <li><i>Installs Che, Java, Docker, Git Bash, and Shortcuts</i></li>
    <li><a href="https://install.codenvycorp.com/che/eclipse-che-latest.exe">❯ Download unsigned latest release from Codenvy servers (416 MB)</a></li>
  </ul>
  <div class="separator"></div>

  <h2>Docker</h2>
  <p>You can run the Che server as a Docker image. There are two ways to achieve this. First, you can <b><a href="https://eclipse-che.readme.io/docs/usage#command-line">install Che and then use the Che command line</a></b> to launch Che on localhost or in a Docker container created by Che. Second, you can <b><a href="https://eclipse-che.readme.io/docs/usage-docker">launch a Docker container containing Che</a></b> with any Docker client.</p>
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
  <p>Eclipse Che has different prerequisites for different platforms. The <b><a href="https://eclipse-che.readme.io/docs/install-pre-reqs">prerequisites page</a></b> in our docs itemizes the list of dependencies and how they are used.</p>
  <div class="separator"></div>
   
  <h2>Build Assembly From Source</h2>
  <p>You will need maven, Java, and Git to build Che from source. <b><a href="http://github.com/eclipse/che">Our GitHub repository has build and contribution instructions</a></b>.</p>
  <div class="separator"></div>

  <h2>Older Releases</h2>
  <p>Archived versions of previous releases are maintained on the <b><a href="https://github.com/eclipse/che/releases">Che GitHub release page</a></b>.</p>
</div> <!-- /.container-fluid -->


<?php include '../includes/footer.php'; ?>
