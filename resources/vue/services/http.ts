import Axios, { AxiosInstance, Method } from 'axios'

const envBaseUrl: string = import.meta.env.VITE_BASE_URL

const http = Axios.create({
    baseURL: envBaseUrl + '/api'
})

// http.interceptors.request.use(config => {
//     // Load JWT in the headers 
// })

export { http }