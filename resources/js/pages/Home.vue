<script setup>
//import Layout from './Layouts/Layout.vue';
// defineOptions({
//     layout:Layout
// });
defineProps({
    User: String
})
// import { Link,Head } from '@inertiajs/vue3';
</script>

<template>
     <!-- <Head>
       <title>Home</title>
   </Head> -->
   <Head :title="` | ${$page.component}`"/>
    <!-- <div>
        <H1 class="container">Hello {{ $page.props.auth.name }}</H1>
    </div> -->

   
<div class="page-name 	mb-4">
   <h4 class="m-0"><img :src="$page.props.auth.user.avatar?('storage/'+$page.props.auth.user.avatar):('storage/avatars/avatar-03.jpg')" class="mr-1" alt="profile" /> Welcome {{ $page.props.auth.user.name }}</h4>
   <label>Sun, 1 OCT 2024</label>
</div>
<div class="row mb-4">
   <div class="col-xl-6 col-sm-12 col-12">
      <div class="breadcrumb-path ">
         <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><img :src="'/assets/img/dash.png'" class="mr-3" alt="breadcrumb" />Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
         </ul>
         <h3>Admin Dashboard</h3>
      </div>
   </div>
   <div class="col-xl-6 col-sm-12 col-12">
      <div class="row">
         <div class="col-xl-6 col-sm-6 col-12">
            <a class="btn-dash" href="#"> Admin Dashboard</a>
         </div>
         <div class="col-xl-6 col-sm-6 col-12">
            <a class="btn-emp" href="index-employee.html">Employee Dashboard</a>
         </div>
      </div>
   </div>
</div>
<div class="row mb-4">
   <div class="col-xl-3 col-sm-6 col-12">
      <div class="card board1 fill1 ">
         <div class="card-body">
            <div class="card_widget_header">
               <label>Employees</label>
               <h4>700</h4>
            </div>
            <div class="card_widget_img">
               <img :src="'assets/img/dash1.png'" alt="card-img" />
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-sm-6 col-12">
      <div class="card board1 fill2 ">
         <div class="card-body">
            <div class="card_widget_header">
               <label>Companies</label>
               <h4>30</h4>
            </div>
            <div class="card_widget_img">
               <img :src="'assets/img/dash2.png'" alt="card-img" />
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-sm-6 col-12">
      <div class="card board1 fill3 ">
         <div class="card-body">
            <div class="card_widget_header">
               <label>Leaves</label>
               <h4>9</h4>
            </div>
            <div class="card_widget_img">
               <img :src="'assets/img/dash3.png'" alt="card-img" />
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-sm-6 col-12">
      <div class="card board1 fill4 ">
         <div class="card-body">
            <div class="card_widget_header">
               <label>Salary</label>
               <h4>$5.8M</h4>
            </div>
            <div class="card_widget_img">
               <img :src="'assets/img/dash4.png'" alt="card-img" />
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xl-6 d-flex mobile-h">
      <div class="card flex-fill">
         <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
               <h5 class="card-title">Total Employees</h5>
            </div>
         </div>
         <div class="card-body">
            <div id="invoice_chart"></div>
            <div class="text-center text-muted">
               <div class="row">
                  <div class="col-4">
                     <div class="mt-4">
                        <p class="mb-2 text-truncate"><i class="fas fa-circle text-primary mr-1"></i> Business</p>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="mt-4">
                        <p class="mb-2 text-truncate"><i class="fas fa-circle text-success mr-1"></i> Testing</p>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="mt-4">
                        <p class="mb-2 text-truncate"><i class="fas fa-circle text-danger mr-1"></i> Development</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-6 d-flex">
      <div class="card flex-fill">
         <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
               <h5 class="card-title">Total Salary By Unit</h5>
            </div>
         </div>
         <div class="card-body">
            <div id="sales_chart"></div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xl-6 col-sm-12 col-12 d-flex">
      <div class="card card-list flex-fill">
         <div class="card-header ">
            <h4 class="card-title">Total Salary By Unit</h4>
         </div>
         <div class="card-body">
            <div class="team-list">
               <div class="team-view">
                  <div class="team-img">
                     <img :src="'assets/img/profiles/avatar-03.jpg'" alt="avatar" />
                  </div>
                  <div class="team-content">
                     <label>Maria Cotton</label>
                     <span>PHP</span>
                  </div>
               </div>
               <div class="team-action">
                  <ul>
                     <li><a><i data-feather="trash-2"></i></a></li>
                     <li><a><i data-feather="edit-2"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="team-list">
               <div class="team-view">
                  <div class="team-img">
                     <img :src="'/assets/img/profiles/avatar-04.jpg'" alt="avatar" />
                  </div>
                  <div class="team-content">
                     <label>Linda Craver</label>
                     <span>IOS</span>
                  </div>
               </div>
               <div class="team-action">
                  <ul>
                     <li><a><i data-feather="trash-2"></i></a></li>
                     <li><a><i data-feather="edit-2"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="team-list">
               <div class="team-view">
                  <div class="team-img">
                     <img :src="'/assets/img/profiles/avatar-06.jpg'" alt="avatar" />
                  </div>
                  <div class="team-content">
                     <label>Jenni Sims</label>
                     <span>Android</span>
                  </div>
               </div>
               <div class="team-action">
                  <ul>
                     <li><a><i data-feather="trash-2"></i></a></li>
                     <li><a><i data-feather="edit-2"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="team-list">
               <div class="team-view">
                  <div class="team-img">
                     <img :src="'/assets/img/profiles/avatar-11.jpg'" alt="avatar" />
                  </div>
                  <div class="team-content">
                     <label>Danny</label>
                     <span>Design</span>
                  </div>
               </div>
               <div class="team-action">
                  <ul>
                     <li><a><i data-feather="trash-2"></i></a></li>
                     <li><a><i data-feather="edit-2"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-sm-12 col-12 d-flex">
      <div class="card card-list flex-fill">
         <div class="card-header">
            <div class="">
               <h4 class="card-title">
               Recent Activities</h4>
            </div>
         </div>
         <div class="card-body dash-activity">
            <div class="slimscroll activity_scroll">
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-02.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>2 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-05.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>3 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-07.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>4 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-08.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>5 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-09.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>6 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-10.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>2 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src="'/assets/img/profiles/avatar-12.jpg'" alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>3 hours ago</span>
                  </div>
               </div>
               <div class="activity-set">
                  <div class="activity-img">
                     <img :src='"/assets/img/profiles/avatar-13.jpg"' alt="avatar">
                  </div>
                  <div class="activity-content">
                     <label>Lorem ipsum dolor sit amet,</label>
                     <span>4 hours ago</span>
                  </div>
               </div>
            </div>
            <div class="leave-viewall activit">
               <a>View all <img :src="'/assets/img/right-arrow.png'" class="ml-2" alt="arrow"></a>
            </div>
         </div>
      </div>
   </div>
   <div class="col-xl-3 col-sm-12 col-12 d-flex">
      <div class="card card-list flex-fill">
         <div class="card-header ">
            <h4 class="card-title-dash">Your Upcoming Leave</h4>
            <div class="dropdown">
               <button class="btn btn-action " type="button" id="roomsBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-ellipsis-h"></i>
               </button>
               <div class="dropdown-menu" aria-labelledby="roomsBtn">
                  <a class="dropdown-item" href="#">Action</a>
               </div>
            </div>
         </div>
         <div class="card-body p-0">
            <div class="leave-set">
               <span class="leave-inactive">
               <i class="fas fa-briefcase"></i>
               </span>
               <label>Mon, 16 Dec 2021</label>
            </div>
            <div class="leave-set">
               <span class="leave-active">
               <i class="fas fa-briefcase"></i>
               </span>
               <label>Fri, 20 Dec 2021</label>
            </div>
            <div class="leave-set">
               <span class="leave-active">
               <i class="fas fa-briefcase"></i>
               </span>
               <label>Wed, 25 Dec 2021</label>
            </div>
            <div class="leave-set">
               <span class="leave-active">
               <i class="fas fa-briefcase"></i>
               </span>
               <label>Fri, 27 Dec 2021</label>
            </div>
            <div class="leave-set">
               <span class="leave-active">
               <i class="fas fa-briefcase"></i>
               </span>
               <label>Tue, 31 Dec 2021</label>
            </div>
            <div class="leave-viewall">
               <a href="leave.html">View all <img :src='"/assets/img/right-arrow.png"' class="ml-2" alt="arrow" /></a>
            </div>
         </div>
      </div>
   </div>
</div>
</template>

<style lang="scss" scoped>

</style>