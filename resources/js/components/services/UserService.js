import axios from "axios";

export default {
    async loginRequest(data) {
        return await axios.post(`http://localhost:8001/users/auth/login`, data, {
            headers: {
                'Content-Type': 'application/json',

            }
        })
    }
}
