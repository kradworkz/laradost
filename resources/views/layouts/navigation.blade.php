<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <router-link :to="{ name: 'home' }" class="waves-effect">
                        <i class='bx bx-home'></i>
                        <span key="t-chat">Home</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'users' }" class="waves-effect">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-chat">Users</span>
                    </router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'posts' }" class="waves-effect">
                        <i class='bx bxs-notepad'></i>
                        <span key="t-chat">Posts</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</div>