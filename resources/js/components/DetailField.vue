<template>
  <PanelItem :index="index" :field="field" />
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

  created() {
      this.$props.field.value = 'R$ ' + new Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2 }).format(this.$props.field.value)
  }
}
</script>
