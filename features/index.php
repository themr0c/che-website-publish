<?php 
  include '../includes/variables.php';

  // Define page title
  $pageTitle = 'Eclipse Che | Features';
  // Define body class
  $bodyClass = 'features';

  include '../includes/head.php';
  include '../includes/header.php';
?>


<div class="jumbotron">
  <div class="container-fluid" id="top">
    <h1>Features</h1>
    <h3>Eclipse Che is the only open source cloud IDE with RESTful workspaces and Docker-based machines. It's as powerful as it sounds. Take a deeper look.</h3>
  </div> <!-- /.container-fluid -->
</div> <!-- /.jumbotron -->


<hr class="gray">
<div class="container-fluid content">
  <h2>Quick Links</h2>
  <div class="row quick-links">
    <ul class="col-sm-4">
      <li><a href="#new-workspace">Workspaces with Runtimes</a></li>
      <li><a href="#docker-powered">Docker Machines</a></li>
      <li><a href="#workspace-agents">Workspace Agents</a></li>
      <li><a href="#collaborative">Collaborative Workspaces</a></li>
      <li><a href="#restful-workspaces">RESTful Workspaces</a></li>
      <li><a href="#ssh">SSH / Terminal</a></li>
    </ul>

    <ul class="col-sm-4">
      <li><a href="#cloud-ide">Cloud IDE</a></li>
      <li><a href="#multi-project">Multi-Project</a></li>
      <li><a href="#commands">Commands</a></li>
      <li><a href="#previews">Previews</a></li>
      <li><a href="#intellisense-java">Java Intellisense</a></li>
      <li><a href="#intellisense-js-html-css">JavaScript Intellisense</a></li>
    </ul>

    <ul class="col-sm-4">    
      <li><a href="#light-theme">Light Theme</a></li>
      <li><a href="#plug-in">Plug-Ins</a></li>
      <li><a href="#open-source">Open Source</a></li>
      <li><a href="#love">Dogfooded With Love</a></li>
    </ul>
  </div> <!-- /.quick-links -->


  <div class="row" id="new-workspace">
    <div class="col-sm-6">
      <h2>Production Runtimes</h2>
      <p>Eclipse Che works with any Docker container, even Compose multi-container runtimes. Use an image from DockerHub, your own private registry or one of the many that ship with Che. Add agents for SSH, terminal and language services to dev-enable your production images. When stopped, Che workspaces can be snapshotted, saving their state between runs.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Docker Runtimes</li>
        <li>Compose Runtimes</li>
        <li>Root Access Terminal</li>
        <li>SSH Access</li>
        <li>Pre-Built and Custom Stacks</li>
        <li>Workspace Snapshots</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-a-new-kind-of-workspace.png"><img alt="" class="img-responsive" src="../images/features/img-features-a-new-kind-of-workspace.png" /></a>
    </div>
  </div>

  
  <div class="row" id="docker-powered">
    <div class="col-sm-6">
      <h2>“Dev Mode” your Workspace</h2>
      <p>Inject developer services into a workspace with agents for syntax auto-complete, error checking and a debugger. Add intellisense for additional languages with language server agents. Enable root-access terminal and SSH access with the flick of a switch.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Language Servers</li>
        <li>Intellisense and Refactoring</li>
        <li>Debuggers</li>
        <li>Workspace Agents</li>
        <li>Intelligent Commands</li>
        <li>Root Access Terminal</li>
        <li>SSH Access</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-technology-stacks.png"><img alt="" class="img-responsive" src="../images/features/img-technology-stacks.png" /></a>
    </div>
  </div>

  <div class="row" id="workspace-agents">
    <div class="col-sm-6">
      <h2>Use any IDE</h2>
      <p>Start working from any device without installing software by using the built-in Eclipse Che IDE. Or stick with the desktop IDE you love by mounting into the Che workspace. Your choice.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Browser IDE</li>
        <li>SSH Access</li>
        <li>Mount-and-Sync Workspace</li>
        <li>Electron Client</li>
        <li>RESTful Workspace APIs</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-technology-eclipse-desktop.png"><img alt="" class="img-responsive" src="../images/features/img-technology-eclipse-desktop.png" /></a>
    </div>
  </div>
  
  <div class="row" id="collaborative">
    <div class="col-sm-6">
      <h2>Tailor Development for Your Team</h2>
      <p>Create custom stacks - runtimes based on your production images, but with the tools your devs need. Anyone can quickly create a production-compliant app by building on a team stack, or duplicating a workspace. Sample code can even be added for training or to start people on the right foot.</p>
      <p>Under the hood:</p>
      <ul>
        <li>Runtime Stacks</li>
        <li>Team Workspaces</li>
        <li>Project Samples</li>
      </ul>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-docker-powered.png"><img alt="" class="img-responsive" src="../images/features/img-features-docker-powered.png" /></a>
    </div>
  </div>

  <div class="row" id="restful-workspaces">
    <div class="col-sm-6">
      <h2>RESTful Workspaces</h2>
      <p>All Che services are reachable through RESTful APIs. Che exposes APIs for managing the workspace master, and also provides RESTful access to each individual workplace through the workspace agent. The Che workspace master provides workspace orchestration and user management. In each workspace agent is a micro Che server that exposes project-specific APIs. For example, Che has RESTful JDT wrappers to enable 100+ forms of distributed Java intellisense. This Java-specific API is injected as a workspace agent by Che. Programming the API is simple - get started by <a href="https://eclipse-che.readme.io/docs/rest-api">browsing our APIs with Swagger</a>.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-RESTful.png"><img alt="" class="img-responsive" src="../images/features/img-features-RESTful.png" /></a>
    </div>
  </div>
  
  <div class="row" id="ssh">
    <div class="col-sm-6">
      <h2>SSH / Terminal</h2>
      <p>Che injects an SSH daemon into workspace machines. Connect your existing IDE - Eclipse if you like - with an SSH sync point. Upload your key pair or have Che generate a new pair for each workspace. You can also access your workspace with Che's browser terminal, giving you root access to workspace machines.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-ssh-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-ssh-workspaces.png" /></a>
    </div>
  </div>

  
  <div class="row" id="cloud-ide">
    <div class="col-sm-6">
      <h2>Cloud IDE</h2>
      <p>A no-installation browser IDE and IOE accessible from any local or remote device. Thin, fast, and beautiful - it's the IDE our own engineers wanted. The IDE is packaged as cross-browser JavaScript and CSS, hosted as resources cached by browsers. Work on multiple workspaces in different browser tabs with each tab consuming ~100MB of RAM. It's a smoother interactive experience that doesn't suffer blockages from thrashing when the workspace is remote.</p>
      <p>The tools you expect are there: embedded Orion editor, numerous key bindings, globalized keyboard support, and git / subversion tools including diff.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-cloud-ide.png"><img alt="" class="img-responsive" src="../images/features/img-features-cloud-ide.png" /></a>
    </div>
  </div>

  
  <div class="row" id="multi-project">
    <div class="col-sm-6">
      <h2>Multi-Project</h2>
      <p>Che is a true IDE platform, recognizing projects are bound to a repository and given a type. Project types bestow special behaviors, such as when Che injects the RESTful JDT core into workspace machines when Java projects are added. Workspaces can have multiple projects, each with their own type. Projects can be independently built and run, even though all projects share a common workspace machine. Currently, Che has limited project types for JavaScript, Maven, and ‘blank’. <a href="https://eclipse-che.readme.io/docs/contribute">We'll collaborate with the ecosystem</a> to package new types for frameworks, packaging systems and programming languages.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-multi-project-workspaces.png"><img alt="" class="img-responsive" src="../images/features/img-features-multi-project-workspaces.png" /></a>
    </div>
  </div>

  
  <div class="row" id="commands">
    <div class="col-sm-6">
      <h2>Commands</h2>
      <p>A command is a process that is injected into a machine. Commands are provided by users, workspaces, or projects. Commands have a type, like projects, which imbue additional behaviors. For example, the maven command type has inherent knowledge of how maven lifecycle phases operate. When executed, a command is translated into a process and injected into a machine, where it can operate against projects or other resources within the machine itself. Commands are context sensitive, allowing a user to execute commands across projects and modules, getting context-specific outcomes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>


    <div class="col-sm-6">
      <a href="../images/features/img-features-commands.png"><img alt="" class="img-responsive" src="../images/features/img-features-commands.png" /></a>
    </div>
  </div>

  
  <div class="row" id="previews">
    <div class="col-sm-6">
      <h2>Previews</h2>
      <p>Create custom previews that launch files and web pages with the context of your projects and workspaces. Embed preview intelligence inside of commands and workspaces so that logic on how to launch and debug your project travels wherever your workspace goes.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-previews.png"><img alt="" class="img-responsive" src="../images/features/img-features-previews.png" /></a>
    </div>
  </div>

  
  <div class="row" id="intellisense-java">
    <div class="col-sm-6">
      <h2>Java Intellisense</h2>
      <p>Over 100 forms of Java content assist that are so responsive that you will do a double take. Features include modules (sub-folders that can be independently built and run), multi-module structures, dozens of intellisense, multiple forms of refactoring, an embedded debugger, JavaDoc, jump to definition, and class structure navigation.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-java.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-java.png" /></a>
    </div>
  </div>

  
  <div class="row" id="intellisense-js-html-css">
    <div class="col-sm-6">
      <h2>JavaScript Intellisense</h2>
      <p>The <a href="https://orionhub.org/">Orion editor</a> provides dozens of assistants for interpreted languages including JavaScript (and even some hidden templating for Go)! Autocomplete, error marking, recommendations, documentation, and jump to definitions are exposed and ready to go.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-intellisense-javascript.png"><img alt="" class="img-responsive" src="../images/features/img-features-intellisense-javascript.png" /></a>
    </div>
  </div>

</div>

<div class="tech">
  <div class="container-fluid content">
    <div class="row" id="light-theme">
      <div class="col-sm-6">
          <h2>Light Theme</h2>
          <p>Che, like Yoda, wants to bring balance to the force. Flip a switch and transform the IDE with a dark or light theme. </p>
          <p><a href="#top">Back to Top</a></p>
      </div>
      <div class="col-sm-6">
        <a href="../images/features/img-features-light-theme.png"><img alt="" class="img-responsive" src="../images/features/img-features-light-theme.png" /></a>
      </div>

    </div>
  </div>
</div> <!-- .tech -->

<div class="container-fluid content">

  <div class="row" id="plug-in">
    <div class="col-sm-6">
      <h2>Plug-In Framework</h2>
      <p>Che is extensible, by customizing built-in plug-ins or authoring your own extensions. Package plug-ins with Che core to create new assemblies installable by your user base. You can write IDE, Che server, or workspace agent plug-ins, with Che injecting the plug-in into the right location at the right time.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-plugin-framework.png"><img alt="" class="img-responsive" src="../images/features/img-features-plugin-framework.png" /></a>
    </div>
  </div>

  
  <div class="row" id="open-source">
    <div class="col-sm-6">
      <h2>Open Source to the Core</h2>
      <p>Eclipse Che has been developed over 4 years with contributions from Codenvy, eXo Platform, IBM, SAP, Microsoft, Intuit, WSO2, Serli, RedHat, and open source individuals from China, Brazil, France, Ukraine, Russia, Canada, India, Sri Lanka, and the United States. It is part of the Eclipse Cloud Development top-level project, and ecosystem contributions are open and encouraged. </p>
      <p>Please participate, even if only spiritually. There are many ways to get involved including starring the <a href="https://github.com/codenvy/che/stargazers">GitHub repo</a>, <a href="https://github.com/codenvy/che/issues">submitting issues</a>, <a href="https://eclipse-che.readme.io/docs/">writing docs</a>, or <a href="https://eclipse-che.readme.io/docs/plug-ins">contributing plug-ins</a>.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-open-source-core.png"><img alt="" class="img-responsive" src="../images/features/img-features-open-source-core.png" /></a>
    </div>
  </div>

  
  <div class="row" id="love">
    <div class="col-sm-6">
      <h2>Dogfooded With Love</h2>
      <p>We built the product that we would love to use everyday. To do that you must build what you eat and eat what you built. Love -- and sometimes frustration -- has poured into Che as our engineers weaned off their favorite IDEs to build Che with Che.</p>
      <p><a href="#top">Back to Top</a></p>
    </div>

    <div class="col-sm-6">
      <a href="../images/features/img-features-dogfooded.png"><img alt="" class="img-responsive" src="../images/features/img-features-dogfooded.png" /></a>
    </div>
  </div>
</div> <!-- .container-fluid -->


<div class="twitter-share">
  <h6><i class="fa fa-twitter"></i> Was this page helpful? <a href="https://twitter.com/share">Share it on Twitter</a></h6>
</div>



<?php include '../includes/footer.php'; ?>
