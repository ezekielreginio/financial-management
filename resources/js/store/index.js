import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'
import auth from './auth'
import welcome from './modules/welcome.js'

Vue.use(Vuex)

export default new Vuex.Store({
    //Uncomment for VueX persisted state
    // plugins:[
    //     createPersistedState()
    // ],
    modules:{
        auth,
        welcome
    }
})