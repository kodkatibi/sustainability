<template>
    <div>
        <el-form>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="el-input--suffix grid-content mt-5">
                        <el-form-item label="Policy Name*" type="text" prop="">
                            <el-input placeholder="Policy Name" suffix-icon="el-icon-events"
                                      v-model="form.title"
                            >

                            </el-input>
                        </el-form-item>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="el-input--suffix grid-content mt-5">
                        <el-form-item label="Description*" type="text" prop="">
                            <el-input placeholder="Description" suffix-icon="el-icon-events"
                                      v-model="form.description"
                            >

                            </el-input>
                        </el-form-item>
                    </div>
                </div>


                <el-button type="success" round @click="submitForm">Submit</el-button>
            </div>
        </el-form>
    </div>
</template>

<script>
export default {
    name: "PolicyForm",
    props:['companyid'],
    data() {
        return {
            form: {
                title: null,
                description: null,
            }
        }
    },
    methods: {
        submitForm() {
            axios.post('/policy/store', this.form).then((response) => {
                this.$message({
                    showClose: true,
                    message: 'Succes',
                    type: 'success'
                });
                window.location.href = '/policy'
            }).catch((error) => {
                if (error.response.status === 422) {

                    this.$message({
                        showClose: true,
                        message: 'Required fields',
                        type: 'error'
                    });
                } else if (error.response.status === 402) {

                    this.$message({
                        showClose: true,
                        message: error.response.data.message,
                        type: 'error'
                    });
                } else {
                    this.$message({
                        showClose: true,
                        message: 'Something went wrong. Do not worry. We will fix it.',
                        type: 'error'
                    });
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
