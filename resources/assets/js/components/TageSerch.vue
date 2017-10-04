<template>
	<div class="bottom-boreder">
		<el-row>
			<el-col :span="16">
				<el-input 
				v-model="input" 
				:on-icon-click="handleIconClick"
				placeholder="请输入内容" 
				icon="search"
				max="200px" class="input"></el-input>
				
			</el-col>
			<el-col :span="6" class="the-button">
				<el-button type="primary" icon="search">搜索</el-button>
				<el-button type="primary" size="primary" icon="plus" @click="dialogFormVisible=true">添加标签</el-button>
			</el-col>
		</el-row>

		<el-dialog title="添加标签" :visible.sync="dialogFormVisible">
		  <el-form :model="form">
		    <el-form-item label="标签名称" :label-width="formLabelWidth">
		      <el-input v-model="form.name" auto-complete="off"></el-input>
		    </el-form-item>
		    <el-form-item label="标签颜色" :label-width="formLabelWidth">
		      <el-color-picker v-model="form.color"></el-color-picker>
		    </el-form-item>
		  </el-form>
		  <div slot="footer" class="dialog-footer">
		    <el-button @click="dialogFormVisible = false">取 消</el-button>
		    <el-button type="primary" @click="sendTage">确 定</el-button>
		  </div>
		</el-dialog>

	</div>

</template>
<script>
	export default{
		props: ['tageDate'],

		data(){
			return{
				input:'',
				dialogFormVisible: false,
				form: {
		          name: '',
		          color:''
		        },
		        formLabelWidth: '120px'
			}
		},
		methods:{
			handleIconClick(){
				console.log(this.input)
			},
			test_consle(data){
				console.log(data)
				this.append_tr()
				this.dialogFormVisible = false
			},
			append_tr(){
				let now = new Date()
				let now_time = now.getFullYear()+'-'+now.getMonth()+1+'-'+now.getDate()+' '+now.getHours()+':'+now.getMinutes()+':'+now.getSeconds()
				this.tageDate.push({
					color:this.form.color,
					created_at:now_time,
					deleted_at:null,
					id:72,
					tage_content:this.form.name,
					updated_at:now_time,
				})
			},
			sendTage(){//发送ajax异步请求
				
				let this_ = this
				axios.post('/tages', {
					tage_content:this.form.name,
					color: this.form.color
				  })
				  .then(function(response) {
				    this_.test_consle(response.data)

				  })
				  .catch(function (error) {
				    console.log(error);
				  });

			}
		}
	}
</script>
<style scoped>
	.the-button
	{
		display: flex;
		justify-content: flex-end;
	}
	.input
	{
		max-width:630px;
	}
</style>
<style>
	.bottom-boreder{
		border-bottom-style: solid;
	    border-bottom-color: #e4e7f0;
	    border-bottom-width: 1px;
	    padding-bottom: 15px;
	}

</style>