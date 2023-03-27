<template>
  <nav class="navbar">
    <h2 class="">CRM</h2>
    <ul class="navbar-menu">
      <li class="navbar-item"><a href="#">Home</a></li>
      <li class="navbar-item">
        <a :href="route('empresa.index')">Empresas</a>
      </li>
      <li class="navbar-item"><a :href="route('funcionario.index')">Funcionarios</a></li>
    </ul>

    <form @submit.prevent="submit">
           
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="btn btn-light botao"
                    >SAIR</Link
                >
         
        </form>
    <!-- <a class="btn btn-light botao" :href="route('logout')">Logout</a> -->
  </nav>

  <section class="container-fluid">
    <div class="row justify-content-md-center mt-5">
      <div class="col-6">
        <h1 class="titulo">CRM - Para controle de funcionários e empresas</h1>
        <p class="mt-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          pellentesque justo leo, at finibus arcu laoreet quis. Curabitur
          dignissim enim vel nunc vestibulum, ut dapibus orci tincidunt. Proin
          condimentum hendrerit nulla imperdiet viverra. Integer quis felis a
          lectus porta bibendum. Donec ex sem, suscipit nec justo nec, iaculis
          viverra neque. Nunc vestibulum arcu sem, sit amet cursus mi
          scelerisque in. In nibh nunc, congue eu venenatis id, tincidunt in
          velit. Cras non odio sapien. Maecenas elit risus, facilisis euismod
          varius sed, faucibus molestie tellus.
        </p>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>
</template>
   
<script>
import {  Link } from '@inertiajs/vue3';

export default {
  name: "Home",

  components: {
    Link
  },

    
};

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

.footer {
  background-color: #333;
  color: #fff;
  padding: 1rem;
  margin-top: 56vh;
}

/* Style the container */
.container {
  max-width: 960px;
  margin: 0 auto;
}

/* Center the text within the container */
.container p {
  text-align: center;
}

.botao{
    border-radius: 20px;
}
</style>