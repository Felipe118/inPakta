<template>
     <form @submit.prevent="submit">
            
            <Link
                :href="route('logout')"
                method="post"
                as="button"
                class="btn btn-light botao"
                >SAIR</Link>
        
        </form>
</template>

<script>
    import {  Link } from '@inertiajs/vue3';

    export default {
        name: 'BtnLogou',

        components: {
            Link
        }
    }
 const submit = () => {
        form.post(route('verification.send'));
    };
</script>