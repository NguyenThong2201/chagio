
const resource = '/admin';

export default {
    /**
     * Get Products list
     * @returns {*}
     */
    getListProducts() {
        return axios.get(`${resource}/api/list_products`);
    },
    /**
     * Get company list
     * @returns {*}
     */
    getCategoryList() {
        return axios.get(`${resource}/api/list_category`);
    },
};
