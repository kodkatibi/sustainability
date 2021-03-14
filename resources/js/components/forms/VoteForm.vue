<template>
    <div>
        <el-table :data="companydatas" v-loading="loading" >
            <el-table-column prop="id" label="id">

            </el-table-column>
            <el-table-column prop="name" label="Company Name">

            </el-table-column>

            <el-table-column prop="description" label="Description">

            </el-table-column>

            <el-table-column prop="vote" label="Vote">

            </el-table-column>
            <el-table-column
                fixed="right"
                prop="id"
                label="Operations"
                width="120">
                <template slot-scope="scope">
                    <el-button @click="getCompanyinfo(scope.$index,scope.row)" type="text" size="small">Detail</el-button>

                </template>
            </el-table-column>
        </el-table>

        <el-drawer direction="rtl" :visible.sync="vote.sync" :title="vote.companyname">

        </el-drawer>
    </div>
</template>

<script>
export default {
    name: "VoteForm",
    data() {
        return {
            companydatas: null,
            loading: true,
            vote:{
                companyid:null,
                companyname:null,
                sync:false,

            }
        }
    },
    methods: {
        getCompanyinfo(index,rows) {

        },

    },

    beforeMount() {

        axios.get('/api/companies').then((response) => {
            this.companydatas = response.data.data;
            this.loading = false;
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
        })
    }
}
</script>

<style scoped>

</style>
