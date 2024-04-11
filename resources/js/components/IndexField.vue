<template>
  <span>R$ {{ fieldValue }}</span>
</template>

<script>
export default {
  props: ['resourceName', 'field'],

  data() {
      return {
          fieldValue: this.field.value

      }
  },
  computed: {
      fieldValue() {
          if (this.$props.field.divideValue) {
              this.fieldValue = this.$props.field.value / this.$props.field.divideValue
          }

          return Intl.NumberFormat('pt-BR', { minimumFractionDigits: 2 }).format(this.field.displayedAs || this.fieldValue)
      },
  }
}
</script>
