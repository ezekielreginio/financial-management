import axios from "axios";

export default {
    async loginRequest(data) {
        return await axios.post(`http://localhost:8000/api/auth/login`, data, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
    },
    async registrationRequest(data) {
        return await axios.post(`http://localhost:8000/api/register`, data, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
    }
}
