import axios from "axios";

const api = axios.create({
    baseURL: 'https://api.themoviedb.org/3/',
})

export default {
    searchTitle(searchData, apiKey) {
        const treatedSearchData = searchData.replace(/\s/g, "+")
        const promise = api.get(`search/movie?api_key=${apiKey}&query=${treatedSearchData}`)
        const result = promise.then((response) => response.data)
        return result
    }
}
