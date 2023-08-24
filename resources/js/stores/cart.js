import {defineStore} from "pinia";
import axios from "axios";

export const useCartStore = defineStore('useCartStore', {
    state: () => ({
        products: [],
        discount: 0,
    }),

    getters: {
        totalPrice: (state) => {
            let price = 0;

            state.products.forEach(product => {
                price += product.product_option.price * product.amount;
            });

            return price;
        },
        totalPriceWithVAT() {
            return this.totalPrice * 1.2;
        },
        discountAmount() {
            return (this.totalPrice * (this.discount / 100)).toFixed(2);
        },
    },

     actions: {
        addToCart(product, amount) {
            axios.post('/cart/add-product', {
                product_id: product.id,
                amount: amount,
            }).then((response) => {
                this.getCart();
            })
        },
        removeFromCart(product) {
            axios.post('/cart/remove-product', {
                product_id: product.id
            }).then((response) => {
                this.getCart();
            })
        },
        discardCart(product) {
            axios.post('/cart/destroy').then((response) => {
                this.getCart();
            })
        },
        getCart() {
            axios.get('/cart/get')
                .then((response) => {
                    this.products = response.data.cart ? response.data.cart.cart_products : [];
                    this.discount = response.data.discount ? response.data.discount.discount : 0;
                })
        },
    },
})
