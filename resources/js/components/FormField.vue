<template>
    <div class="space-y-2 md:flex @md/modal:flex md:flex-row @md/modal:flex-row md:space-y-0 @md/modal:space-y-0 py-5">
        <div class="w-full px-6 md:mt-2 @md/modal:mt-2 md:px-8 @md/modal:px-8 md:w-1/5 @md/modal:w-1/5">
            <label for="test-default-text-field" class="inline-block leading-tight space-x-1">
                <span>{{ field.name }}</span>
            </label>
        </div>

        <div class="w-full space-y-2 px-6 md:px-8 @md/modal:px-8 md:w-3/5 @md/modal:w-3/5">
            <div class="space-y-1">
                <money3 v-bind="config" v-model.number="localValue" class="w-full form-control form-input form-control-bordered" />
            </div>
        </div>
    </div>
</template>



<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import { Money3Component } from 'v-money3'

export default {
  mixins: [FormField, HandlesValidationErrors],

  components: { money3: Money3Component },
  props: ['resourceName', 'resourceId', 'field'],

    data() {
        return {
            localValue: this.value
        }
    },

    computed: {
        config() {
            return {
                decimal: ",",
                thousands: ".",
                prefix: "R$ ",
                suffix: "",
                precision: 2,
                focusOnRight: true,
                masked: false
            };
        },
    },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.localValue = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.fieldAttribute, this.localValue || '')
    },
  },
}
</script>
