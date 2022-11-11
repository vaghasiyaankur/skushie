<template>
<!--begin::Header-->
    <div id="tc_header" class="header header-fixed">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="tc_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="tc_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">

                            <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active p-0"
                            data-menu-toggle="click" aria-haspopup="true" @click="setBurgerMenu()">
                                <!--begin::Toggle-->
                                <div class="btn  btn-clean btn-dropdown mr-0 p-0" id="tc_aside_toggle">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary">

                                        <svg width="24px" height="24px" viewBox="0 0 16 16" class="bi bi-list"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </span>
                                </div>
                                <!--end::Toolbar-->
                            </li>
                            <li class="menu-item ml-2"><p class="mb-0 fontsize-16">Dashboard</p></li>

                    </ul>                    
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->           
            <div class="topbar">
                <div class="posicon d-lg-block d-none" v-if="$parent.permissions.includes('pos')">
                    <router-link to="/admin/pos" class="btn btn-primary white mr-2">POS</router-link>
                </div>
                <div class="nav_container">
                    <ul class="nav navbar-nav align-items-center ms-auto">
                        <li class="nav-item dropdown dropdown-language">
                            <a class="nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu dropdown-menu-end language__dropdown" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon ficon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></a></li>
                        <li class="nav-item nav-search">
                            <a class="nav-link nav-link-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search ficon">
                                    <circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </a>
                            <!-- <div class="search-input">
                                <div class="search-input-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                </div>
                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                                <div class="search-input-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                                <ul class="search-list search-list-main ps"><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                            </div> -->
                        </li>
                        <li class="nav-item dropdown dropdown-cart me-25">
                            
                            <a class="nav-link" href="#" data-toggle="dropdown"  aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart ficon"><circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex justify-content-between">
                                        <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                        <div class="badge rounded-pill badge-light-primary">4 Items</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list ps ps--active-y">
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded mr-3" src="/assets/images/avatars/dropdown1-1.png" alt="donuts" width="62">
                                        <div class="list-item-body flex-grow-1 d-flex align-items-center justify-content-center">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg> -->
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group bootstrap-touchspin">
                                                    <span class="input-group-btn bootstrap-touchspin-injected">
                                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                        </button>
                                                    </span>
                                                    <input class="touchspin-cart form-control" type="number" value="1">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                                <button class="btn btn-primary bootstrap-touchspin-up" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>
                                                            </button>
                                                        </span>
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$374.90</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded mr-3" src="/assets/images/avatars/dropdown1-1.png" alt="donuts" width="62">
                                        <div class="list-item-body flex-grow-1 d-flex align-items-center justify-content-center">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg> -->
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group bootstrap-touchspin">
                                                    <span class="input-group-btn bootstrap-touchspin-injected">
                                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                        </button>
                                                    </span>
                                                    <input class="touchspin-cart form-control" type="number" value="1">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                                <button class="btn btn-primary bootstrap-touchspin-up" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>
                                                            </button>
                                                        </span>
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$374.90</h5>
                                        </div>
                                    </div>
                                    <div class="list-item align-items-center">
                                        <img class="d-block rounded mr-3" src="/assets/images/avatars/dropdown1-1.png" alt="donuts" width="62">
                                        <div class="list-item-body flex-grow-1 d-flex align-items-center justify-content-center">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ficon cart-item-remove"><line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg> -->
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group bootstrap-touchspin">
                                                    <span class="input-group-btn bootstrap-touchspin-injected">
                                                        <button class="btn btn-primary bootstrap-touchspin-down" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                        </button>
                                                    </span>
                                                    <input class="touchspin-cart form-control" type="number" value="1">
                                                        <span class="input-group-btn bootstrap-touchspin-injected">
                                                                <button class="btn btn-primary bootstrap-touchspin-up" type="button">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line>
                                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                                    </svg>
                                                            </button>
                                                        </span>
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$374.90</h5>
                                        </div>
                                    </div>
                                   
                                      <!-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px; height: 350px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 314px;"></div></div> -->
                                </li>
                                <li class="dropdown-menu-footer">
                                    <div class="d-flex justify-content-between mb-1">
                                        <h6 class="fw-bolder mb-0">Total:</h6>
                                        <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                                    </div><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="app-ecommerce-checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-notification me-25">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell ficon"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge rounded-pill bg-danger badge-up">5</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex justify-content-between">
                                        <h4 class="notification-title mb-0 me-auto font-weight-bold">Notifications</h4>
                                        <div class="badge rounded-pill badge-light-primary">6 New</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list ps ps--active-y"><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar"><img src="/assets/images/avatars/13-small.png" alt="avatar" width="32" height="32"></div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar"><img src="/assets/images/avatars/13-small.png" alt="avatar" width="32" height="32"></div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content">MD</div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="list-item d-flex align-items-center justify-content-between">
                                        <h6 class="font-weight-bold mr-auto mb-0 fontsize-16">System Notifications</h6>
                                        <div class="form-check form-check-primary form-switch">
                                            <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                            <label class="form-check-label" for="systemNotification"></label>
                                        </div>
                                    </div><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x avatar-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-success">
                                                    <div class="avatar-content"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="#">
                                        <div class="list-item d-flex align-items-start">
                                            <div class="me-1">
                                                <div class="avatar bg-light-warning">
                                                    <div class="avatar-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle avatar-icon"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                                            <line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
                                                </div>
                                            </div>
                                            <div class="list-item-body flex-grow-1">
                                                <p class="media-heading"><span class="font-weight-bold">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                            </div>
                                        </div>
                                    </a>
                                <!-- <div class="ps__rail-x" style="left: 0px; bottom: -84px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 84px; right: 0px; height: 350px;"><div class="ps__thumb-y" tabindex="0" style="top: 68px; height: 282px;"></div></div> -->
                            </li>
                                <li class="dropdown-menu-footer"><a class="btn btn-primary w-100 waves-effect waves-float waves-light" href="#">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-user">
                            <a class="nav-link dropdown-user-link pl-3" id="dropdown-user" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name font-weight-bold fontsize-16">John Doe</span>
                                    <span class="user-status">Admin</span>
                                </div>
                                <span class="avatar">
                                    <img class="round" src="/assets/images/avatars/13-small.png" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile__dropdown" aria-labelledby="dropdown-user">
                                <router-link to="/admin/profile" class="dropdown-item">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </span>
                                    Edit Profile
                                </router-link>
        
                                <a href="#" class="dropdown-item" @click="logOut()">
                                    <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                            <line x1="12" y1="2" x2="12" y2="12"></line>
                                        </svg>
                                    </span>
                                    Logout
                                </a>
                                
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- <div class="posicon d-lg-block d-none">
                    <div class="dropdown" :class="{ 'show': showdropdown }">

                    <div class="topbar-item" data-toggle="dropdown" data-display="static" :aria-expanded="showdropdown" @click="showDropDown()">
                        <div class="btn btn-icon w-auto btn-clean d-flex align-items-center pr-1 pl-3">
                            <span class="text-dark-50 font-size-base d-none d-xl-inline mr-3">
                                {{ username }}</span>
                            <span class="symbol symbol-35 symbol-light-success" >
                                <span class="symbol-label font-size-h5 " >
                                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    </svg>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="dropdown-menu dropdown-menu-right" :class="{ 'show': showdropdown }" style="min-width: 150px;">

                        <router-link to="/admin/profile" class="dropdown-item">
                            <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                            Edit Profile
                        </router-link>

                        <a href="#" class="dropdown-item" @click="logOut()">
                            <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                                    <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                    <line x1="12" y1="2" x2="12" y2="12"></line>
                                </svg>
                            </span>
                            Logout
                        </a>
                    </div>

                </div>
                </div> -->

            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->
</template>



<script>
export default {
   data(){
       return {
           showdropdown:false,
           username:""
       }
       
   },
    methods: {
        logOut() {
            this.$parent.loading = true;
            let page_url = "/api/admin/logout";

            axios.post(page_url,{},this.token).then(res => {
                this.orders = res.data.data;
                setTimeout(() => { this.$router.push('/admin/login'); }, 1000);
            })
        },
        setBurgerMenu(){
            
            var classList = document.body.classList.value.split(' ');
            console.log(classList);
            if(classList.indexOf('aside-minimize') === -1)
                document.body.classList.add('aside-minimize')
            else
                document.body.classList.remove('aside-minimize')

            this.$emit('setBurgerMenu');
        },
        showDropDown(){
            this.showdropdown = !this.showdropdown
        }
    },
    mounted() {
     
        var token = localStorage.getItem('token');
        this.token = {
            headers: {
                Authorization: `Bearer ${token}`
            }
        };

        console.log(localStorage.getItem('name'));
        if(localStorage.getItem('name')){

            this.username = localStorage.getItem('name')
        }
    },
};
</script>
<style scoped>
@media (min-width: 992px){
    .navbar-nav {
        flex-direction: row;
    }
}
.dropup, .dropend, .dropdown, .dropstart {
    position: relative;
}
.topbar .nav_container ul.navbar-nav li > a.nav-link {
    color: #6e6b7b;
    padding: 0 0.5rem;
    position: relative;
}
.topbar .nav_container ul.navbar-nav li i.ficon, .topbar .nav_container ul.navbar-nav li svg.ficon {
    height: 2rem;
    width: 2rem;
    font-size: 1.5rem;
    color: #6e6b7b;
}
.topbar .nav_container .badge.badge-up {
    position: absolute;
    top: -11px;
    right: -9px;
    min-width: 1.429rem;
    min-height: 1.429rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.786rem;
    line-height: 0.786;
    padding-left: 0.25rem;
    padding-right: 0.25rem;
}
.badge.badge-light-primary {
    background-color: rgba(115, 103, 240, 0.12);
    color: #7367f0 !important;
}

.topbar .nav_container ul.navbar-nav li.dropdown-cart .badge.badge-up, .topbar .nav_container ul.navbar-nav li.dropdown-notification .badge.badge-up {
    right: -3px;
}
.me-25 {
    margin-right: 0.25rem !important;
}
.me-1 {
    margin-right: 1rem !important;
}
.topbar .nav_container ul.navbar-nav li a.dropdown-user-link {
    display: flex;
    align-items: center;
}
.topbar .nav_container ul.navbar-nav li a.dropdown-user-link .user-nav {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    float: left;
    margin-right: 0.8rem;
}
.topbar .nav_container .b-avatar{
    width: 40px;
    height: 40px;
}
.topbar .nav_container .b-avatar.badge-light-primary {
    background-color: rgba(115,103,240,.12);
}
.topbar .nav_container .b-avatar .b-avatar-custom, .topbar .nav_container .b-avatar .b-avatar-img, .b-avatar .b-avatar-text {
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-mask-image: radial-gradient(#fff,#000);
    mask-image: radial-gradient(#fff,#000);
}
.topbar .nav_container ul.navbar-nav li a.dropdown-user-link img {
    box-shadow: 0 4px 8px 0 rgb(34 41 47 / 12%), 0 2px 4px 0 rgb(34 41 47 / 8%);
}
.topbar .nav_container .avatar {
    white-space: nowrap;
    background-color: #c3c3c3;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    color: #fff;
    display: inline-flex;
    font-size: 1rem;
    text-align: center;
    vertical-align: middle;
    font-weight: 600;
}
.topbar .nav_container .avatar img {
    border-radius: 50%;
}
.topbar .nav_container .avatar .avatar-status-online {
    background-color: #28c76f;
}
.topbar .nav_container .avatar [class*='avatar-status-'] {
    border-radius: 50%;
    width: 11px;
    height: 11px;
    position: absolute;
    right: 0;
    bottom: 0;
    border: 1px solid #fff;
}
.topbar .nav_container .flag-icon {
    position: relative;
    display: inline-block;
    width: 1.33333333em;
    line-height: 1em;
}
.topbar .nav_container .flag-icon-us {
    background-image: url(/assets/images/avatars/us.svg);
}
.topbar .nav_container .flag-icon, .flag-icon-background {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: 50%;
}
.topbar .nav_container .flag-icon:before {
    content: "\00a0";
}
/*=========== Dropdown ========*/
.badge {
    display: inline-block;
    padding: 0.3rem 0.5rem;
    font-size: 15px;
    font-weight: 600;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.358rem;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .dropdown-menu.dropdown-menu-end, .topbar .nav_container ul.navbar-nav li.dropdown-notification .dropdown-menu.dropdown-menu-end {
    right: -2px;
    padding: 0;
    left: inherit;
}

.topbar .nav_container ul.navbar-nav li.dropdown-cart .dropdown-menu-header, .topbar .nav_container ul.navbar-nav li.dropdown-notification .dropdown-menu-header {
    border-top-left-radius: 0.357rem;
    border-top-right-radius: 0.357rem;
}
.topbar .nav_container .dropdown-menu-media .dropdown-menu-header {
    border-bottom: 1px solid #ebe9f1;
}
.topbar .nav_container .dropdown-menu-media {
    width: 32rem;
}
.topbar .dropdown .dropdown-menu{
    left: -178px !important;
    top: 18px !important;
}
.topbar .dropdown .dropdown-menu.language__dropdown{
    left: -23px !important;
}
.topbar .nav_container ul.navbar-nav li .media-list {
    max-height: 25rem;
    overflow-y: auto;
}
.topbar .nav_container ul.navbar-nav li .media-list::-webkit-scrollbar
{
	width: 6px;
	background-color: #F5F5F5;
}
.topbar .nav_container ul.navbar-nav li .media-list::-webkit-scrollbar-thumb
{
	background-color: #c1c1c1;
}
.topbar .nav_container .dropdown-menu-media .dropdown-menu-footer {
    border-top: 1px solid #ebe9f1;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .dropdown-menu-header .dropdown-header, .topbar .nav_container ul.navbar-nav li.dropdown-notification .dropdown-menu-header .dropdown-header{
    padding: 1.22rem 1.28rem;
}
.topbar .nav_container .dropdown-menu-media .media-list .list-item {
    display: flex;
    flex-grow: 1;
    padding: 0.9rem 1.28rem;
    border: none;
    border-bottom: 1px solid #ebe9f1;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .list-item img {
    background: #f8f8f8;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .media-heading {
    width: 8rem;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .media-heading h6.cart-item-title {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.topbar .nav_container ul.navbar-nav li div.input-group {
    padding: 0.7rem 1rem;
}
.bootstrap-touchspin.input-group {
    width: 9rem;
    align-items: center;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
/*.bootstrap-touchspin.input-group > .input-group-btn:first-child {
    left: 12px !important;
    position: inherit;
}*/
.bootstrap-touchspin .bootstrap-touchspin-injected {
    margin: 0 !important;
}
.bootstrap-touchspin.input-group .form-control {
    padding: 5px;
    height: auto;
    border: 0;
    background-color: #f8f8f8;
    border-radius: 0.357rem !important;
    text-align: center;
    font-weight: 500;
}
.input-group > .form-control, .input-group > .form-select {
    position: relative;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0;
}
.bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-down, .bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-up {
    padding: 0;
    min-width: 20px;
    min-height: 20px;
    border-radius: 0.357rem !important;
}
.input-group .btn {
    position: relative;
    z-index: 2;
}
.topbar .nav_container ul.navbar-nav li.dropdown-cart .dropdown-menu-footer, .topbar .nav_container ul.navbar-nav li.dropdown-notification .dropdown-menu-footer {
    padding: 1.28rem;
}
.avatar .avatar-content {
    width: 32px;
    height: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 0.857rem;
}
.avatar.bg-light-danger {
    color: #ea5455 !important;
    background: rgba(234, 84, 85, 0.12) !important;
}
.bg-light-success {
    background: rgba(40, 199, 111, 0.12) !important;
    color: #28c76f !important;
}
.bg-light-warning {
    background: rgba(255, 159, 67, 0.12) !important;
    color: #ff9f43 !important;
}
.topbar .dropdown .dropdown-menu.profile__dropdown{
    left: 0 !important;
    top: 9px !important;
}
</style>
