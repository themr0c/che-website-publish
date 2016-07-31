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
    <h1>Run Che Locally</h1>
    <h3>Install anywhere Docker runs.</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  
    <h2>1. Start Che with Docker</h2>
    <code style="font-size: 100%; line-height: 40px;">docker run -t -v /var/run/docker.sock:/var/run/docker.sock codenvy/che-launcher start</code>
    <p style="font-size: 16px; line-height: 20px;"> 
      <a href="https://docs.docker.com/engine/installation/">&nbsp;&nbsp;Docker 1.10+</a> required.<br>
      &nbsp;&nbsp;Configure properties for Eclipse Che like port, user execution and hostname <a href="https://eclipse-che.readme.io/docs/usage-docker-launcher#configure-how-che-launches">with environment variables</a>.</br>
      &nbsp;&nbsp;Don't want to install Docker? Use <a href="https://marketplace.yatta.de/profiles/eclipse.che">Yatta (requires TOS acceptance)</a> which installs Che and Docker together.</br>
      &nbsp;&nbsp;Or, use our <a href="https://github.com/eclipse/che/blob/master/Vagrantfile">Vagrant image</a> with Docker already installed.    
    </p>

    <p>The startup sequence will download any Docker images required and start the server.
    <script src="https://gist.github.com/TylerJewell/62636be9e3601d6a51c50dee34f708f1.js"></script>
    
    <div class="separator"></div>

    <h3>2. Use Che</h3>
    The access URL varies by OS, Docker install type, and any environment variables set by you.
    <p><img src="https://www.eclipse.org/che/images/features/img-features-docker-powered.png" width="700" height="450" alt="Eclipse Che Workspace" style="vertical-align:baseline"/><p>
   
    <div class="separator"></div>

    <h3>3. Add Our CLI To Make Life Simpler</h3>
    <p>Linux</p>
    <script src="https://gist.github.com/TylerJewell/f064857038110d2205c5aa377c01942f.js"></script>

    <p>Windows (Requires <a href="https://git-for-windows.github.io/">Git Bash</a>)</p>
    <script src="https://gist.github.com/TylerJewell/14dd2136997eea7540ee748f791b24d7.js"></script>  

    <p>CLI: Run Che</p>
    <script src="https://gist.github.com/TylerJewell/66c4bba115cd49674dde921006a170ca.js"></script>

    <p>CLI: Create Workspaces From Any Git Repo</p>
    <script src="https://gist.github.com/TylerJewell/6ec5ad03e96a0507ce45ad2e400144b6.js"></script>

    <p style="font-size: 16px; line-height: 20px;">&nbsp;&nbsp;You can configure how Che creates your workspace <a href="">by adding a Chefile to the repo</a>.</p>

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



<?php include '../../includes/footer.php'; ?>
