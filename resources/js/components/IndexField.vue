<template>
  <span>R$ {{ fieldValue }}</span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  computed: {
      fieldValue() {
          return Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2 }).format(this.field.displayedAs || this.field.value)
      },
  }
}
</script>
