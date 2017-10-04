<template>
	<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">
			            标签管理面板
			        </h3>
			    </div>
			    <div class="panel-body" id='#ppa'>
			        <div class="row">
		        		<tage-serch :tage-date.sync="obj_date"></tage-serch>
		        		
			        </div>
			        
				        <div class="row">
				        	<el-table
						      :data="obj_date"
						      style="width: 100%">
						      <el-table-column
						      	type="index"
						        width="180">
						      </el-table-column>
						      <el-table-column
						        prop="tage_content"
						        label="名称"
						        sortable
						        width="180">
						      </el-table-column>

						      <el-table-column
						        prop="color"
						        label="颜色"
						        width="180">
						        <template scope="scope">
							        <el-color-picker v-model="scope.row.color"></el-color-picker>
							    </template>
						      </el-table-column>

						      <el-table-column
						        prop="updated_at"
						        sortable
						        label="更新时间">
						      </el-table-column>

						       <el-table-column
						        
						        label="操作">
						        <template scope="scope" >
						        	<el-button-group >
								        <el-button type="danger" size="primary" icon="delete" @click="tage_delete(scope.row,$event)"></el-button>
								        <el-button type="info" size="primary" icon="edit" @click="tage_edit(scope.row)"></el-button>
								    </el-button-group>
							    </template>
						      </el-table-column>

						    </el-table>
				        </div>

			    </div>

		<el-dialog title="编辑标签" :visible.sync="dialogFormVisible">
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
		    <el-button type="primary" @click="update_tages()">保 存</el-button>
		  </div>
		</el-dialog>


	</div>
</template>
<script>
	export default{
		props: ['tageDate'],
		data()
		{
			return{
				dialogFormVisible:false,
				formLabelWidth: '120px',
				obj_date:JSON.parse(this.tageDate),
				_row:null,
				form: {
				  id:'',
		          name: '',
		          color:''
		        },
			}
		},
		methods:{
			update_tages(){
				let this_ = this
				axios.post('/update_tages', {
					tage_content:this.form.name,
					color: this.form.color,
					id:this.form.id
				  })
				  .then(function(response) {
				  	let msg = JSON.parse(response.request.response)
				    this_.$message({
			            type: msg.type,
			            message: msg.text
			          	});
				    if(msg.type == 'success')
			    	{
			    		var index = $.inArray(this_._row,this_.obj_date)
			    		this_.obj_date[index].tage_content = this_.form.name
			    		this_.obj_date[index].color = this_.form.color
			    		var now = new Date()
			    		this_.obj_date[index].updated_at = now.getFullYear()+'-'+now.getMonth()+1+'-'+now.getDate()+' '+now.getHours()+':'+now.getMinutes()+':'+now.getSeconds()
			    	}

				  })
				  .catch(function (error) {
				    this_.$message({
			            type: 'error',
			            message: '出现了某些错误!'
			          	});
				    console.log(error)
				  });
				this.dialogFormVisible = false
				
			},
			tage_delete(row,event){
				let this_ = this
				this.$confirm('此操作将永久删除该文件, 是否继续?', '提示', {
		          confirmButtonText: '确定',
		          cancelButtonText: '取消',
		          type: 'warning'
		        }).then(()=>{
		        	axios.post('/tages_delete', {
						id:row.id
					  }).then(function(response) {
					  	let msg = JSON.parse(response.request.response)
					  	
						this_.$message({
				            type: msg.type,
				            message: msg.text
			          	});
			          	if (msg.type=='success')
			          		$(event.path[0]).parents("tr").fadeOut()
					  }).catch(function (error) {
					  	console.log(error)
					    this_.$message({
				            type: 'info',
				            message: error
				          });
					  });

		        }).catch(()=>{
					this.$message({
		            type: 'info',
		            message: '已取消删除'
		          });
		        });
			},
			tage_edit(row){
				this.dialogFormVisible = true
				this.form.name = row.tage_content
				this.form.color = row.color 
				this.form.id = row.id
				this._row = row
			}
		},
		mounted:()=>{

		}
	}

</script>