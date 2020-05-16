<template>
  <div>  
    <HeaderComponent />
    <main class="mt-5">
      <div class="container">

        <ReportCase />

        <hr class="my-5" />

        <Education />

        <hr class="my-5" />

        <Contact />

      </div>
    </main>
    <Footer />
    
  </div>
</template>

<script>
import ReportCase from './ReportCase'
import HeaderComponent from "./HeaderComponent";
import Education from './Education';
import Contact from './Contact';
import Footer from './Footer';
export default {
  components: {
    ReportCase,
    HeaderComponent,
    Education,
    Contact,
    Footer
  }
}
</script>

<style>

</style>