import axios from "axios";

export default {
    async loginRequest(data) {
        console.log(process.env.APP_NAME)
        return await axios.post(`http://localhost:8000/api/auth/login`, data, {
            headers: {
                'Content-Type': 'application/json',
            }
        })
    }
}
