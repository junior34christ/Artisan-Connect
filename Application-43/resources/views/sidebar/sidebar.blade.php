{{-- Contenu du sidebar pour les Couturier --}}
<!-- Suite sidebar -->
<div>
    <li>
        <a href="{{ route('ventes.pos') }}" class="{{ request()->routeIs('ventes.pos') ? 'active' : '' }}">
            POS
        </a>
    </li>
    <li class="submenu {{ request()->routeIs('purchase.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/purchase1.svg') }}" alt="img">
            <span>Purchase</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('purchase.list') }}">Purchase List</a></li>
            <li><a href="{{ route('purchase.add') }}">Add Purchase</a></li>
            <li><a href="{{ route('purchase.import') }}">Import Purchase</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('expense.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/expense1.svg') }}" alt="img">
            <span>Expense</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('expense.list') }}">Expense List</a></li>
            <li><a href="{{ route('expense.create') }}">Add Expense</a></li>
            <li><a href="{{ route('expense.category') }}">Expense Category</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('quotation.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/quotation1.svg') }}" alt="img">
            <span>Quotation</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('quotation.list') }}">Quotation List</a></li>
            <li><a href="{{ route('quotation.create') }}">Add Quotation</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('transfer.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/transfer1.svg') }}" alt="img">
            <span>Transfer</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('transfer.list') }}">Transfer List</a></li>
            <li><a href="{{ route('transfer.create') }}">Add Transfer</a></li>
            <li><a href="{{ route('transfer.import') }}">Import Transfer</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('return.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/return1.svg') }}" alt="img">
            <span>Return</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('return.sales.list') }}">Sales Return List</a></li>
            <li><a href="{{ route('return.sales.create') }}">Add Sales Return</a></li>
            <li><a href="{{ route('return.purchase.list') }}">Purchase Return List</a></li>
            <li><a href="{{ route('return.purchase.create') }}">Add Purchase Return</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('people.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img">
            <span>People</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('people.customer.list') }}">Customer List</a></li>
            <li><a href="{{ route('people.customer.create') }}">Add Customer</a></li>
            <li><a href="{{ route('people.supplier.list') }}">Supplier List</a></li>
            <li><a href="{{ route('people.supplier.create') }}">Add Supplier</a></li>
            <li><a href="{{ route('people.user.list') }}">User List</a></li>
            <li><a href="{{ route('people.user.create') }}">Add User</a></li>
            <li><a href="{{ route('people.store.list') }}">Store List</a></li>
            <li><a href="{{ route('people.store.create') }}">Add Store</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('places.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/places.svg') }}" alt="img">
            <span>Places</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('places.country.create') }}">New Country</a></li>
            <li><a href="{{ route('places.country.list') }}">Countries List</a></li>
            <li><a href="{{ route('places.state.create') }}">New State</a></li>
            <li><a href="{{ route('places.state.list') }}">State List</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route('components') }}">
            <i data-feather="layers"></i>
            <span>Components</span>
        </a>
    </li>
    <li>
        <a href="{{ route('blank.page') }}">
            <i data-feather="file"></i>
            <span>Blank Page</span>
        </a>
    </li>
    <li class="submenu {{ request()->routeIs('error.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="alert-octagon"></i>
            <span>Error Pages</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('error.404') }}">404 Error</a></li>
            <li><a href="{{ route('error.500') }}">500 Error</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('elements.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="box"></i>
            <span>Elements</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('elements.sweetalerts') }}">Sweet Alerts</a></li>
            <li><a href="{{ route('elements.tooltip') }}">Tooltip</a></li>
            <li><a href="{{ route('elements.popover') }}">Popover</a></li>
            <li><a href="{{ route('elements.ribbon') }}">Ribbon</a></li>
            <li><a href="{{ route('elements.clipboard') }}">Clipboard</a></li>
            <li><a href="{{ route('elements.dragdrop') }}">Drag & Drop</a></li>
            <li><a href="{{ route('elements.rangeslider') }}">Range Slider</a></li>
            <li><a href="{{ route('elements.rating') }}">Rating</a></li>
            <li><a href="{{ route('elements.toastr') }}">Toastr</a></li>
            <li><a href="{{ route('elements.texteditor') }}">Text Editor</a></li>
            <li><a href="{{ route('elements.counter') }}">Counter</a></li>
            <li><a href="{{ route('elements.scrollbar') }}">Scrollbar</a></li>
            <li><a href="{{ route('elements.spinner') }}">Spinner</a></li>
            <li><a href="{{ route('elements.notification') }}">Notification</a></li>
            <li><a href="{{ route('elements.lightbox') }}">Lightbox</a></li>
            <li><a href="{{ route('elements.stickynote') }}">Sticky Note</a></li>
            <li><a href="{{ route('elements.timeline') }}">Timeline</a></li>
            <li><a href="{{ route('elements.formwizard') }}">Form Wizard</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('charts.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="bar-chart-2"></i>
            <span>Charts</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('charts.apex') }}">Apex Charts</a></li>
            <li><a href="{{ route('charts.js') }}">Chart Js</a></li>
            <li><a href="{{ route('charts.morris') }}">Morris Charts</a></li>
            <li><a href="{{ route('charts.flot') }}">Flot Charts</a></li>
            <li><a href="{{ route('charts.peity') }}">Peity Charts</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('icons.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="award"></i>
            <span>Icons</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('icons.fontawesome') }}">Fontawesome Icons</a></li>
            <li><a href="{{ route('icons.feather') }}">Feather Icons</a></li>
            <li><a href="{{ route('icons.ionic') }}">Ionic Icons</a></li>
            <li><a href="{{ route('icons.material') }}">Material Icons</a></li>
            <li><a href="{{ route('icons.pe7') }}">Pe7 Icons</a></li>
            <li><a href="{{ route('icons.simpleline') }}">Simpleline Icons</a></li>
            <li><a href="{{ route('icons.themify') }}">Themify Icons</a></li>
            <li><a href="{{ route('icons.weather') }}">Weather Icons</a></li>
            <li><a href="{{ route('icons.typicon') }}">Typicon Icons</a></li>
            <li><a href="{{ route('icons.flag') }}">Flag Icons</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('forms.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="columns"></i>
            <span>Forms</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('forms.basicinputs') }}">Basic Inputs</a></li>
            <li><a href="{{ route('forms.inputgroups') }}">Input Groups</a></li>
            <li><a href="{{ route('forms.horizontal') }}">Horizontal Form</a></li>
            <li><a href="{{ route('forms.vertical') }}">Vertical Form</a></li>
            <li><a href="{{ route('forms.mask') }}">Form Mask</a></li>
            <li><a href="{{ route('forms.validation') }}">Form Validation</a></li>
            <li><a href="{{ route('forms.select2') }}">Form Select2</a></li>
            <li><a href="{{ route('forms.fileupload') }}">File Upload</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('table.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <i data-feather="layout"></i>
            <span>Table</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('table.basic') }}">Basic Tables</a></li>
            <li><a href="{{ route('table.data') }}">Data Table</a></li>
        </ul>
    </li>

    <li class="submenu {{ request()->routeIs('report.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/time.svg') }}" alt="img">
            <span>Report</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('report.purchaseorder') }}">Purchase Order Report</a></li>
            <li><a href="{{ route('report.inventory') }}">Inventory Report</a></li>
            <li><a href="{{ route('report.sales') }}">Sales Report</a></li>
            <li><a href="{{ route('report.invoice') }}">Invoice Report</a></li>
            <li><a href="{{ route('report.purchase') }}">Purchase Report</a></li>
            <li><a href="{{ route('report.supplier') }}">Supplier Report</a></li>
            <li><a href="{{ route('report.customer') }}">Customer Report</a></li>
        </ul>
    </li>
    <li class="submenu {{ request()->routeIs('users.*') ? 'active' : '' }}">
        <a href="javascript:void(0);">
            <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img">
            <span>Users</span>
            <span class="menu-arrow"></span>
        </a>
        <ul>
            <li><a href="{{ route('users.new') }}">New User</a></li>
            <li><a href="{{ route('users.list') }}">Users List</a></li>
        </ul>
    </li>
</div>

{{-- Contenu du sidebar pour les Students --}}
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{ set_active(['setting/page']) }}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu {{ set_active(['home', 'teacher/dashboard', 'couturier/dashboard']) }}">
                    <a>
                        <i class="fas fa-tachometer-alt"></i>
                        <span> Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('dashboard.couturier_dashboard') }}"
                                class="{{ set_active(['dashboard.couturier_dashboard']) }}">Couturier Dashboard</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="submenu {{ set_active(['category.createcategory', 'category.indexcategory', 'category.gridcategory', 'products.gridProducts', 'products.indexProducts', 'products.createProducts']) }} {{ request()->is('product/edit/*') ? 'active' : '' }} {{ request()->is('product/profile/*') ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-box"></i>
                        <span> Produit & Category</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('products.createProducts') }}"
                                class="{{ set_active(['products.createProducts']) }}">Product Add</a></li>
                        <li><a href="{{ route('category.indexcategory') }}"
                                class="{{ set_active(['category.indexcategory', 'category.grid']) }}">Category
                                List</a>
                        </li>
                        <li><a href="{{ route('category.createcategory') }}"
                                class="{{ set_active(['category.createcategory']) }}">Add Category</a></li>
                    </ul>
                    </oute>

                <li
                    class="submenu {{ set_active(['department/add/page', 'department/edit/page']) }} {{ request()->is('department/edit/*') ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span> Departments</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('department/list/page') }}"
                                class="{{ set_active(['department/list/page']) }} {{ request()->is('department/edit/*') ? 'active' : '' }}">Department
                                List</a></li>
                        <li><a href="{{ route('department/add/page') }}"
                                class="{{ set_active(['department/add/page']) }}">Department Add</a></li>
                        <li><a>Department Edit</a></li>
                    </ul>
                </li>



                <li class="menu-title">
                    <span>Management</span>
                </li>

                <li class="submenu {{ set_active(['account/fees/collections/page', 'add/fees/collection/page']) }}">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span> Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a class="{{ set_active(['account/fees/collections/page']) }}"
                                href="{{ route('account/fees/collections/page') }}">Fees Collection</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="salary.html">Salary</a></li>
                        <li><a class="{{ set_active(['add/fees/collection/page']) }}"
                                href="{{ route('add/fees/collection/page') }}">Add Fees</a></li>
                        <li><a href="add-expenses.html">Add Expenses</a></li>
                        <li><a href="add-salary.html">Add Salary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                </li>
                <li>
                    <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                </li>
                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                </li>
                <li>
                    <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
