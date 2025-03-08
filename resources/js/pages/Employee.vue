<script setup>
import { route } from '../../../vendor/tightenco/ziggy/src/js';
import PaginationLink from './Components/PaginationLink.vue';
defineProps({
    Users: Object
})
</script>
<template>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-12">
                <div class="breadcrumb-path mb-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <img :src="'assets/img/dash.png'" class="mr-2" alt="breadcrumb" />Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ul>
                    <h3>Employees</h3>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="head-link-set">
                    <ul>
                        <li><a class="active" href="#">All</a></li>
                        <li><a href="employee-team.html">Teams</a></li>
                        <li><a href="employee-office.html">Offices</a></li>
                    </ul>
                    <link class="btn-add" :href="route('addemployee')">
                        <i data-feather="plus"></i> Add Person
                </link>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="row">
                    <div class="col-xl-10 col-sm-8 col-12">
                        <label class="employee_count">7 People</label>
                    </div>
                    <div class="col-xl-1 col-sm-2 col-12">
                        <a href="employee-grid.html" class="btn-view">
                            <i data-feather="grid"></i>
                        </a>
                    </div>
                    <div class="col-xl-1 col-sm-2 col-12">
                        <a href="#" class="btn-view active">
                            <i data-feather="list"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="card">
                    <div class="table-heading">
                        <h2>Project Summary</h2>
                    </div>                
                    <div class="table-responsive">
                        <table class="table custom-table no-footer">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Line Manager</th>
                                    <th>Team</th>
                                    <th>Office</th>
                                    <th>Permissions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr v-for="user in Users.data" :key="user.id">
                                    <td>
                                        <div class="table-img">
                                            <a href="profile.html">
                                                <img :src="user.avatar?('storage/'+$page.props.auth.user.avatar):('storage/avatars/avatar-03.jpg')" alt="profile" class="img-table" />
                                                <label>{{ user.name }}</label>
                                            </a>
                                        </div>
                                    </td>
                                    <td><label class="action_label">{{ user.name }}</label></td>
                                    <td><label class="action_label2">Design</label></td>
                                    <td><label>{{ user.email }}</label></td>
                                    <td><label>Team Lead</label></td>
                                    <td class="tab-select">
                                        <select class="select">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </td>
                                </tr> 

                            </tbody>                            
                        </table>
                        <div>
                           <PaginationLink :paginator="Users" />
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style lang="scss" scoped>

</style>
    