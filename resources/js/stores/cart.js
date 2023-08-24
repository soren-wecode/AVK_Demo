import {defineStore} from "pinia";
import axios from "axios";

export const useCartStore = defineStore('useCartStore', {
    state: () => ({
        products: [],
    }),

    // getters: {
    //     products: (state) => state.products,
    // },

     actions: {
        addToCart(product, amount) {
            axios.post('/cart/add-product', {
                product_id: product.id,
                amount: amount,
            }).then((response) => {
                this.products = response.data.cart_products;
            })
        },
        removeFromCart(product, amount) {
            axios.post('/cart/remove-product', {
                product_id: product.id
            }).then((response) => {
                this.products = response.data.cart_products;
            })
        },
        getCart() {
            axios.get('/cart/get')
                .then((response) => {
                    this.products = response.data.cart_products;
                })
        },
    },
})
