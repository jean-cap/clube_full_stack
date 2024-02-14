import axios from 'axios';

const http = axios.create({
    baseURL: 'http://localhost:3000/',
    headers: {
        'Content-Type': 'application/json',
        'HTTP_X_REQUESTED_WITH': 'XMLHttpRequest'
    }
});

export default http;