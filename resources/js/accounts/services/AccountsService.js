import axios from "axios"
import CookieService from '../../services/CookieService.js';

export default {
    async getAccounts() {
        return await axios.get(apiUrl + '/account-group/all', {
            headers: {
                'Authorization': 'Bearer ' + CookieService.getCookie('user_token')
            }   
        })
    }
}