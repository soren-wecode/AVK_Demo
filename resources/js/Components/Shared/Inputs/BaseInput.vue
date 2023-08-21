
<script>
export default {
    name: "BaseInput",
    props: {
        id: String,
        label: String,
        disabled: Boolean,
        modelValue: {},
    },
    computed: {
        inputId: function () {
            return this.id ?? this.label ?? 'text-input';
        },
        value: {
            get() {
                return this.modelValue;
            },
            set(value) {
                this.$emit('update:modelValue', value);
            }
        }
    }
}
</script>
