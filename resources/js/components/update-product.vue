<template>
    <div>
        Update Product
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
    setup(props: Props, context) {

        const component = Airwire.component('update-product', {}, reactive);

        onMounted(() => {
            console.log(props.id)
        })

        return {
            component
        }

    }
})
</script>
