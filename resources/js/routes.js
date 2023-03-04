import Dashboard from './components/Dashboard'

export default {
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'Dashboard'
        },
    ]
}