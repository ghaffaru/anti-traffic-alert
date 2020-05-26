<template>
  <section id="education" class>
    <h2 class="mb-3 font-weight-bold text-center">Education</h2>
    <mdb-row class="row row d-flex justify-content-center mb-4">
      <div>
        <p>
          This page is about creating awareness and ensuring that together we eradicate human
          trafficking/modern slavery.
        </p>
        <ol>
          <li>
            Report any unusual activity to your local law enforcement agencies or upload
            information on this portal
          </li>
          <li>Do not engage in any conversation with anyone you are suspicious about</li>
          <li>
            If anyone makes sexual advances at you, report the person to trusted people or to your
            local law enforcement agencies. Alternatively, you can describe the incident on this
            portal
          </li>
          <li>
            Do not meet up with strangers alone in unusual places. Try to meet up in public places
            where you can visibly see people around you. It is advisable to go with a trusted person
            especially if you are a minor
          </li>
          <li>
            Do not engage in any form of sexual conversation via the internet with anyone
            especially if they are strangers.
          </li>
          <li>
            If you are a minor (below 18) report all forms of abuse via the internet immediately to a
            person you can trust. You can also report to your local law enforcement agencies.
            Alternatively, describe the incident on this portal.
          </li>
          <li>
            If you notice any cases of abuse or you become a victim of abuse, do not be afraid to
            report the issue to a trusted person or your local law enforcement agency. Alternatively,
            describe the incident on this portal
          </li>
        </ol>
      </div>
    </mdb-row>
  </section>
</template>
<script>
import { mdbRow } from "mdbvue";
export default {
  name: "Eduaction",
  components: {
    mdbRow
  }
};
</script>
<style >
#education {
  line-height: 1.8em;
}
</style>