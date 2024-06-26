<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/libs/bootstrap4.min.css') }}" rel="stylesheet">
    {{-- <link href="{{asset('css/libs/fontawesome.min.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/libs/custom-dashboard.css') }}" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- quilljs stylesheets -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    @yield('styles')
    <style>
        #sidebarContainer {
            position: sticky;
            top: 0;
            height: 100%;
            width: 23%;
            overflow-y: auto;
            z-index: 1000;
        }

        .link-hrm {
            color: black !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebarContainer">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#0">
                    {{-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fab fa-github"></i>
                    </div> --}}
                    <div class="sidebar-brand-text mx-3">
                        {{-- CodeUp --}}
                        <img src="{{ asset('images/media/1705595435codeup-high-resolution-logo-transparent.png') }}"
                            width="100px" alt="codeup">
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>{{ clean(trans('niva-backend.dashboard'), ['Attr.EnableID' => true]) }}</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                @php $lang = App\Models\Language::find(1); @endphp

                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/admin" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="true" aria-controls="collapsePages">
                            <i class="far fa-fw fa-file"></i>
                            <span>{{ clean(trans('niva-backend.pages'), ['Attr.EnableID' => true]) }}</span>
                        </a>
                        <div id="collapsePages" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="{{ route('page.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.all_pages'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('page.create') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.create_page'), ['Attr.EnableID' => true]) }}</a>

                                <h6 class="collapse-header">
                                    {{ clean(trans('niva-backend.custom_pages'), ['Attr.EnableID' => true]) }}</h6>


                                <a class="collapse-item"
                                    href="{{ route('index-custom') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.custom_templates'), ['Attr.EnableID' => true]) }}</a>
                            </div>
                        </div>
                    </li>
                @endif

                @if (Auth::user()->role->name == 'administrator')
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/admin" data-toggle="collapse"
                            data-target="#collapseProjects" aria-expanded="true" aria-controls="collapseProjects">
                            <i class="fas fa-fw fa-pencil-ruler"></i>
                            <span>{{ clean(trans('niva-backend.projects'), ['Attr.EnableID' => true]) }}</span>
                        </a>
                        <div id="collapseProjects" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="{{ route('project.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.all_projects'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('project.create') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.create_project'), ['Attr.EnableID' => true]) }}</a>
                                <h6 class="collapse-header">
                                    {{ clean(trans('niva-backend.categories'), ['Attr.EnableID' => true]) }}</h6>
                                <a class="collapse-item"
                                    href="{{ route('project-category.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.all_categories'), ['Attr.EnableID' => true]) }}</a>
                            </div>
                        </div>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin" data-toggle="collapse" data-target="#collapsePosts"
                        aria-expanded="true" aria-controls="collapsePosts">
                        <i class="fas fa-fw fa-file-signature"></i>
                        <span>{{ clean(trans('niva-backend.posts'), ['Attr.EnableID' => true]) }}</span>
                    </a>
                    <div id="collapsePosts" class="collapse" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('post.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.all_posts'), ['Attr.EnableID' => true]) }}</a>
                            <a class="collapse-item"
                                href="{{ route('post.create') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.create_post'), ['Attr.EnableID' => true]) }}</a>
                            <h6 class="collapse-header">
                                {{ clean(trans('niva-backend.categories'), ['Attr.EnableID' => true]) }}</h6>
                            <a class="collapse-item"
                                href="{{ route('category.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.all_categories'), ['Attr.EnableID' => true]) }}</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/media" data-toggle="collapse" data-target="#collapseMedia"
                        aria-expanded="true" aria-controls="collapseMedia">
                        <i class="fas fa-fw fa-images"></i>
                        <span>{{ clean(trans('niva-backend.media'), ['Attr.EnableID' => true]) }}</span>
                    </a>
                    <div id="collapseMedia" class="collapse" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item"
                                href="{{ route('media.index') }}">{{ clean(trans('niva-backend.all_media'), ['Attr.EnableID' => true]) }}</a>
                            <a class="collapse-item"
                                href="{{ route('media.create') }}">{{ clean(trans('niva-backend.upload_image'), ['Attr.EnableID' => true]) }}</a>
                        </div>
                    </div>
                </li>

                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/admin" data-toggle="collapse"
                            data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ clean(trans('niva-backend.users'), ['Attr.EnableID' => true]) }}</span>
                        </a>
                        <div id="collapseUsers" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="{{ route('users.index') }}">{{ clean(trans('niva-backend.all_users'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('users.create') }}">{{ clean(trans('niva-backend.create_user'), ['Attr.EnableID' => true]) }}</a>
                            </div>
                        </div>
                    </li>
                @endif
                
                {{-- HRM  menu --}}
                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseHRM" aria-expanded="true" aria-controls="collapseHRM">
                            <i class="fas fa-fw fa-user"></i>
                            <span>HRM</span>
                        </a>
                        <div id="collapseHRM" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <!-- Employee Menu -->
                                <div class="nav-item">
                                    <a class="nav-link collapsed dark" href="#" data-toggle="collapse"
                                        data-target="#collapseEmployee" aria-expanded="true"
                                        aria-controls="collapseEmployee">
                                        <span
                                            class="link-hrm">{{ clean(trans('niva-backend.all_employee'), ['Attr.EnableID' => true]) }}</span>
                                    </a>
                                    <div id="collapseEmployee" class="collapse" data-parent="#collapseHRM">
                                        <div class="bg-white py-2 collapse-inner rounded dropdown-menu-right">
                                            <a class="collapse-item"
                                                href="{{ route('employees.index') }}">{{ clean(trans('niva-backend.all_employees'), ['Attr.EnableID' => true]) }}</a>
                                            <a class="collapse-item"
                                                href="{{ route('employees.create') }}">{{ clean(trans('niva-backend.create_employee'), ['Attr.EnableID' => true]) }}</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Employee File Menu -->
                                <div class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseEmployeeFiles" aria-expanded="true"
                                        aria-controls="collapseEmployeeFiles">
                                        <span
                                            class="link-hrm">{{ clean(trans('niva-backend.all_employee_files'), ['Attr.EnableID' => true]) }}</span>
                                    </a>
                                    <div id="collapseEmployeeFiles" class="collapse" data-parent="#collapseHRM">
                                        <div class="bg-white py-2 collapse-inner rounded dropdown-menu-right">
                                            <a class="collapse-item"
                                                href="{{ route('employee-files.index') }}">{{ clean(trans('niva-backend.all_employee_files'), ['Attr.EnableID' => true]) }}</a>
                                            <a class="collapse-item"
                                                href="{{ route('employee-files.create') }}">{{ clean(trans('niva-backend.create_employee_file'), ['Attr.EnableID' => true]) }}</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Vacation Requests Menu -->
                                <div class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseVacationRequests" aria-expanded="true"
                                        aria-controls="collapseVacationRequests">
                                        <span
                                            class="link-hrm">{{ clean(trans('niva-backend.vacation_requests'), ['Attr.EnableID' => true]) }}</span>
                                    </a>
                                    <div id="collapseVacationRequests" class="collapse" data-parent="#collapseHRM">
                                        <div class="bg-white py-2 collapse-inner rounded dropdown-menu-right">
                                            <a class="collapse-item"
                                                href="{{ route('leave-requests.index') }}">{{ clean(trans('niva-backend.all_vacation_requests'), ['Attr.EnableID' => true]) }}</a>
                                            <a class="collapse-item"
                                                href="{{ route('leave-requests.create') }}">{{ clean(trans('niva-backend.create_vacation_requests'), ['Attr.EnableID' => true]) }}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                @endif


                {{-- FM  menu --}}
                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseGF" aria-expanded="true" aria-controls="collapseGF">
                            <i class="fas fa-fw fa-user"></i>
                            <span>{{ clean(trans('niva-backend.finance_management'), ['Attr.EnableID' => true]) }}</span>
                        </a>
                        <div id="collapseGF" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <!-- incomes Menu -->
                                <div class="nav-item">
                                    <a class="nav-link collapsed dark" href="#" data-toggle="collapse"
                                        data-target="#collapseIncome" aria-expanded="true"
                                        aria-controls="collapseIncome">
                                        <span
                                            class="link-hrm">{{ clean(trans('niva-backend.incomes'), ['Attr.EnableID' => true]) }}</span>
                                    </a>
                                    <div id="collapseIncome" class="collapse" data-parent="#collapseGF">
                                        <div class="bg-white py-2 collapse-inner rounded dropdown-menu-right">
                                            <a class="collapse-item"
                                                href="{{ route('incomes.index') }}">{{ clean(trans('niva-backend.all_incomes'), ['Attr.EnableID' => true]) }}</a>
                                            <a class="collapse-item"
                                                href="{{ route('incomes.create') }}">{{ clean(trans('niva-backend.create_income'), ['Attr.EnableID' => true]) }}</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- expenses Menu -->
                                <div class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                        data-target="#collapseExpenses" aria-expanded="true"
                                        aria-controls="collapseExpenses">
                                        <span
                                            class="link-hrm">{{ clean(trans('niva-backend.expenses'), ['Attr.EnableID' => true]) }}</span>
                                    </a>
                                    <div id="collapseExpenses" class="collapse" data-parent="#collapseGF">
                                        <div class="bg-white py-2 collapse-inner rounded dropdown-menu-right">
                                            <a class="collapse-item"
                                                href="{{ route('expenses.index') }}">{{ clean(trans('niva-backend.all_expenses'), ['Attr.EnableID' => true]) }}</a>
                                            <a class="collapse-item"
                                                href="{{ route('expenses.create') }}">{{ clean(trans('niva-backend.create_expense'), ['Attr.EnableID' => true]) }}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                @endif


                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/admin" data-toggle="collapse"
                            data-target="#collapseElements" aria-expanded="true" aria-controls="collapseElements">
                            <i class="fas fa-fw fa-layer-group"></i>
                            <span>Elements</span>
                        </a>
                        <div id="collapseElements" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="{{ route('slider.index') }}?language=@php echo $lang->code; @endphp">Manage
                                    Slider </a>
                                <a class="collapse-item"
                                    href="{{ route('service.index') }}?language=@php echo $lang->code; @endphp">Manage
                                    Services</a>
                                <a class="collapse-item"
                                    href="{{ route('testimonial.index') }}?language=@php echo $lang->code; @endphp">Manage
                                    Testimonials</a>

                                <a class="collapse-item"
                                    href="{{ route('client.index') }}?language=@php echo $lang->code; @endphp">Manage
                                    Clients</a>
                                <a class="collapse-item"
                                    href="{{ route('pricing.index') }}?language=@php echo $lang->code; @endphp">Manage Pricing</a>
                                <a class="collapse-item"
                                    href="{{ route('faqs.index') }}?language=@php echo $lang->code; @endphp">Manage FAQ</a>
                            </div>
                        </div>
                    </li>
                @endif

                @if (Auth::user()->role->name == 'administrator')
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/admin" data-toggle="collapse"
                            data-target="#collapseSEO" aria-expanded="true" aria-controls="collapseSEO">
                            <i class="fas fa-fw fa-cogs"></i>
                            <span>{{ clean(trans('niva-backend.settings'), ['Attr.EnableID' => true]) }}</span>
                        </a>
                        <div id="collapseSEO" class="collapse" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <a class="collapse-item"
                                    href="{{ route('setting.edit') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.title_log_favicon'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('menu.index') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.main_menu'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('headerfooter-setting.edit') }}?language=@php echo $lang->code; @endphp">{{ clean(trans('niva-backend.header_and_footer'), ['Attr.EnableID' => true]) }}</a>
                                <a class="collapse-item"
                                    href="{{ route('language.index') }}">{{ clean(trans('niva-backend.all_languages'), ['Attr.EnableID' => true]) }}</a>
                            </div>
                        </div>
                    </li>
                @endif










                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
        </div>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">




                        <li> <a target="_blank" href="{{ route('home') }}"
                                class="view-website-link d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fab fa-chrome"></i>
                                {{ clean(trans('niva-backend.view_website'), ['Attr.EnableID' => true]) }}</a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @php $user = Auth::user(); @endphp
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ $user->photo ? '/images/media/' . $user->photo->file : '/public/img/200x200.png' }}"
                                    alt="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item"
                                    href="{{ url('/admin/users') }}/{{ auth()->user()->id }}/edit">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ clean(trans('niva-backend.edit_user'), ['Attr.EnableID' => true]) }}
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ clean(trans('niva-backend.logout'), ['Attr.EnableID' => true]) }}
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>

                @yield('content')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        @if (app()->getLocale() == 'en')
                            <span>Copyright © {{ date('Y') }}. All rights reserved By CodeUp</span>
                        @elseif(app()->getLocale() == 'fr')
                            <span>Droits d'auteur © {{ date('Y') }}. Tous droits réservés Par CodeUp</span>
                        @else
                            <span>حقوق النشر © {{ date('Y') }}. جميع الحقوق محفوظة. بواسطة CodeUp</span>
                        @endif
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ clean(trans('niva-backend.ready_leave'), ['Attr.EnableID' => true]) }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ clean(trans('niva-backend.logout_message'), ['Attr.EnableID' => true]) }}</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">{{ clean(trans('niva-backend.cancel'), ['Attr.EnableID' => true]) }}</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ clean(trans('niva-backend.logout'), ['Attr.EnableID' => true]) }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }} </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.addEventListener('scroll', function() {
            var sidebarContainer = document.getElementById('sidebarContainer');

            // Add or remove the 'sticky' class based on the scroll position
            if (window.scrollY > 100) {
                sidebarContainer.classList.add('sticky');
            } else {
                sidebarContainer.classList.remove('sticky');
            }
        });
    </script>

    <script src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/libs/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/libs/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('js/libs/custom-dashboard.js') }}"></script>
    {{-- script for chart  --}}
    @yield('chart-script')
    {{-- script for text editor --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#body-editor', {
            theme: 'snow'
        });

        document.querySelector('form').addEventListener('submit', function() {
            var hiddenBodyField = document.getElementById('hidden-body-field');
            hiddenBodyField.value = quill.root.innerHTML;
        });

        setTimeout(function() {
            var successElement = document.getElementById('success');
            if (successElement) {
                successElement.classList.add('hidden');
            }
        }, 2000);
    </script>


    @yield('footer')





</body>

</html>
