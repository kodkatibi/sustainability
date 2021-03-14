<template>
    <div>
        <el-form>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="el-input--suffix grid-content mt-5">
                        <el-form-item label="Company Name*" type="text" prop="">
                            <el-input placeholder="Company Name" suffix-icon="el-icon-events"
                                      v-model="form.name"
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


                <div class="col-lg-6 col-sm-12">
                    <div class="el-input--suffix grid-content mt-5">
                        <el-form-item label="Sector" type="text" prop="">
                            <el-input placeholder="Sector" suffix-icon="el-icon-events"
                                      v-model="form.sector"
                            >

                            </el-input>
                        </el-form-item>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="el-input--suffix grid-content mt-5">
                        <el-form-item label="Website" type="text" prop="">
                            <el-input placeholder="Website" suffix-icon="el-icon-events"
                                      v-model="form.website"
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
    name: "AddCompanyForm",
    data() {
        return {
            form: {
                name: null,
                description: null,
                sector: null,
                website: null
            }
        }
    },
    methods: {
        submitForm() {
            axios.post('/company/store', this.form).then((response) => {
                this.$message({
                    showClose: true,
                    message: 'Succes',
                    type: 'success'
                });
                window.location.href='/company'
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
