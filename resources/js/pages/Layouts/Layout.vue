
<script setup>
import { route } from '../../../../vendor/tightenco/ziggy/src/js';

// import { Link,Head } from '@inertiajs/vue3';
</script>


<template>
   <!-- <Head>
       <title>My App</title>
   </Head> -->
   <div class="main-wrapper">
   <div class="header">
      <div class="header-left">
         <a href="index.html" class="logo">
         <img :src="'/assets/img/logo.png'" alt="Logo">
         </a>
         <a href="index.html" class="logo logo-small">
         <img :src="'/assets/img/logo-small.png'" alt="Logo" width="30" height="30">
         </a>
         <a href="javascript:void(0);" id="toggle_btn">
         <span class="bar-icon">
         <span></span>
         <span></span>
         <span></span>
         </span>
         </a>
      </div>
      <div class="top-nav-search">
         <form>
            <input type="text" class="form-control" placeholder="">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
         </form>
      </div>
      <a class="mobile_btn" id="mobile_btn">
      <i class="fas fa-bars"></i>
      </a>
      <ul class="nav user-menu">
         <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link pr-0" data-toggle="dropdown">
            <i data-feather="bell"></i> <span class="badge badge-pill"></span>
            </a>
            <div class="dropdown-menu notifications">
               <div class="topnav-dropdown-header">
                  <span class="notification-title">Notifications</span>
                  <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
               </div>
               <div class="noti-content">
                  <ul class="notification-list">
                     <li class="notification-message">
                        <Link  href="activities.html">
                           <div class="media">
                              <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="" :src="'/assets/img/profiles/avatar-02.jpg'">
                              </span>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
                                 <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                              </div>
                           </div>
                        </Link>
                     </li>
                     <li class="notification-message">
                        <a href="activities.html">
                           <div class="media">
                              <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="" :src="'/assets/img/profiles/avatar-03.jpg'">
                              </span>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
                                 <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="notification-message">
                        <a href="activities.html">
                           <div class="media">
                              <div class="avatar avatar-sm">
                                 <span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
                              </div>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title">New user registered</span></p>
                                 <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="notification-message">
                        <a href="activities.html">
                           <div class="media">
                              <span class="avatar avatar-sm">
                              <img class="avatar-img rounded-circle" alt="" :src="'/assets/img/profiles/avatar-04.jpg'">
                              </span>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
                                 <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="notification-message">
                        <a href="activities.html">
                           <div class="media">
                              <div class="avatar avatar-sm">
                                 <span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
                              </div>
                              <div class="media-body">
                                 <p class="noti-details"><span class="noti-title">You have received a new message</span></p>
                                 <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="topnav-dropdown-footer">
                  <a href="activities.html">View all Notifications</a>
               </div>
            </div>
         </li>
         <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img">
            <img :src="'/assets/img/profiles/avatar-14.jpg'" alt="">
            <span class="status online"></span>
            </span>
            <span>Jassa</span>
            </a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="profile.html"><i data-feather="user" class="mr-1"></i> Profile</a>
               <a class="dropdown-item" href="settings.html"><i data-feather="settings" class="mr-1"></i> Settings</a>
               <Link class="dropdown-item" :href="route('logout')" method="post" as="button">Logout</Link>
            </div>
         </li>
      </ul>
      <div class="dropdown mobile-user-menu show">
         <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
         <div class="dropdown-menu dropdown-menu-right ">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <Link class="dropdown-item" :href="route('logout')" method="post" as="button">Logout</Link>
         </div>
      </div>
   </div>
   <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
         <div class="sidebar-contents">
            <div id="sidebar-menu" class="sidebar-menu">
               <div class="mobile-show">
                  <div class="offcanvas-menu">
                     <div class="user-info align-center bg-theme text-center">
                        <span class="lnr lnr-cross  text-white" id="mobile_btn_close">X</span>
                        <a href="javascript:void(0)" class="d-block menu-style text-white">
                           <div class="user-avatar d-inline-block mr-3">
                              <img :src="'/assets/img/profiles/avatar-18.jpg'" alt="user avatar" class="rounded-circle" width="50">
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="sidebar-input">
                     <div class="top-nav-search">
                        <form>
                           <input type="text" class="form-control" placeholder="Search here">
                           <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
               <ul>
                  <li>
                     <Link :href="route('home')" :class="{'active':$page.component=='Home'}"><img :src="'/assets/img/home.svg'" alt="sidebar_img"> <span>Dashboard</span></Link >
                  </li>
                  <li>
                     <Link :href="route('Employee')"><img :src="'/assets/img/employee.svg'" alt="sidebar_img"><span> Employees</span></Link >
                  </li>
                  <li>
                     <Link  href="/company.html"><img :src="'/assets/img/company.svg'" alt="sidebar_img"> <span> Company</span></Link >
                  </li>
                  <li>
                     <Link href="/calendar.html"><img :src="'/assets/img/calendar.svg'" alt="sidebar_img"> <span>Calendar</span></Link>
                  </li>
                  <li>
                     <Link  href="/leave.html"><img :src="'/assets/img/leave.svg'" alt="sidebar_img"> <span>Leave</span></Link>
                  </li>
                  <li>
                     <Link  href="/review.html"><img :src="'/assets/img/review.svg'" alt="sidebar_img"><span>Review</span></Link>
                  </li>
                  <li>
                     <a href="report.html"><img :src="'/assets/img/report.svg'" alt="sidebar_img"><span>Report</span></a>
                  </li>
                  <li>
                     <a href="manage.html"><img :src="'/assets/img/manage.svg'" alt="sidebar_img"> <span>Manage</span></a>
                  </li>
                  <li>
                     <a href="settings.html"><img :src="'/assets/img/settings.svg'" alt="sidebar_img"><span>Settings</span></a>
                  </li>
                  <li>
                     <a href="profile.html"><img :src="'/assets/img/profile.svg'" alt="sidebar_img"> <span>Profile</span></a>
                  </li>
               </ul>
               <ul class="logout">
                  <li>
                     <a href="profile.html"><img :src="'/assets/img/logout.svg'" alt="sidebar_img"><span>Log out</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="page-wrapper">
      <div class="content container-fluid">         
         <slot></slot>
      </div>
   </div>
</div>
</template>

<style lang="scss" scoped>

</style>