<?php 
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Local Install';
  // Define body class
  $bodyClass = 'getting-started-download';

  include '../../includes/head.php';
  include '../../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Local Install</h1>
    <h3>Install Eclipse Che on your computer or a development server.</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  
    <h2>Installation Types</h2>

      <p><b>Vagrant:</b> The quickest way to try Eclipse Che on any operating system.</p>

      <p><b>Server:</b> The best performance, especially on Docker-native systems.</p>

      <p><b>Docker:</b> Run Eclipse Che in a container</a>.</p>

      <p><b>Yatta:</b> A headless Che installer that also installs OS dependencies.</p>

    <div class="separator"></div>

    <h2>Avoid These Common Setup Gotchas</h2>
        <p><b>Windows/Mac:</b> VT-X/AMD-v must be enabled on your laptop. You can change this <a href="https://docs.fedoraproject.org/en-US/Fedora/13/html/Virtualization_Guide/sect-Virtualization-Troubleshooting-Enabling_Intel_VT_and_AMD_V_virtualization_hardware_extensions_in_BIOS.html">in the BIOS</a>.</p>
        <p><b>Windows:</b> If VirtualBox fails to create a VM, the most common reason is <a href="http://stackoverflow.com/questions/33725779/failed-to-open-create-the-internal-network-vagrant-on-windows10">NDIS driver bugs</a>.</p>
        <p><b>Proxies:</b> If you are behind a proxy, configure <a href="https://eclipse-che.readme.io/v4.0/docs/usage#installing-behind-a-proxy">Vagrant's proxy</a>, or if installing as a server, <a href="https://eclipse-che.readme.io/v4.0/docs/configuration-proxies">setup Che's proxies</a>.</p>

    <div class="separator"></div>

    <h2>1. Install Che</h2>
        <p><b>Vagrant:</b> First install <a href="https://www.virtualbox.org/wiki/Downloads">VirtualBox</a> and <a href="https://www.vagrantup.com/downloads.html">Vagrant</a>. <a href="https://github.com/eclipse/che/blob/master/Vagrantfile">Place Che's Vagrantfile in an empty directory</a>. Execute <code>vagrant up</code>. The Vagrant installer configures Java, Docker, and the latest released version of Che. You can <a href="https://eclipse-che.readme.io/docs/usage-vagrant"> customize the Vagrantfile with a different IP address, DHCP, proxies, and logging output.</a></p>
        <p><b>Server:</b> You must first <a href="https://eclipse-che.readme.io/docs/install-pre-reqs">install Java and Docker Toolbox</a>. Then install <a href="https://www.eclipse.org/che/download/">Che from a ZIP file</a>. Another option is that Codenvy provides a <a href="https://install.codenvycorp.com/che/eclipse-che-latest.exe">Windows wizard-based installer that installs both Che and its prerequisites</a>.</p>
        <p><b>Docker:</b> Launch a Che container using our <a href="https://eclipse-che.readme.io/docs/usage-docker#using-docker-syntax">Docker run syntax</a>.</p>
        <p><b>Yatta:</b> Go <a href="https://marketplace.yatta.de/profiles/iQBd" target="_blank">to their marketplace</a> and accept their terms of service to get a self-updating installer.</p>
  <div class="separator"></div>
    <h2>2. Run Che</h2>
      <p><b>Vagrant:</b> Che is already running! <code>http://192.168.28.100:8080</code> will open Che's dashboard.</p>
      <p><b>Server:</b> Follow these <a href="https://eclipse-che.readme.io/v4.0/docs/usage-server">usage steps</a>.</p>
      <p><a href="../../images/features/img-features-docker-powered.png"><img alt="" class="img-responsive" src="../../images/features/img-features-docker-powered.png"></a></p>
      
  
   <div class="separator"></div>
    <h2>3. Create Workspaces and Projects</h2>
      <p><b>Create a Workspace:</b> Che provides a step-by-step wizard for creating workspaces. The wizard creates workspaces with ready-to-go runtimes that contain projects that can be compiled, run and debugged. The Java and Node.JS stacks offer the most choice when starting.</p>
      <p><b>Problems:</b> If workspace creation fails, it's usually due to network configuration. <a href="https://eclipse-che.readme.io/docs/networking">Review the networking guide for configuring Che in different networks</a>.</p>
      <p><b>Tutorials:</b> Step-by-step-by-step tutorials using different developer frameworks such as <a href="https://eclipse-che.readme.io/docs/get-started-with-java-and-che">Java</a>, <a href="https://eclipse-che.readme.io/docs/get-started-with-wordpress-and-che">Wordpress</a>, <a href="https://eclipse-che.readme.io/docs/get-started-with-nodejs-and-che">Node.js</a>, <a href="https://eclipse-che.readme.io/docs/che-and-subversion">Subversion</a>, and many more.</p><p></p>

  <div class="separator"></div>
    <h2>4. Setup Hosted Che</h2>
      <p><b>Multiple Users:</b> Run Che as a server with its services remotely accessible. <a href="https://eclipse-che.readme.io/docs/networking">You must change Che's networking</a> to ensure users browser can connect to Che and its workspaces.</p>

  <div class="separator"></div>
    <h2>5. Customize Che</h2>
      <p>You can <a href="https://github.com/eclipse/che/blob/master/CUSTOMIZING.md">customize Che's stacks, templates, recipes, commands, IDE extensions, workspace extensions, REST APIs, plugins, or assemblies. Add your own runtimes and templates.</a></p>
     
  <div class="separator"></div>
    <h2>6. Contribute to Che</h2>
      <p><b>Build Che From Source:</b> We love that idea. Che is a multi-module project, so you can build all of it, or just some of it. We maintain build instructions in our <a href="https://github.com/eclipse/che">GitHub repository.</a></p>
      <p><b>Contribute:</b> We also love this. You can contribute in many ways: documentation, writing articles, creating plug-ins, solving bugs, or getting into the core feature roadmap. We maintain a document that outlines how <a href="https://github.com/eclipse/che/blob/master/CONTRIBUTING.md">you contribute to Che.</a> Also, our roadmap and weekly meeting minutes are maintained <a href="https://github.com/eclipse/che/wiki">on the Che wiki.</a></p>
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
        <p>We put a lot of effort <a href="https://eclipse-che.readme.io/" target="_blank">into our docs.</a> If there are improvements or errors, we'd love that feedback. Chat: Che engineers hang out on Gitter, IRC and Slack.</p>
      </div>
      <div class="col-md-4">
        <h4>Chat</h4>
        <p>Che engineers hang out on <a href="https://gitter.im/eclipse/che?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge" target="_blank">Gitter</a>, <a href="http://qwebirc.swiftirc.net/?nick=fromwebsite&channels=%23eclipseche" target="_blank">IRC</a> and Slack.</p>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->



<?php include '../../includes/footer.php'; ?>
