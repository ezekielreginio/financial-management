import Dashboard from './components/Dashboard'
import Accounts from './components/Accounts'

export default {
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: Dashboard,
            name: 'Dashboard'
        },
        {
            path: '/accounts',
            component: Accounts,
            name: 'Accounts'
        },
    ]
}