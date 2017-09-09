<template>
	<div class="bottom-boreder">
		<el-row :gutter="10">
			<el-col :span="16">
				<el-input 
				v-model="input" 
				:on-icon-click="handleIconClick"
				placeholder="请输入内容" 
				icon="search"></el-input>
			</el-col>
			<el-button type="primary" icon="search">搜索</el-button>
		</el-row>
	</div>

</template>
<script>
	export default{
		data(){
			return{
				input:''
			}
		},
		methods:{
			handleIconClick(){
				console.log(this.input)
			}
		}
	}
</script>
<style scoped>
	
</style>
<style>
	.bottom-boreder{
		border-bottom-style: solid;
	    border-bottom-color: #e4e7f0;
	    border-bottom-width: 1px;
	    padding-bottom: 15px;
	}
</style>