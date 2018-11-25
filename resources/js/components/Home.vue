<template>
        <div>
            <div class="container-fluid hero-section d-flex align-content-center justify-content-center flex-wrap ml-auto">
                <h2 class="title">FindJobs</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 product-box" v-for="(job,index) in jobs" @key="index">
                                <router-link :to="{ path: '/jobs/'+jobs.id}">
                                    
                                    <h5><span v-html="job.name"></span>
                                        
                                    </h5>
                                    <button class="col-md-4 btn btn-sm btn-primary float-right">Register Now</button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
