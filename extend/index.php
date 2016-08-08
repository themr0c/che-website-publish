<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Extend';
  // Define body class
  $bodyClass = 'extend';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid">
    <h1>Extend</h1>
    <h3>Get inspired, then extend Che with your own innovations.</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">

<div class="container-fluid content">
  
<!-- .extend types start -->

  <h2>Platform Extension Points</h2>
  <p>Everything in Eclipse Che can be altered, from changing the stack library to creating new assemblies that distribute developer tooling with your own branding.</p>


<div class="separator"></div>

<div class="row">
    <div class="col-sm-4">
      <h3>Stacks</h3>
      <p>Stacks define new types of workspace runtimes displayed in the dashboard.</p>
      <p>
      <a href="<https://eclipse-che.readme.io/docs/stacks">Add Stacks to Che</a><br>
      <a href="https://github.com/codenvy/dockerfiles">Stacks Included with Che</a>
      <a href="https://eclipse-che.readme.io/docs/stack">Che Stacks Data Model</a>
    </div>

    <div class="col-sm-4">
      <h3>Recipes</h3>
      <p>Recipes describe the contents of a runtime created by a stack. Recipes can be Dockerfiles and soon Compose files.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/recipes#section-custom-recipe">Custom Recipes</a><br>
      <a href="https://eclipse-che.readme.io/docs/recipes#section-issue-a-pull-request-to-improve-recipes">Improve Che Recipes</a>
    </div>

    <div class="col-sm-4">
      <h3>Templates</h3>
      <p>Sample code that can be used to bootstrap the contents of a new project.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/templates">Custom Templates</a><br>
      <a href="https://eclipse-che.readme.io/docs/template">Che Templates Data Model</a>
    </div>
  </div> <!-- .row -->

<div class="separator"></div>

<div class="row">
    <div class="col-sm-4">
     <h3>Commands</h3>
     <p>Processes that are injected into workspaces. Available to users to automate actions like compile and previews.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/commands">Custom Commands</a><br>
      <a href="https://eclipse-che.readme.io/docs/commands#macros">Command Macros</a>
    </div>

    <div class="col-sm-4">
      <h3>Workspace Extensions</h3>
      <p>Modify the runtime behavior of the workspace with code that runs in agents with access to projects.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/developing-extensions">Developing Extensions</a><br>
      <a href="https://eclipse-che.readme.io/docs/developing-extensions#server-side-extension-example">Server-Side Tutorial</a>
      <a href="https://github.com/eclipse/che/tree/master/plugins">Che Extensions</a>    
      <a href="https://eclipse-che.readme.io/v4.0/docs/java-class-reference">Che Extension SDK Doc</a>
    </div>

    <div class="col-sm-4">
      <h3>IDE Extensions</h3>
     <p>Modify the behavior of the IDE loaded in the browser with new views, actions, look, perspectives, and wizards.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/developing-extensions">Developing Extensions</a><br>
      <a href="https://eclipse-che.readme.io/docs/developing-extensions#ide-extension-example">Client-Side Tutorial</a>
      <a href="https://eclipse-che.readme.io/docs/calling-workspace-apis">Invoking Workspace APIs</a>
    </div>
  </div> <!-- .row -->

<div class="separator"></div>

  <div class="row">
    <div class="col-sm-4">
      <h3>Plugins</h3>
      <p>Packaged groups of extensions with descriptors and UI resources that can be deployed as a group.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/plug-ins#get-plug-ins">Get Plugins</a><br>
    </div>

    <div class="col-sm-4">
      <h3>REST APIs</h3>
      <p>The Che server and each workspace has all services programmable through REST APIs.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/rest-api">Che Server REST APIs</a><br>
      <a href="https://eclipse-che.readme.io/docs/rest-api#workspace-agent-apis">Workspace REST APIs</a>
    </div>

    <div class="col-sm-4">
      <h3>Assemblies</h3>
     <p>A re-packaging of Eclipse Che distributable as a new desktop IDE application or server.</p>
      <p>
      <a href="https://eclipse-che.readme.io/docs/assemblies#che-layout">Che Layout</a><br>
      <a href="https://eclipse-che.readme.io/docs/assemblies#modules">Che Modules</a><br>
      <a href="https://eclipse-che.readme.io/docs/assemblies#custom-assemblies">Custom Assemblies</a>
    </div>
  </div> <!-- .row -->
</div><!-- .contributors -->

<!-- .extend types start -->

<!-- .logo section start -->

<div class="container-fluid content options">

<h2>Organizations Extending Eclipse Che</h2>

<div class="separator"></div>

  <div class="row">
    <div class="col-sm-6">
      <img src="../images/logo-extend-codenvy@2x.jpg" alt="Codenvy">
      <h2>Codenvy</h2>
      <p>Codenvy provides a multi-user, multi-tenant and elastic Eclipse Che with enterprise features including LDAP, single sign-on, security, and resource controls.</p>
      <a href="<?php echo $rootPath; ?>/extend/codenvy/" class="btn-yellow">Learn More</a>
    </div>

    <div class="col-sm-6">
      <img src="../images/logo-extend-redhat@2x.jpg" alt="RedHat">
      <h2>Red Hat Open Shift</h2>
      <p>Eclipse Che is the strategic tooling platform for Red Hat. Workspace portability, workspace runtimes powered by Docker, and IDE extensibility are areas of technical collaboration.</p>
      <a href="https://eclipse-che.readme.io/docs/openshift-config" class="btn-yellow" target="_blank">Learn More</a>  
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <img src="../images/logo-extend-samsung@2x.jpg" alt="Samsung">
      <h2>Samsung ARTIK IDE</h2>
      <p>Samsung uses Eclipse Che for their IoT-IDE to give ARTIK customers a development environment that is identical on the desktop and the cloud.</p>
      <a href="<?php echo $rootPath; ?>/extend/artik/" class="btn-yellow">Learn More</a>
    </div>
    <div class="col-sm-6">
      <img src="../images/logo-extend-sap@2x.jpg" alt="SAP">
      <h2>SAP Hana Cloud IDE</h2>
      <p>Che powers developer workspaces in SAP Hana Cloud. SAP authored a custom Web IDE that uses Che workspaces over RESTful APIs to create multi-targeted application development environments.</p>
      <a href="<?php echo $rootPath; ?>/extend/sap/" class="btn-yellow">Learn More</a>
    </div>


  </div> <!-- /.row -->
</div> <!-- /.container-fluid -->

<!-- .logo section end -->


<!-- .plugins section start -->


<div class="container-fluid content">
  

  <h2>Plug-Ins</h2>
     <p>Eclipse Che includes a growing set of <a href="https://eclipse-che.readme.io/docs/plug-ins">plug-ins</a>. You can also <a href="https://eclipse-che.readme.io/docs/developing-extensions">create and package</a> your own. You can also extend Che's runtimes, stacks, commands, look-and-feel. We are starting to build out customization <a href="https://github.com/eclipse/che/blob/master/CUSTOMIZING.md">resource center</a>.</p>


<div class="separator"></div>

<div class="row">
    <div class="col-sm-6">
       <h3>Languages</h3>
        <p>Syntax highlighting, stacks, templates, and code assistants.</p>
        <ul>
          <li>Java</li>
          <li>C++</li>
          <li>JavaSript</li>
          <li>Python</li>
          <li>PHP</li>
          <li>Ruby</li>
          <li>SQL</li>
        </ul>
    </div>

    <div class="col-sm-6">
        <h3>Frameworks</h3>
        <p>Project types, scaffold tool integration, and syntax analysis.</p>
        <ul>
          <li>Samsung ARTIK</li>
          <li>SAP HANNA</li>
          <li>Red Hat OpenShift</li>
          <li>Angular JS</li>
          <li>Docker</li>
          <li>Yeoman</li>
        </ul>
    </div>

   
  </div> <!-- .row -->

<div class="separator"></div>

<div class="row">
    <div class="col-sm-6">
      <h3>Builders</h3>
        <p>Builders to manage unit tests, compilation, linking, and dependencies.</p>
        <ul>
          <li>Ant</li>
          <li>Bower</li>
          <li>Grunt</li>
          <li>Gulp</li>
          <li>Maven</li>
          <li>Npm</li>
        </ul>
    </div>


    <div class="col-sm-6">
         <h3>Tools</h3>
        <p>Extensions that integrate the IDE with other parts of the developer tool chain.</p>
        <ul>
          <li>Git</li>
          <li>Orion</li>
          <li>SSH</li>
          <li>Subversion</li>
        </ul>
    </div>
  </div> <!-- .row -->
</div><!-- .contributors -->


<!-- .extend section end -->



<div class="bg-gray5 get-help">
  <div class="container-fluid content">
    <h2>Commercial and Enterprise Support</h2>
    <p>Codenvy offers commercial and enterprise support options for Eclipse Che, please contact them to discuss your needs.</p>
    <a href="https://codenvy.com/contact/questions/" class="btn-yellow" target="_blank">Talk to Codenvy</a>  
  </div> <!-- .container-fluid -->
</div> <!-- .get-help -->



<?php include '../includes/footer.php'; ?>
