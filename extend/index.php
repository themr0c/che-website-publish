<?php
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Extend';
  // Define body class
  $bodyClass = 'technology';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Extend</h1>
    <h3>Get inspired, then extend Che with your own innovations.</h3>
    <img alt="" class="img-responsive" src="../images/hero-technology@2x.png" />
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->

<div class="tech">
  <div class="container-fluid content">
    <h2>An Extensible, Customizable Platform</h2>
    <p>Everything is alterable, from stacks to creating assemblies to distribute Che as your own product.</p>
    <img alt="" class="img-responsive" src="../images/hero-home-technology.png" />

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h4>Stacks</h4>
        <p>Define workspace runtime templates displayed in the dsahboard.</p>
        <ul>
          <li><a href="../docs/workspace/stacks/" target="_blank">Add stacks to Che</a></li>
          <li><a href="https://github.com/eclipse/che-dockerfiles/tree/master/recipes">Stacks included with Che</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Recipes</h4>
        <p>Describe a runtime created by a stack with Docker or Compose files.</p>
        <ul>
          <li><a href="../docs/workspace/recipes/" target="blank">Custom Recipes</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Samples</h4>
        <p>Project template code used to bootstrap the contents of a new project.</p>
        <ul>
          <li><a href="../docs/workspace/samples/" target="blank">Custom Templates</a></li>
        </ul>
      </div>

      <div class="clearfix"></div>

    </div> <!-- .row -->

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h4>Commands</h4>
        <p>Processes injected into workspaces. Commands can automate actions like compile and previews.</p><ul>
         <li><a href="../docs/plugins/introduction/" target="blank">Developing Extensions</a></li>
         <li><a href="../docs/plugins/helloworld-extension/" target="blank">Hello World Tutorial</a></li>
         <li><a href="https://github.com/eclipse/che/tree/master/plugins">Che Extensions</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>WS Extensions</h4>
        <p>Modify the runtime behavior of the workspace with code that runs in agents with access to projects.</p>
        <ul>
          <li><a href="../docs/plugins/introduction/" target="blank">Developing Extensions</a></li>
          <li><a href="../docs/plugins/helloworld-extension/" target="blank">Hello World Tutorial</a></li>
          <li><a href="https://github.com/eclipse/che/tree/master/plugins" target="blank">Che Extrensions</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>IDE Extensions</h4>
        <p>Modify the behavior of the browser IDE with new views, actions, look, perspectives, and wizards.</p>
        <ul>
          <li><a href="../docs/plugins/introduction/" target="blank">Developing Extensions</a></li>
          <li><a href="../docs/plugins/helloworld-extension/" target="blank">Hello World Tutorial</a></li>
          <li><a href="../docs/plugins/calling-workspace-apis/" target="blank">Invoking Workspace APIs</a></li>
        </ul>
      </div>

      <div class="clearfix"></div>
    </div> <!-- .row -->

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h4>Agents</h4>
        <p>Software dynamically installed and run within a user's workspace.</p><ul>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>REST APIs</h4>
        <p>The Che server and each workspace has all services programmable through REST APIs.</p>
        <ul>
          <li><a href="../docs/plugins/calling-workspace-apis/" target="blank">Che REST APIs</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-sm-4">
        <h4>Assemblies</h4>
        <p>A re-packaging of Eclipse Che distributable as a new desktop IDE application or server.</p>
        <ul>
          <li><a href="../docs/plugins/assemblies/" target="blank">Che Layout</a></li>
        </ul>
      </div>

      <div class="clearfix"></div>
    </div> <!-- .row -->


  </div> <!-- .container-fluid -->
</div> <!-- .tech -->

<div class="video">
  <div class="container-fluid content">
    <h2>Who is Extending Che?</h2>

    <div class="row">
      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/codenvy/" target="_blank"><img src="../images/codenvy/img-extend-codenvy@2x.png" style="width: 333px; height: 188px" alt="Codenvy"></a>
        <h3>Codenvy</h3>
        <a href="<?php echo $rootPath; ?>/extend/codenvy/">Cloud workspaces for development teams</a></p>
      </div>

      <div class="col-md-4">
        <a href="../docs/openshift/config/" target="_blank"><img src="../images/logo-extend-redhat@2x.jpg" style="width: 333px; height: 188px" class="img-responsive"></a>
        <h3><a href="../docs/openshift/config/" target="_blank">Red Hat Open Shift</a></h3>
        <p>Strategic developer tooling platform for Docker orchestration</p>
      </div>

      <div class="col-md-4">
        <a href="<?php echo $rootPath; ?>/extend/artik/" target="_blank"><img src="../images/logo-extend-samsung@2x.jpg" style="width: 333px; height: 188px" alt="Samsung"></a>
        <h3><a href="<?php echo $rootPath; ?>/extend/artik/" target="_blank">Samsung ARTIK IDE</a></h3>
        <p>IoT IDE to give ARTIK devs an identical cloud and desktop environment</p>
      </div>
    </div> <!-- .row -->

    <div class="row">
      <h3 class="col-sm-12">More Case Studies</h3>

      <ul class="col-md-12">
        <li><a href="<?php echo $rootPath; ?>/extend/bitnami/">Bitnami integrated deverlop convtainers</a> with frameworks for Express, Laravel, Rails, and others</li>
      </ul>

    </div> <!-- .row -->
  </div>
</div>

<?php include '../includes/footer.php'; ?>
