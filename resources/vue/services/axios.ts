import axios from 'axios';
import { useMessage } from 'naive-ui';


axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;


export default axios