<?php
  include '../../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | SaaS Cloud';
  // Define body class
  $bodyClass = 'getting-started-cloud';

  $customCss = "css/factory.css";

  include '../../includes/head.php';
  include '../../includes/header.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="scripts/factories.js"></script>

<div class="jumbotron">
  <div class="container-fluid">
    <h1>SaaS Cloud</h1>
    <h3>Self-service Eclipse Che developer workspaces hosted at Codenvy.com</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div ng-app="gettingStarted" class="container-fluid content options">

  <div class="block">
     <h2>Create a workspace using a wizard</h2>
   </div>

   <div class="row">
     <div class="col-md-4 col-sm-6">
       <div class="border media">
         <div class="media-left">
           <img src="../../.../../images/getting-started/codenvy.png" alt="Codenvy">
         </div>

         <div class="media-body">
           <h4>Custom</h4>
           <p class="small">Create workspaces for any language/framework.</p>
         </div>
         <a href="http://codenvy.io/site/login" class="btn-green">Create a free account</a>
       </div>
       <p style="font-size:0.7em">Requires a Codenvy account. You will be asked to accept their TOS.

     </div> <!-- /.col -->
   </div> <!-- /.row -->
   <!-- END_CUSTOM_WORKSPACE -->

   <!-- START_URL_FACTORY -->
  <div class="block">
    <h2>Create a workspace from your GitHub or GitLab repo</h2>
  </div>

  <div class="row">
    <div class="col-md-12">
      <small>Enter a git URL to import</small>
      <form class="form-inline" method="get" action="http://codenvy.io/f/" target="_blank">
        <div class="form-group" style="width: 80%">
          <input type="text" class="form-control" name="url" value="https://github.com/che-samples/console-java-simple" placeholder="Enter GitHub or GitLab project URL" style="width: 100%">
        </div>
        <button type="submit" class="btn btn-primary">Go!</button>
      </form>
      <p style="font-size:0.7em">This will create a new workspace in Codenvy, an Eclipse Che provider. You will be asked to accept their TOS. The workspace will be powered with an Ubuntu / JDK8 stack. You can customize the runtime and project configuration by adding <samp>.codenvy.dockerfile</samp> or <samp>codenvy.json</samp> files inside your repository.
        <a href="https://codenvy.com/docs/integration-guide/workspace-automation/index.html">See docs</a>.</p>
    </div>
  </div>
  <!-- END_URL_FACTORY -->

      <getting-started-factories></getting-started-factories>



</div> <!-- /.container-fluid -->


<div class="bg-gray5 get-help">
  <div class="container-fluid content">
    <h2>How to Get Help</h2>

    <div class="row">
      <div class="col-md-4">
        <h4>Issues</h4>
        <p>Sometimes the unexpected happens. If it does, <a href="#" target="_blank">post issues to our GitHub page</a>. Please <a href="#" target="_blank">follow the issue reporting guidelines.</a></p>
      </div>
      <div class="col-md-4">
        <h4>Documentation</h4>
        <p>We put a lot of effort <a href="#" target="_blank">into our docs.</a> If there are improvements or errors, we'd love that feedback. Chat: Che engineers hang out on Gitter, IRC and Slack.</p>
      </div>
      <div class="col-md-4">
        <h4>Chat</h4>
        <p>Che engineers hang out on <a href="#" target="_blank">Gitter</a>, <a href="#" target="_blank">IRC</a> and <a href="#" target="_blank">Slack</a>.</p>
      </div>
    </div> <!-- .row -->
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->



<?php include '../../includes/footer.php'; ?>
