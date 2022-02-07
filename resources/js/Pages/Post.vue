<template>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    
                    <router-link :to="{ name: 'posts/view' }" class="waves-effect">
                        <button class="btn btn-primary"><i class='bx bx-home'></i>view</button>
                    </router-link>
                    
                    <router-link :to="{ name: 'posts/lists' }" class="waves-effect">
                        <button class="btn btn-primary"><i class='bx bx-home'></i>lists</button>
                    </router-link>
                   
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>