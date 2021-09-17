import axios from 'axios';

class BaseApi {
  constructor(url) {
    this.url = url;
  }

  post = async (url, params, axiosParams = {}) => {
    return await this.send(url, 'post', params, axiosParams);
  };

  get = async (url, params = {}, axiosParams = {}) => {
    const base_url = this.url;
    const res = await axios({
      method: 'get',
      params: params,
      url: `${base_url}${url}`,
      ...axiosParams
    });
    return res;
  };
}

export default BaseApi;
