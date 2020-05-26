<template >
  <v-fragment>  
    <!-- <HeaderComponent /> -->
    <Hero />
    <main class="mt-5">

      <div class="container">
        <About />
        <ReportCase />

        <hr class="my-5" />

        <Education />

        <hr class="my-5" />

        <Contact />

      </div>
    </main>
    <br />
    <Footer />
    
  </v-fragment>
</template>

<script>
import ReportCase from './ReportCase'
import HeaderComponent from "./HeaderComponent";
import Education from './Education';
import About from './About';
import Contact from './Contact';
import Footer from './Footer';
import Hero from './Hero';

export default {
  components: {
    ReportCase,
    HeaderComponent,
    Education,
    Contact,
    Footer,
    Hero,
    About
  }
}
</script>

<style>

</style>