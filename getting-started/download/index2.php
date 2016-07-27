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
  
    <h2>Install Eclipse Che - Universal for All OS</h2>
      <p><b>1:</b> Install Docker. [link to docker]</p>
      <p><b>2:</b> <code> docker run -t -v /var/run/docker.sock:/var/run/docker.sock codenvy/che-launcher start</code></p>
      
    <div class="separator"></div>

    <h2>... Or Use Yatta To Install Docker and Che Together</h2>
        <p>[YATTA]Can we do nice embed of Yatta here?</p>

    <div class="separator"></div>

    <h2>... Then Get Your First Workspace Running</h2>
      <p><b>Vagrant:</b> Che is already running! <code>http://192.168.28.100:8080</code> will open Che's dashboard.</p>
      [CONSIDER SHOWING SYNTAX FOR DOING A TEST TO ADD <your-first-workspace> to the system]
      <p><a href="../../images/features/img-features-docker-powered.png"><img alt="" class="img-responsive" src="../../images/features/img-features-docker-powered.png"></a></p>
   
    <h2>... Then Optionally Install Che CLI To Make Life Better</h2>

    <h3>... Get Eclipse Che CLI </h3>
        <p><i>For Linux...
          <code>
            wget -0- http://eclipse.org/che/che.sh | sh start
            curl -sL http://eclipse.org/che/che.sh | sh start
          </code>
        </p>
        <p><i>For Windows (requires Git Bash [LINK])...
          <code>
            curl -sL http://eclipse.org/che/che.bat > che.bat
            set PATH=<currentdirectory>;%PATH%
          </code>
        </p>
    <h3>... Create Workspaces From Any Git Repo </h3>
        <p><b>Syntax for Che Up here.</p>
   
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
