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
    <p style="font-size: 18px; line-height: 24px; margin: 0 0 0px;"> 
      &nbsp;&nbsp;<a href="https://docs.docker.com/engine/installation/">Docker 1.8+</a> required.<br>
      &nbsp;&nbsp;Docker for Mac requires <a href="https://eclipse-che.readme.io/docs/che-getting-started#0-pre-reqs">1-time setup of loopback device.</a><br>
      &nbsp;&nbsp;Don't want to install Docker? Use <a href="https://marketplace.yatta.de/profiles/eclipse.che">Yatta (requires TOS acceptance)</a> which installs Che and Docker together.</br>
    </p>

    <p style="margin: 30px 0 0;">Linux & Mac - Add Our CLI</p>
    <script src="https://gist.github.com/TylerJewell/f064857038110d2205c5aa377c01942f.js"></script>

    <p style="margin: 30px 0 0;">Windows - Add Our CLI - (Requires <a href="https://git-for-windows.github.io/">Git Bash</a>)</p>
    <script src="https://gist.github.com/TylerJewell/14dd2136997eea7540ee748f791b24d7.js"></script>  


    <p style="margin: 30px 0 0;">Download the Che Docker image and start the server
    <script src="https://gist.github.com/TylerJewell/e37305cf2a2c74d8fb7996fb85e96fa5.js"></script>
    <p style="font-size: 18px; line-height: 24px; margin: 0 0 0px;"> 
      &nbsp;&nbsp;Workspaces are saved in /home/user/che. Change where <a href="https://eclipse-che.readme.io/docs/configuration#section-environment-variables">by modifying CHE_DATA_FOLDER.</a><br>
      &nbsp;&nbsp;Configure properties like port, IP and hostname <a href="https://eclipse-che.readme.io/docs/configuration#section-environment-variables">with environment variables</a>.</br>
    </p>

    <p style="margin: 30px 0 0;">CLI: Run Che</p>
    <script src="https://gist.github.com/TylerJewell/66c4bba115cd49674dde921006a170ca.js"></script>

    <p style="margin: 30px 0 0;">CLI: Sync Your Local IDE</p>
    <script src="https://gist.github.com/TylerJewell/9db9f2eaf8c07ec7b74217d75b4f1177.js"></script>

    <h3 style="margin-top: 30px;">2. Use Che</h3>
    The Che URL varies by OS, Docker type, and environment variables set by you.
    <p><img src="https://www.eclipse.org/che/images/features/img-features-docker-powered.png" width="700" height="450" alt="Eclipse Che Workspace" style="vertical-align:baseline"/><p>
   
    <h3 style="margin-top: 30px;">3. Or, Launch Che With Docker Syntax</h3>
    <code style="font-size: 100%; line-height: 40px;">docker run --rm -t -v /var/run/docker.sock:/var/run/docker.sock eclipse/che start</code>
    <p style="margin: 30px 0 0;">The CLI downloads the Che Docker image and and starts the server.
    <script src="https://gist.github.com/TylerJewell/62636be9e3601d6a51c50dee34f708f1.js"></script>    

    <h3 style="margin-top: 30px;">4. Learn More or Get Help</h3>
    <b><p style="margin: 30px 0 0;">Docs</p></b>
    We put a lot of effort into our docs. Please start with <a href="https://eclipse-che.readme.io/docs/usage-docker">the usage page on how to run and configure Che</a>.

    <b><p style="margin: 30px 0 0;">Support</p></b>
    Engineers will respond to <a href="http://github.com/eclipse/che/issues">detailed GitHub issues</a>.

<!--

    <p style="font-size: 15px; line-height: 23px;">&nbsp;&nbsp;&nbsp;&nbsp;You can optionally use <a href="">public/private key authentication</a>.</p>

    <p style="margin: 30px 0 0;">CLI: Create Workspaces From Any Git Repo</p>
    <script src="https://gist.github.com/TylerJewell/6ec5ad03e96a0507ce45ad2e400144b6.js"></script>

    <p style="font-size: 15px; line-height: 23px;">&nbsp;&nbsp;&nbsp;&nbsp;You can use You can configure how Che creates your workspace <a href="">by adding a Chefile to the repo</a>.</p>
-->
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
