import {defineStore} from "pinia";

export const useAppStore = defineStore('appStore' ,{

    // state
    state: () => {
        return {
            typeofproject: "laravel"
        }
    },

    // methods
    actions: {

    },

    // mutations
    getters: {

    }
});
