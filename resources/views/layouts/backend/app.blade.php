<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Cpanel &amp;  </title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('backend/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('backend/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('backend/css/oneui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/js/plugins/simplemde/simplemde.min.css') }}">

    <!-- OneUI framework -->
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href=""> -->
    <!-- END Stylesheets -->

    @yield('css')
  </head>

  <body>
    
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header border-bottom">
          <!-- User Avatar -->
          <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="{{ asset('backend/media/avatars/avatar10.jpg') }}" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
          </div>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Side Overlay Tabs -->
          <div class="block block-transparent pull-x pull-t">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab" data-bs-target="#so-overview" role="tab" aria-controls="so-overview" aria-selected="true">
                  <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab" data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
                  <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                </button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Overview Tab -->
              <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel" aria-labelledby="so-overview-tab">
                <!-- Activity -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Activity List -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale ($15)</div>
                            <div>Admin Template</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-pencil-alt text-info"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">You edited the file</div>
                            <div>Documentation.doc</div>
                            <small class="text-muted">15 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-trash text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Project deleted</div>
                            <div>Line Icon Set</div>
                            <small class="text-muted">4 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Activity List -->
                  </div>
                </div>
                <!-- END Activity -->

                <!-- Online Friends -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Online Friends</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Users Navigation -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="{{ asset('backend/media/avatars/avatar2.jpg') }}" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Helen Jacobs</div>
                            <div class="text-muted">Copywriter</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="{{ asset('backend/media/avatars/avatar10.jpg') }}" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Carl Wells</div>
                            <div class="text-muted">Web Developer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="{{ asset('backend/media/avatars/avatar3.jpg') }}" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Amber Harvey</div>
                            <div class="text-muted">Web Designer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="{{ asset('backend/media/avatars/avatar7.jpg') }}" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Amber Harvey</div>
                            <div class="text-muted">Photographer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="{{ asset('backend/media/avatars/avatar12.jpg') }}" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Carl Wells</div>
                            <div class="text-muted">Graphic Designer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Users Navigation -->
                  </div>
                </div>
                <!-- END Online Friends -->

                <!-- Quick Settings -->
                <div class="block block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Quick Settings</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Quick Settings Form -->
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Online Status
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check1" name="so-settings-check1" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check1">Show your status to all</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Auto Updates
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check2" name="so-settings-check2" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check2">Keep up to date</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          Application Alerts
                        </p>
                        <div class="space-y-2">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check3" name="so-settings-check3" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check3">Email Notifications</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check4" name="so-settings-check4" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check4">SMS Notifications</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          API
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check5" name="so-settings-check5" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check5">Enable access</label>
                        </div>
                      </div>
                    </form>
                    <!-- END Quick Settings Form -->
                  </div>
                </div>
                <!-- END Quick Settings -->
              </div>
              <!-- END Overview Tab -->

              <!-- Sales Tab -->
              <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel" aria-labelledby="so-sales-tab">
                <div class="block block-transparent mb-0">
                  <!-- Stats -->
                  <div class="block-content">
                    <div class="row items-push pull-t">
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                        <a class="fs-lg" href="javascript:void(0)">22.030</a>
                      </div>
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                        <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Stats -->

                  <!-- Today -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Today</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="ext-muted">$996</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">50 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">2 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">3 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Today -->

                  <!-- Yesterday -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="text-muted">$765</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">26 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Product Purchase - $50</div>
                            <small class="text-muted">28 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">29 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Paypal Withdrawal - $300</div>
                            <small class="text-muted">37 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">39 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">45 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">46 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>

                    <!-- More -->
                    <div class="text-center">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                      </a>
                    </div>
                    <!-- END More -->
                  </div>
                  <!-- END Yesterday -->
                </div>
              </div>
              <!-- END Sales Tab -->
            </div>
          </div>
          <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->


      <!-- Sidebar -->
      <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Admin<span class="fw-normal">Panel</span></span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-circle"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                <!-- Color Themes -->
                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                  <span>Default</span>
                  <i class="fa fa-circle text-default"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('backend/css/themes/amethyst.min.css') }}" href="#">
                  <span>Amethyst</span>
                  <i class="fa fa-circle text-amethyst"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('backend/css/themes/city.min.css') }}" href="#">
                  <span>City</span>
                  <i class="fa fa-circle text-city"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('backend/css/themes/flat.min.css') }}" href="#">
                  <span>Flat</span>
                  <i class="fa fa-circle text-flat"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('backend/css/themes/modern.min.css') }}" href="#">
                  <span>Modern</span>
                  <i class="fa fa-circle text-modern"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="{{ asset('backend/css/themes/smooth.min.css') }}" href="#">
                  <span>Smooth</span>
                  <i class="fa fa-circle text-smooth"></i>
                </a>
                <!-- END Color Themes -->

                <div class="dropdown-divider"></div>

                <!-- Sidebar Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                  <span>Sidebar Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                  <span>Sidebar Dark</span>
                </a>
                <!-- END Sidebar Styles -->

                <div class="dropdown-divider"></div>

                <!-- Header Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                  <span>Header Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                  <span>Header Dark</span>
                </a>
                <!-- END Header Styles -->
              </div>
            </div>
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
@include('layouts.backend.menu')
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- END Search Form -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="{{ asset('backend/media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">John</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('backend/media/avatars/avatar10.jpg') }}" alt="">
                  <p class="mt-2 mb-0 fw-medium">{{ Auth::user()->name }}</p>
                </div>
                <div class="p-2">
                  {{-- <a href="{{ route('admin.profile', Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a> --}}

                  <a class="dropdown-item d-flex align-items-center justify-content-between" 
                  href="{{  route('admin.profile') }}">
                    <span class="fs-sm fw-medium">Profile</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a href="#" class="dropdown-item d-flex align-items-center justify-content-between"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Sign out
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
 {{--                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a> --}}
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
       @yield('content')
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
     
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https:/1.envato.market/AVD6j" target="_blank">Cpanel</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/pages/be_pages_dashboard.min.js') }}"></script>
    <script src="{{ asset('backend/js/oneui.app.min.js')}}"></script>
 
    <!-- Page JS Plugins -->
    <script src="{{ asset('backend/js/plugins/chart.js/chart.min.js') }}"></script>

    <!-- Page JS Code -->

    <!-- Page JS Plugins -->
    <script src="{{ asset('backend/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/simplemde/simplemde.min.js')}}"></script>

    <!-- Page JS Helpers (CKEditor + SimpleMDE plugins) -->
    {{-- <script>One.helpersOnLoad(['js-ckeditor', 'js-simplemde']);</script> --}}

    @yield('scripts')
  </body>
</html>
