<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Card - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset ('assets/css/main/app.css')}}" />
    <link rel="stylesheet" href="{{asset ('assets/css/main/app-dark.css')}}" />
    <link rel="stylesheet" href="{{asset ('assets/css/main/app.css')}}" />
    <link rel="shortcut icon" href="{{asset ('assets/images/logo/favicon.svg')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset ('assets/images/logo/favicon.png')}}" type="image/png" />
</head>

<body>
    <script src="{{asset ('assets/js/initTheme.js')}}"></script>
    <!-- sidebar -->
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/"><img src="{{asset ('assets/images/logo/logo.svg')}}" alt="Logo" srcset="" /></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer" />
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="index.html" class="sidebar-link">
                              <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active has-sub">
                            <a href="#" class="sidebar-link">
                              <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item">
                                    <a href="component-accordion.html">Accordion</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-alert.html">Alert</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-badge.html">Badge</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-button.html">Button</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="component-card.html">Card</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-carousel.html">Carousel</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-collapse.html">Collapse</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-dropdown.html">Dropdown</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-list-group.html">List Group</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-modal.html">Modal</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-navs.html">Navs</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-pagination.html">Pagination</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-progress.html">Progress</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-spinner.html">Spinner</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-toasts.html">Toasts</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="component-tooltip.html">Tooltip</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="extra-component-toastify.html">Toastify</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="extra-component-rating.html">Rating</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="extra-component-divider.html">Divider</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="layout-default.html">Default Layout</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="layout-vertical-1-column.html">1 Column</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="layout-rtl.html">RTL Layout</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="layout-horizontal.html">Horizontal Menu</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="form-element-input.html">Input</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-element-input-group.html">Input Group</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-element-select.html">Select</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-element-radio.html">Radio</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-element-checkbox.html">Checkbox</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-element-textarea.html">Textarea</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="form-layout.html" class="sidebar-link">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-journal-check"></i>
                                <span>Form Validation</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="form-validation-parsley.html">Parsley</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-pen-fill"></i>
                                <span>Form Editor</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="form-editor-quill.html">Quill</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-editor-ckeditor.html">CKEditor</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-editor-summernote.html">Summernote</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="form-editor-tinymce.html">TinyMCE</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="table.html" class="sidebar-link">
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Datatables</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="table-datatable.html">Datatable</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Extra UI</li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="ui-widgets-chatbox.html">Chatbox</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-widgets-pricing.html">Pricing</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-widgets-todolist.html">To-do List</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-egg-fill"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-icons-fontawesome.html">Fontawesome</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-icons-dripicons.html">Dripicons</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="ui-chart-chartjs.html">ChartJS</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-chart-apexcharts.html">Apexcharts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="ui-file-uploader.html" class="sidebar-link">
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="ui-map-google-map.html">Google Map</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item">
                            <a href="application-email.html" class="sidebar-link">
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="application-chat.html" class="sidebar-link">
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="application-gallery.html" class="sidebar-link">
                                <i class="bi bi-image-fill"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="application-checkout.html" class="sidebar-link">
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Errors</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="error-403.html">403</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="error-404.html">404</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="error-500.html">500</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Raise Support</li>

                        <li class="sidebar-item">
                            <a href="https://zuramai.github.io/mazer/docs" class="sidebar-link">
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class="sidebar-link">
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Card</h3>
                            <p class="text-subtitle text-muted">
                                Bootstrap’s cards provide a flexible and extensible content
                                container with multiple variants and options.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Card
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Basic card section start -->
                <section id="content-types">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Card With Header And Footer</h4>
                                        <p class="card-text">
                                            Gummies bonbon apple pie fruitcake icing biscuit apple
                                            pie jelly-o sweet roll. Toffee sugar plum sugar plum
                                            jelly-o jujubes bonbon dessert carrot cake.
                                        </p>
                                    </div>
                                    <img class="img-fluid w-100" src="{{asset ('assets/images/samples/banana.jpg')}}"
                                        alt="Card image cap" />
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span>Card Footer</span>
                                    <button class="btn btn-light-primary">Read More</button>
                                </div>
                            </div>
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h4 class="card-title pl-1">Accordion</h4>
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="cardAccordion">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion
                                                            body.</strong>
                                                        It is shown by default, until the collapse plugin
                                                        adds the appropriate classes that we use to style
                                                        each element. These classes control the overall
                                                        appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables.
                                                        It's also worth noting that just about any HTML
                                                        can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion
                                                            body.</strong>
                                                        It is hidden by default, until the collapse plugin
                                                        adds the appropriate classes that we use to style
                                                        each element. These classes control the overall
                                                        appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables.
                                                        It's also worth noting that just about any HTML
                                                        can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion
                                                            body.</strong>
                                                        It is hidden by default, until the collapse plugin
                                                        adds the appropriate classes that we use to style
                                                        each element. These classes control the overall
                                                        appearance, as well as the showing and hiding via
                                                        CSS transitions. You can modify any of this with
                                                        custom CSS or overriding our default variables.
                                                        It's also worth noting that just about any HTML
                                                        can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img src="{{asset ('assets/images/samples/motorcycle.jpg')}}"
                                        class="card-img-top img-fluid" alt="singleminded" />
                                    <div class="card-body">
                                        <h5 class="card-title">Be Single Minded</h5>
                                        <p class="card-text">
                                            Chocolate sesame snaps apple pie danish cupcake sweet
                                            roll jujubes tiramisu.Gummies bonbon apple pie fruitcake
                                            icing biscuit apple pie jelly-o sweet roll.
                                        </p>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0">Video Card</h4>
                                    </div>
                                    <div class="embed-responsive embed-responsive-item embed-responsive-16by9 w-100">
                                        <iframe src="https://www.youtube.com/embed/2b9txcAt4e0" style="width: 100%"
                                            height="300" allowfullscreen></iframe>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Candy cupcake sugar plum oat cake wafer marzipan
                                            jujubes. Jelly-o sesame snaps cheesecake topping.
                                            Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin.
                                        </p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Carousel</h4>
                                        <h6 class="card-subtitle">Support card subtitle</h6>
                                    </div>
                                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{asset ('assets/images/samples/architecture1.jpg')}}"
                                                    class="d-block w-100" alt="Image Architecture" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset ('assets/images/samples/bg-mountain.jpg')}}"
                                                    class="d-block w-100" alt="Image Mountain" />
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset ('assets/images/samples/jump.jpg')}}"
                                                    class="d-block w-100" alt="Image Jump" />
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Sunt assumenda mollitia officia dolorum eius
                                            quasi.Chocolate sesame snaps apple pie danish cupcake
                                            sweet roll jujubes tiramisu.
                                        </p>
                                        <p class="card-text">
                                            Gummies bonbon apple pie fruitcake icing biscuit apple
                                            pie jelly-o sweet roll. Toffee sugar plum sugar plum
                                            jelly-o jujubes bonbon dessert carrot cake. Sweet pie
                                            candy jelly. Sesame snaps biscuit sugar plum. Sweet roll
                                            topping fruitcake. Caramels liquorice biscuit ice cream
                                            fruitcake cotton candy tart.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Feedback Form</h4>
                                        <p class="card-text">
                                            Gummies bonbon apple pie fruitcake icing biscuit apple
                                            pie jelly-o sweet roll. Toffee sugar plum sugar plum
                                            jelly-o jujubes bonbon dessert carrot cake.
                                        </p>
                                        <form class="form" method="post">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="feedback1" class="sr-only">Name</label>
                                                    <input type="text" id="feedback1" class="form-control"
                                                        placeholder="Name" name="name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="feedback4" class="sr-only">Last Game</label>
                                                    <input type="text" id="feedback4" class="form-control"
                                                        placeholder="Last Name" name="LastName" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="feedback2" class="sr-only">Email</label>
                                                    <input type="email" id="feedback2" class="form-control"
                                                        placeholder="Email" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <select name="reason" class="form-control">
                                                        <option value="Inquiry">Inquiry</option>
                                                        <option value="Complain">Complaints</option>
                                                        <option value="Quotation">Quotation</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-label-group">
                                                    <textarea class="form-control" id="label-textarea" rows="3"
                                                        placeholder="Suggestion"></textarea>
                                                    <label for="label-textarea"></label>
                                                </div>
                                            </div>
                                            <div class="form-actions d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light-primary">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-bottom img-fluid"
                                        src="{{asset ('assets/images/samples/building.jpg')}}" alt="Card image cap"
                                        style="height: 20rem; object-fit: cover" />
                                    <div class="card-body">
                                        <h4 class="card-title">Social Media</h4>
                                        <p class="card-text">
                                            Candy Cupcake sugar plum oat cake wafer marzipan
                                            jujubes. Jelly-o sesame snaps cheesecake topping.
                                            Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin.
                                        </p>
                                        <a href="#" class="card-link"><small>Read 12 Comments</small></a>
                                    </div>
                                    <div class="btn-group align-items-center mx-2 px-1">
                                        <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                            <i
                                                class="bi bi-heart d-flex align-items-center justify-content-center text-secondary"></i>
                                        </button>
                                        <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                            <i
                                                class="bi bi-chat d-flex align-items-center justify-content-center text-secondary"></i>
                                        </button>
                                        <button type="button" class="btn btn-link p-2 m-1 text-decoration-none">
                                            <i
                                                class="bi bi-bookmark d-flex align-items-center justify-content-center text-secondary"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid"
                                        src="{{asset ('assets/images/samples/origami.jpg')}}" alt="Card image cap"
                                        style="height: 20rem" />
                                    <div class="card-body">
                                        <h4 class="card-title">Top Image Cap</h4>
                                        <p class="card-text">
                                            Jelly-o sesame snaps cheesecake topping. Cupcake
                                            fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin. Dessert bonbon caramels brownie
                                            chocolate bar chocolate tart dragée.
                                        </p>
                                        <p class="card-text">
                                            Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin.
                                        </p>
                                        <button class="btn btn-primary block">Update now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Bottom Image Cap</h4>
                                        <p class="card-text">
                                            Jelly-o sesame snaps cheesecake topping. Cupcake
                                            fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin. Dessert bonbon caramels brownie
                                            chocolate bar chocolate tart dragée.
                                        </p>
                                        <p class="card-text">
                                            Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar muffin.
                                        </p>
                                        <small class="text-muted">Last updated 3 mins ago.</small>
                                    </div>
                                    <img class="card-img-bottom img-fluid"
                                        src="{{asset ('assets/images/samples/water.jpg')}}" alt="Card image cap"
                                        style="height: 20rem; object-fit: cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Card types section end -->

                <!-- Groups section start -->
                <section id="groups">
                    <div class="row match-height">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="section-title text-uppercase">Groups</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card-group">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset ('assets/images/samples/1.png')}}" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural
                                                lead-in to additional content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset ('assets/images/samples/2.png')}}" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural
                                                lead-in to additional content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset ('assets/images/samples/3.png')}}" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural
                                                lead-in to additional content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid"
                                            src="{{asset ('assets/images/samples/4.pn')}}g" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural
                                                lead-in to additional content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>
                            Crafted with
                            <span class="text-danger"><i class="bi bi-heart"></i></span> by
                            <a href="https://saugi.me">Saugi</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset ('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset ('assets/js/app.js')}}"></script>
</body>

</html>
