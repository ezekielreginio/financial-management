import axios from "axios";

export default {
    async loginRequest(data) {
        return await axios.post(apiUrl + `/auth/login`, data, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
    },
    async registrationRequest(data) {
        return await axios.post(apiUrl + `/register`, data, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
    }
}
