<template>
    <div>
        Update Product!

        <input type="text" v-model="component.deferred.name">

        <button @click="component.submit()">Opslaan</button>
    </div>
</template>

<script lang="ts">
import { defineComponent, reactive, onMounted } from 'vue'
import Airwire from '../airwire'

interface Props {
    id: number
}

export default defineComponent({
    props: {
        id: {
            required: true,
            type: Number,
            default: null
        }
    },

    data() {
        return {
            component: this.$airwire.component('update-product', {
                name: 'Report ...',
            }),
        }
    },

})
</script>
