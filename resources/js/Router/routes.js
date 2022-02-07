const routes = [{
        path: '/home',
        component: () =>
            import ('../Pages/Home.vue'),
        name: 'home'
    },
    {
        path: '/users',
        component: () =>
            import ('../Pages/User.vue'),
        name: 'users'
    },
    {
        path: '/posts',
        component: () =>
            import ('../Pages/Post.vue'),
        name: 'posts',
        children: [{
                path: "view",
                component: () =>
                    import ('../Pages/PostView.vue'),
                name: "posts/view",
            },
            {
                path: "lists",
                component: () =>
                    import ('../Pages/PostLists.vue'),
                name: "posts/lists",
            },
        ]
    }
];

export default routes;