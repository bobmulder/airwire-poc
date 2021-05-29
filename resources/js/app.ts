import { createApp, reactive } from 'vue'
import Airwire from './airwire'

require('./bootstrap');

require('alpinejs');

import UpdateProduct from './components/update-product.vue'

const app = createApp({
    components: {
        UpdateProduct
    }
})

app
    .use(Airwire.plugin('vue')(reactive))
    .mount('#app')

declare module 'vue' {
    export interface ComponentCustomProperties {
        $airwire: typeof window.Airwire
    }
}
