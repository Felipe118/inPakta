<template>
    <Header></Header>
    <div>
        <section class="container-fluid">
            <h2 class="titulo mt-5">Listagem de Empresas</h2>
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <Table />
                </div> 
            </div>
        </section>
        
    </div>
</template>

<script>
import axios from 'axios';
    import Header from './components/Header.vue';
    import Table from './components/Table.vue';

    export default {
        name: 'Empresa',

        components : {
            Header,
            Table
        },

        mounted(){
            this.getEmpresas()
        },
       
        data() {
            return {
                empresas:{},
            }
        },

        methods: {
            getEmpresas(url = null){
                axios.get(url ?? 'listar-empresas')
                .then( resp => {
                    this.empresas = resp.data
                })
            },

            getLabelPage(str) {
                if (str == '&laquo; Previous')
                    return '<<';
                else if (str == 'Next &raquo;')
                    return '>>';
                else
                    return str;
            },
        },
    }

   
</script>

<style>
    .titulo {
        font-size:30px ;
        text-align: center;
    }
</style>