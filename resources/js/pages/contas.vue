<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12">
        <v-card max-width="300">
          <v-card-title>Conta</v-card-title>
          <v-card-text>

            <v-text-field
              v-model="form.numero_da_conta"
              label="Numero da conta"
              type="number"
            ></v-text-field>

            <v-text-field
              v-model="form.nome_da_conta"
              label="Nome da conta"
              type="text"
            ></v-text-field>

            <v-text-field
              v-model="form.sub_grupos_idsub_grupos"
              label="Subgrupo id"
              type="number"
            ></v-text-field>

            <v-text-field
              v-model="form.natureza_idnatureza"
              label="Natureza id"
              type="number"
            ></v-text-field>

            <v-btn
              color="blue"
              @click="criarConta()"
              class="white--text"
              depressed
              >Criar</v-btn
            >
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import { mapActions } from "vuex";
export default {
  layout: "default",
  data: () => ({
    form: {
      numero_da_conta: "",
      nome_da_conta: "",
      sub_grupos_idsub_grupos: "",
      natureza_idnatureza: "",
    },
  }),
  methods: {
    ...mapActions("conta", "criarConta"),
    async criarConta() {
      this.$store.dispatch('conta/criarConta',this.form)
    },
  },
};
</script>
