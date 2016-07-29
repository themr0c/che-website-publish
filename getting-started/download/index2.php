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
  
    <h2>Start Che with Docker</h2>
    <code>docker run -t -v /var/run/docker.sock:/var/run/docker.sock codenvy/che-launcher start</code>
    <p style="font-size: 12px; line-height: 22px;"> <a href="https://docs.docker.com/engine/installation/">Docker 1.10+</a> required. Or, use our <a href="https://github.com/eclipse/che/blob/master/Vagrantfile">Vagrant image</a> with Docker installed.</br>Configure Che properties like port and hostname <a href="https://eclipse-che.readme.io/docs/usage-docker-launcher#configure-how-che-launches">with environment variables</a>.</p>


    <div class="separator"></div>

    <h2>Or... Use Yatta to Install Docker and Che Together</h3>
    <p>Launch a Yatta profile to automate installation of dependencies with Che.</p>
    <a href="https://marketplace.yatta.de/profiles/eclipse.che" class="btn-yellow" target="_blank">Yatta Profile</a>
    <p style="font-size: 12px; line-height: 22px;"> <a href="">You must accept the Yatta TOS and use their proprietary Eclipse installer</a>.</p>
    
    <div class="separator"></div>

    <h3>Open Che in Your Browser</h3>
    The installer will let you know the location where Che is running.
    <code>http://192.168.28.100:8080</code>
    <p><img src="https://www.eclipse.org/che/images/features/img-features-docker-powered.png" width="700" height="450" alt="Eclipse Che Workspace" style="vertical-align:baseline"/><p>
   
    <div class="separator"></div>

    <h3>Add Our CLI To Make Life Simpler</h3>
    <p>Linux</p>
    <script src="https://gist.github.com/billkalogiros/b894ae51843a7148b3971ef14018f559.js"></script>
      
      <p>Windows (Requires <a href="https://git-for-windows.github.io/">Git Bash</a>)</p>
        
      <script src="https://gist.github.com/billkalogiros/ecdcfbdf2c4428e46d5c64f7758c0ccb.js"></script>
    
      <p>CLI: Start / Stop / Debug Che Server</p>
      <script src="https://gist.github.com/billkalogiros/b7c520b6dea0624b91316c83e96178c8.js"></script>

      <p>CLI: Create Workspaces From Any Git Repo</p>
        <script src="https://gist.github.com/billkalogiros/93de1ed5a6f31fd2120f3567432259c9.js"></script>        
        <p style="font-size: 12px; line-height: 22px;"> This starts Che and creates a workspace with the current directory's contents.<br>
        You can <a href="">configure how Che starts and the workspace runtime with Chefiles</a></p>
  
   <div class="separator"></div>


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
