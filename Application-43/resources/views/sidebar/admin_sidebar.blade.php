<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                @if (auth()->check() && auth()->user()->hasRole('Artisan'))
                    <li class="{{ request()->routeIs('dashboard.artisan_dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.artisan_dashboard') }}"
                            class="{{ request()->routeIs('dashboard.artisan_dashboard') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/dashboard.svg') }}" alt="img">
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                    <li class="submenu ">
                        <a href="javascript:void(0);"
                            class="{{ request()->routeIs('products.indexproduct') || request()->routeIs('products.createproduct') || request()->routeIs('category.indexcategory') || request()->routeIs('category.createcategory') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/product.svg') }}" alt="img">
                            <span>Articles</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('products.indexproduct') }}"
                                    class="{{ request()->routeIs('products.indexproduct') ? 'active' : '' }}">
                                    Liste des Articles</a>
                            </li>
                            <li>
                                <a href="{{ route('products.createproduct') }}"
                                    class="{{ request()->routeIs('products.createproduct') ? 'active' : '' }}">
                                    Ajouter un Article</a>
                            </li>
                            <li>
                                <a href="{{ route('category.indexcategory') }}"
                                    class="{{ request()->routeIs('category.indexcategory') ? 'active' : '' }}">
                                    Liste des Categories d'article</a>
                            </li>
                            <li>
                                <a href="{{ route('category.createcategory') }}"
                                    class="{{ request()->routeIs('category.createcategory') ? 'active' : '' }}">
                                    Ajouter une Categorie d'article</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu ">
                        <a href="javascript:void(0);"
                            class="{{ request()->routeIs('ventes.index') || request()->routeIs('ventes.pos') || request()->routeIs('ventes.new') || request()->routeIs('ventes.indexreturn') || request()->routeIs('ventes.createreturn') ? 'active' : '' }}">
                            <img src="{{ asset('assets/img/icons/sales1.svg') }}" alt="img">
                            <span>Ventes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('ventes.index') }}"
                                    class="{{ request()->routeIs('ventes.index') ? 'active' : '' }}">
                                    Liste des ventes
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ventes.addsales') }}"
                                    class="{{ request()->routeIs('ventes.addsales') ? 'active' : '' }}">
                                    Nouvelle vente
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ventes.indexreturn') }}"
                                    class="{{ request()->routeIs('ventes.indexreturn') ? 'active' : '' }}">
                                    Liste de retour de vente
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ventes.createreturn') }}"
                                    class="{{ request()->routeIs('ventes.createreturn') ? 'active' : '' }}">
                                    Nouveau retour de vente
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ request()->routeIs('places.*') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/places.svg') }}" alt="img">
                            <span>Pays & Villes</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ route('countries.indexcountry') }}"
                                    class="{{ request()->routeIs('countries.indexcountry') ? 'active' : '' }}">Liste
                                    des pays</a>
                            </li>
                            <li><a href="{{ route('countries.createcountry') }}"
                                    class="{{ request()->routeIs('countries.createcountry') ? 'active' : '' }}">Nouveau
                                    pays</a>
                            </li>
                            <li><a href="{{ route('states.indexstate') }}"
                                    class="{{ request()->routeIs('states.indexstate') ? 'active' : '' }}">Liste des
                                    Villes</a>
                            </li>
                            <li><a href="{{ route('states.createstate') }}"
                                    class="{{ request()->routeIs('states.createstate') ? 'active' : '' }}">Nouvel
                                    Ville</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ request()->routeIs('customers.*') ? 'active' : '' }}">
                            <img src="{{ asset('assets/img/icons/users1.svg') }}" alt="img">
                            <span>Gens</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="{{ route('customers.indexcustomer') }}"
                                    class="{{ request()->routeIs('customers.indexcustomer') ? 'active' : '' }}">
                                    Liste des clients
                                </a></li>
                            <li><a href="{{ route('customers.createcustomer') }}"
                                    class="{{ request()->routeIs('customers.createcustomer') ? 'active' : '' }}">
                                    Ajouter un client
                                </a></li>
                            <li><a href="{{ route('suppliers.indexsupplier') }}"
                                    class="{{ request()->routeIs('suppliers.indexsupplier') ? 'active' : '' }}">
                                    Liste des fournisseurs
                                </a></li>
                            <li><a href="{{ route('suppliers.createsupplier') }}"
                                    class="{{ request()->routeIs('suppliers.createsupplier') ? 'active' : '' }}">
                                    Ajouter un fournisseur
                                </a></li>
                            <li><a href="{{ route('users.indexuser') }}"
                                    class="{{ request()->routeIs('users.indexuser') ? 'active' : '' }}">
                                    Liste des utilisateurs
                                </a></li>
                            <li><a href="{{ route('users.createuser') }}"
                                    class="{{ request()->routeIs('users.createuser') ? 'active' : '' }}">
                                    Ajouter un utilisateur
                                </a></li>
                            <li><a href="{{ route('stores.indexstore') }}"
                                    class="{{ request()->routeIs('stores.indexstore') ? 'active' : '' }}">
                                    Liste des magasins
                                </a></li>
                            <li><a href="{{ route('stores.createstore') }}"
                                    class="{{ request()->routeIs('stores.createstore') ? 'active' : '' }}">
                                    Ajouter une boutique
                                </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);" class="{{ request()->routeIs('settings.*') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/settings.svg') }}" alt="img">
                            <span>Paramètres</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('settings.emailsettings') }}"
                                    class="{{ request()->routeIs('settings.emailsettings') ? 'active' : '' }}">
                                    Paramètres de messagerie</a>
                            </li>
                            <li>
                                <a href="{{ route('settings.paymentsettings') }}"
                                    class="{{ request()->routeIs('settings.paymentsettings') ? 'active' : '' }}">
                                    Paramètres de paiement</a>
                            </li>
                            <li>
                                <a href="{{ route('settings.currencysettings') }}"
                                    class="{{ request()->routeIs('settings.currencysettings') ? 'active' : '' }}">Currency
                                    Paramètres de dévise</a>
                            </li>
                            <li>
                                <a href="{{ route('settings.grouppermissions') }}"
                                    class="{{ request()->routeIs('settings.grouppermissions') ? 'active' : '' }}">
                                    Autorisations de groupe</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Add other Courturier-specific menu items here -->
                @elseif (auth()->check() && auth()->user()->hasRole('Restaurant'))
                    <li class="{{ request()->routeIs('dashboard.home') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.home') }}"
                            class="{{ request()->routeIs('dashboard.home') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/dashboard.svg') }}" alt="img">
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                    <!-- Add other Courturier-specific menu items here -->
                @elseif (auth()->check() && auth()->user()->hasRole('Client'))
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/dashboard.svg') }}" alt="img">
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                     <li class="submenu">
                        <a href="javascript:void(0);" class="{{ request()->routeIs('settings.*') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/settings.svg') }}" alt="img">
                            <span>Paramètres</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('settings.emailsettings') }}"
                                    class="{{ request()->routeIs('settings.emailsettings') ? 'active' : '' }}">
                                    Paramètres de messagerie</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Add other Clients-specific menu items here -->
                @elseif (auth()->check() && auth()->user()->hasRole('Admin'))
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <img src="{{ URL::to('assets/img/icons/dashboard.svg') }}" alt="img">
                            <span>Tableau de bord</span>
                        </a>
                    </li>
                    <!-- Add other Clients-specific menu items here -->
                @endif
                <li class="submenu">
                    <a href="javascript:void(0);" class="{{ request()->routeIs('application.*') ? 'active' : '' }}">
                        <img src="{{ URL::to('assets/img/icons/mobile-button.svg') }}" alt="img">
                        <span>Applications</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('/messagerie') }}"
                                class="{{ request()->routeIs('application.chat') ? 'active' : '' }}">Barvader</a>
                        </li>
                        <li>
                            <a href="{{ route('application.calendar') }}"
                                class="{{ request()->routeIs('application.calendar') ? 'active' : '' }}">Calendrié</a>
                        </li>
                        <li>
                            <a href="{{ route('application.email') }}"
                                class="{{ request()->routeIs('application.email') ? 'active' : '' }}">Mail réçu</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    /* Disable underline on hover */
    .sidebar a {
        text-decoration: none;
    }

    .sidebar a:hover {
        text-decoration: none;
    }

    .sidebar .active>a,
    .sidebar a.active {
        font-weight: bold;
        /* Example of active state styling */
    }

    .submenu.open>ul {
        display: block !important;
        /* Ensure submenu stays open */
    }
</style>
