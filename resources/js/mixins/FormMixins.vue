<script>
export default {
    methods: {
        validateForm(rules = null) {
            let hasErrors = false
            this.errors = {} 
            Object.keys(this.form).forEach(field => {
                if (!this.form[field]) {
                    this.errors[field] = 'Please input the ' + field + '.'
                    hasErrors = true
                }
            })

            if (rules) {
                Object.keys(rules).forEach(field => {
                    rules[field].forEach(rule => {
                        if (rule.rule) {
                            this.errors[field] = rule.message ?? 'Invalid Field. Please Try Again'
                            hasErrors = true
                        }
                    })
                })
            }

            return hasErrors
        },
        parseErrorMessage(message){
            if (message instanceof Array) {
                return message[0];
            }
            
            return message
        }
    }
}
</script>