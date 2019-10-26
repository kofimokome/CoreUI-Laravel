<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-list"></i>
          </a>
        </li>
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-secondary">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="nav-title">Theme</li>
            <li class="nav-item">
              <a class="nav-link" href="colors.html">
                <i class="nav-icon icon-drop"></i> Colors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="typography.html">
                <i class="nav-icon icon-pencil"></i> Typography</a>
            </li>
            <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-puzzle"></i> Base</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="base/breadcrumb.html">
                    <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/cards.html">
                    <i class="nav-icon icon-puzzle"></i> Cards</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/carousel.html">
                    <i class="nav-icon icon-puzzle"></i> Carousel</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/collapse.html">
                    <i class="nav-icon icon-puzzle"></i> Collapse</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/forms.html">
                    <i class="nav-icon icon-puzzle"></i> Forms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/jumbotron.html">
                    <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/list-group.html">
                    <i class="nav-icon icon-puzzle"></i> List group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/navs.html">
                    <i class="nav-icon icon-puzzle"></i> Navs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/pagination.html">
                    <i class="nav-icon icon-puzzle"></i> Pagination</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/popovers.html">
                    <i class="nav-icon icon-puzzle"></i> Popovers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/progress.html">
                    <i class="nav-icon icon-puzzle"></i> Progress</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/scrollspy.html">
                    <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/switches.html">
                    <i class="nav-icon icon-puzzle"></i> Switches</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tables.html">
                    <i class="nav-icon icon-puzzle"></i> Tables</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tabs.html">
                    <i class="nav-icon icon-puzzle"></i> Tabs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="base/tooltips.html">
                    <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-cursor"></i> Buttons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="buttons/buttons.html">
                    <i class="nav-icon icon-cursor"></i> Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/button-group.html">
                    <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/dropdowns.html">
                    <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="buttons/brand-buttons.html">
                    <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Charts</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Icons</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="icons/coreui-icons.html">
                    <i class="nav-icon icon-star"></i> CoreUI Icons
                    <span class="badge badge-success">NEW</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/flags.html">
                    <i class="nav-icon icon-star"></i> Flags</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/font-awesome.html">
                    <i class="nav-icon icon-star"></i> Font Awesome
                    <span class="badge badge-secondary">4.7</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="icons/simple-line-icons.html">
                    <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-bell"></i> Notifications</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="notifications/alerts.html">
                    <i class="nav-icon icon-bell"></i> Alerts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/badge.html">
                    <i class="nav-icon icon-bell"></i> Badge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="notifications/modals.html">
                    <i class="nav-icon icon-bell"></i> Modals</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="widgets.html">
                <i class="nav-icon icon-calculator"></i> Widgets
                <span class="badge badge-primary">NEW</span>
              </a>
            </li>
            <li class="divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link nav-dropdown-toggle" href="#">
                <i class="nav-icon icon-star"></i> Pages</a>
              <ul class="nav-dropdown-items">
                <li class="nav-item">
                  <a class="nav-link" href="login.html" target="_top">
                    <i class="nav-icon icon-star"></i> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.html" target="_top">
                    <i class="nav-icon icon-star"></i> Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="404.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 404</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="500.html" target="_top">
                    <i class="nav-icon icon-star"></i> Error 500</a>
                </li>
              </ul>
            </li>
            <li class="nav-item mt-auto">
              <a class="nav-link nav-link-success" href="https://coreui.io" target="_top">
                <i class="nav-icon icon-cloud-download"></i> Download CoreUI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                <i class="nav-icon icon-layers"></i> Try CoreUI
                <strong>PRO</strong>
              </a>
            </li>
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
          <!-- Breadcrumb Menu-->
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card card-default">
              <div class="card-header">
                <i class="fa fa-picture-o"></i> CoreUI Icons
                <div class="card-header-actions">
                  <a class="card-header-action" href="https://github.com/coreui/coreui-icons" target="_blank">Github</a>
                </div>
              </div>
              <div class="card-body">
                <div class="row text-center">
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-account-logout"></i>
                    <div>account-logout</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-action-redo"></i>
                    <div>action-redo</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-action-undo"></i>
                    <div>action-undo</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-align-center"></i>
                    <div>align-center</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-align-left"></i>
                    <div>align-left</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-align-right"></i>
                    <div>align-right</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-arrow-bottom"></i>
                    <div>arrow-bottom</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-arrow-left"></i>
                    <div>arrow-left</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-arrow-right"></i>
                    <div>arrow-right</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-arrow-top"></i>
                    <div>arrow-top</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-ban"></i>
                    <div>ban</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-basket-loaded"></i>
                    <div>basket-loaded</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-bell"></i>
                    <div>bell</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-bold"></i>
                    <div>bold</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-bookmark"></i>
                    <div>bookmark</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-briefcase"></i>
                    <div>briefcase</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-british-pound"></i>
                    <div>british-pound</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-brush"></i>
                    <div>brush</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-calculator"></i>
                    <div>calculator</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-calendar"></i>
                    <div>calendar</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cart"></i>
                    <div>cart</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-chart"></i>
                    <div>chart</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-check"></i>
                    <div>check</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-chevron-bottom"></i>
                    <div>chevron-bottom</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-chevron-left"></i>
                    <div>chevron-left</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-chevron-right"></i>
                    <div>chevron-right</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-chevron-top"></i>
                    <div>chevron-top</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-circle-check"></i>
                    <div>circle-check</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-circle-x"></i>
                    <div>circle-x</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cloud"></i>
                    <div>cloud</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cloud-download"></i>
                    <div>cloud-download</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cloud-upload"></i>
                    <div>cloud-upload</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-code"></i>
                    <div>code</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cog"></i>
                    <div>cog</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-comment-square"></i>
                    <div>comment-square</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-credit-card"></i>
                    <div>credit-card</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-cursor"></i>
                    <div>cursor</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-dashboard"></i>
                    <div>dashboard</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-delete"></i>
                    <div>delete</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-dollar"></i>
                    <div>dollar</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-drop"></i>
                    <div>drop</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-envelope-closed"></i>
                    <div>envelope-closed</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-envelope-letter"></i>
                    <div>envelope-letter</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-envelope-open"></i>
                    <div>envelope-open</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-euro"></i>
                    <div>euro</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-file"></i>
                    <div>file</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-globe"></i>
                    <div>globe</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-graph"></i>
                    <div>graph</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-home"></i>
                    <div>home</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-inbox"></i>
                    <div>inbox</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-info"></i>
                    <div>info</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-italic"></i>
                    <div>italic</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-justify-center"></i>
                    <div>justify-center</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-justify-left"></i>
                    <div>justify-left</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-justify-right"></i>
                    <div>justify-right</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-laptop"></i>
                    <div>laptop</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-layers"></i>
                    <div>layers</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-lightbulb"></i>
                    <div>lightbulb</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-list"></i>
                    <div>list</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-location-pin"></i>
                    <div>location-pin</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-lock-locked"></i>
                    <div>lock-locked</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-lock-unlocked"></i>
                    <div>lock-unlocked</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-magnifying-glass"></i>
                    <div>magnifying-glass</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-map"></i>
                    <div>map</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-monitor"></i>
                    <div>monitor</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-moon"></i>
                    <div>moon</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-note"></i>
                    <div>note</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-options"></i>
                    <div>options</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-paperclip"></i>
                    <div>paperclip</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-pencil"></i>
                    <div>pencil</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-people"></i>
                    <div>people</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-phone"></i>
                    <div>phone</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-pie-chart"></i>
                    <div>pie-chart</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-print"></i>
                    <div>print</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-puzzle"></i>
                    <div>puzzle</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-rss"></i>
                    <div>rss</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-screen-desktop"></i>
                    <div>screen-desktop</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-screen-smartphone"></i>
                    <div>screen-smartphone</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-settings"></i>
                    <div>settings</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-share"></i>
                    <div>share</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-shield"></i>
                    <div>shield</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-sort-ascending"></i>
                    <div>sort-ascending</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-sort-descending"></i>
                    <div>sort-descending</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-speech"></i>
                    <div>speech</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-speedometer"></i>
                    <div>speedometer</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-star"></i>
                    <div>star</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-sun"></i>
                    <div>sun</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-tablet"></i>
                    <div>tablet</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-tags"></i>
                    <div>tags</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-task"></i>
                    <div>task</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-thumb-down"></i>
                    <div>thumb-down</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-thumb-up"></i>
                    <div>thumb-up</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-trash"></i>
                    <div>trash</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-underline"></i>
                    <div>underline</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-user"></i>
                    <div>user</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-user-female"></i>
                    <div>user-female</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-user-follow"></i>
                    <div>user-follow</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-user-unfollow"></i>
                    <div>user-unfollow</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-wrench"></i>
                    <div>wrench</div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2">
                    <i class="icons font-2xl d-block mt-5 cui-yen"></i>
                    <div>yen</div>
                  </div>
                </div>
                <!-- /.row-->
              </div>
            </div>
          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
          <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-accent">
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
              <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Meeting with
                  <strong>Lucas</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-info">
                <div class="avatar float-right">
                  <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                </div>
                <div>Skype with
                  <strong>Megan</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 5pm</small>
                <small class="text-muted">
                  <i class="icon-social-skype"></i>  On-line</small>
              </div>
              <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
              <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                <div>New UI Project -
                  <strong>deadline</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  10 - 11pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
              <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                <div>
                  <strong>#10 Startups.Garden</strong> Meetup</div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  1 - 3pm</small>
                <small class="text-muted">
                  <i class="icon-location-pin"></i>  Palo Alto, CA</small>
              </div>
              <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                <div>
                  <strong>Team meeting</strong>
                </div>
                <small class="text-muted mr-3">
                  <i class="icon-calendar"></i>  4 - 6pm</small>
                <small class="text-muted">
                  <i class="icon-home"></i>  creativeLabs HQ</small>
                <div class="avatars-stack mt-2">
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                  <div class="avatar avatar-xs">
                    <img class="img-avatar" src="img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
              <div class="py-3 pb-5 mr-3 float-left">
                <div class="avatar">
                  <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                  <span class="avatar-status badge-success"></span>
                </div>
              </div>
              <div>
                <small class="text-muted">Lukasz Holeczek</small>
                <small class="text-muted float-right mt-1">1:52 PM</small>
              </div>
              <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
            </div>
          </div>
          <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
              <div class="clearfix mt-4">
                <small>
                  <b>Option 1</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 2</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
              <div>
                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 3</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <div class="aside-options">
              <div class="clearfix mt-3">
                <small>
                  <b>Option 4</b>
                </small>
                <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                  <input class="switch-input" type="checkbox" checked="">
                  <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                </label>
              </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4">
              <small>
                <b>CPU Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>Memory Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 1 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2">
              <small>
                <b>SSD 2 Usage</b>
              </small>
            </div>
            <div class="progress progress-xs">
              <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-muted">25GB/256GB</small>
          </div>
        </div>
      </aside>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/pace-progress/pace.min.js"></script>
    <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
  </body>
</html>