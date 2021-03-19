<template>
    <div class="hidden">
      <vs-button size='xl' shadow @click="activeSidebar = !activeSidebar" class="mb-3">
        <img style='width: 100px' src="storage/assets/mignon.png">
        <template #animate >
          Menù
        </template>
      </vs-button> 
      <vs-sidebar class="mt-3"
        v-model="active"
        :open.sync="activeSidebar"
        >
        <vs-sidebar-item id="home">
          <template #icon>
            <i class="fas fa-anchor"></i>
          </template>
          Home
        </vs-sidebar-item>
        <vs-sidebar-item id="noleggio">
          <template #icon>
            <i class="fas fa-ship"></i>
          </template>
          Noleggio
        </vs-sidebar-item>
        <vs-sidebar-item id="pontile">
          <template #icon>
            <i class="fas fa-water"></i>
          </template>
          Pontile
        </vs-sidebar-item>
        <vs-sidebar-item id="officina">
          <template #icon>
            <i class="fas fa-wrench"></i>
          </template>
          Officina
        </vs-sidebar-item>
        <vs-sidebar-item id="refitting">
          <template #icon>
            <i class="fas fa-adjust"></i>
          </template>
          Refitting
        </vs-sidebar-item>
        <vs-sidebar-item id="vendita">
          <template #icon>
            <i class="far fa-handshake"></i>
          </template>
          Vendita Nuovo e Usato
        </vs-sidebar-item>
        <vs-sidebar-item id="contatti">
          <template #icon>
            <i class="fas fa-address-book"></i>
          </template>
          Contatti
        </vs-sidebar-item>
        <vs-sidebar-item id="chisiamo">
          <template #icon>
            <i class="fas fa-users"></i>
          </template>
          Chi siamo
        </vs-sidebar-item>
      </vs-sidebar>
    </div>
</template>

<script>
  export default {
    data:() => ({
      active: 'home',
      activeSidebar: false,
    })
  }
</script>
