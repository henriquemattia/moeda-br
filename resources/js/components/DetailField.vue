<template>
  <PanelItem :index="index" :field="field" />
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

  data() {
      return {
          fieldValue: this.$props.field.value

      }
  },

  created() {
      if (this.$props.field.divideValue) {
          this.fieldValue = this.$props.field.value / this.$props.field.divideValue
      }

      this.$props.field.value = 'R$ ' + Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2 }).format(this.fieldValue)
  }
}
</script>
