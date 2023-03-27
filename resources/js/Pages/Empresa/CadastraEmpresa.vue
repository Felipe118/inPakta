<template>
     <nav class="navbar">
        <h2 class="">CRM</h2>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="#">Home</a></li>
            <li class="navbar-item"><a :href="route('empresa.index') ">Empresas</a></li>
            <li class="navbar-item"><a href="#">Funcionarios</a></li>
        </ul>

       <BtnLogout></BtnLogout>
    </nav>
    <section class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <div v-if="sucess" class="mb-5 p-3 text-primary-emphasis bg-success border border-primary-subtle rounded-3">
                   Empresa cadastrada com sucesso
                </div>
                <h3 style="font-size: 26px;" class="mb-4">Formulário de cadastro de empresas</h3>
                <form action=""  @submit.prevent="submitForm">
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Nome:</label>
                        <input type="text" placeholder="Nome" class=" input form-control" v-model="form.nome">
                        <span class="text-danger">{{ errors.nome }}</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">E-mail:</label>
                        <input type="email" placeholder="E-mail" class=" input form-control" v-model="form.email">
                        <span class="text-danger">{{ errors.email }}</span>
                    </div>
                    <div class="form-group mb-5">
                        <label for="" class="form-label">Site:</label>
                        <input type="text" placeholder="Site" class="input form-control" v-model="form.website">
                        <span class="text-danger">{{ errors.website }}</span>
                    </div>

                    <button class="btn btn-outline-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    import BtnLogout from '../components/BtnLogout.vue'
   

    export default {
      
        data() {
            return {
                form:{},
                errors:{},
                message: {},
                sucess: false,
            }
        },
        
        methods: {
            submitForm(){
               this.$inertia.post('empresa',this.form, {
                    onSuccess: (resp) => {
                        this.message = resp
                        this.sucess = true
                        this.messageForm()
                        this.form = {}
                     
                    },
                    onError : (error) => {
                        this.errors = error
                        this.sucess = false
                    }
               })
            },

            messageForm(){
                setInterval(() => {
                    this.sucess = false
                }, 5000);
            },
        },
        name: 'CadastraEmpresa',

        components: {
            BtnLogout
        }
    }
</script>


<style>
    /* Base styles for the navbar */
    .navbar {
    display: flex;
    /* justify-content: center; */
    justify-content: space-around;
    align-items: center;
    padding: 1rem;
    background-color: #212529;
    color: #fff;
    }

    /* Style the menu items */
    .navbar-menu {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    }
    .botao{
        border-radius: 20px;
    }
    .titulo {
    font-size: 28px !important;
    }
    .navbar-item {
    margin: 0 1rem;
    }

    .navbar-item a {
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem;
    text-transform: uppercase;
    }

    /* Media query for smaller screens */
    @media (max-width: 768px) {
        /* Style the menu items to stack vertically */
        .navbar-menu {
            flex-direction: column;
            align-items: center;
        }

        /* Style the individual menu items */
        .navbar-item {
            margin: 0.5rem 0;
        }
    }

    .input{
        border-radius: 20px;
    }
</style>