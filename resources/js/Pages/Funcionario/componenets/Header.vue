<template>
    <nav class="navbar">
        <h2 class="">CRM</h2>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="#">Home</a></li>
            <li class="navbar-item"><a :href="route('funcionario.cadastra') ">Cadastrar Funcionarios</a></li>
            <li class="navbar-item"><a href="#">Empresas</a></li>
        </ul>

       <BtnLogout></BtnLogout>
    </nav>
</template>

<script>
    import BtnLogout from '../../components/BtnLogout.vue'

    export default {
        name: 'Header',

        components: {
            BtnLogout
        }
    }

    const submit = () => {
        form.post(route('verification.send'));
    };
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
</style>