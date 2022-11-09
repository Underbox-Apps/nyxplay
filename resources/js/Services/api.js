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
    },

    getTitleDetails(movie_id, apiKey) {
        const promise = api.get(`movie/${movie_id}?api_key=${apiKey}&language=en-US`)
        const result = promise.then((response) => response.data)
        return result
    }
}
