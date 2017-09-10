@extends('admin.layout.layout')
@section('tage')
<div class="main" id='app'>
	<div class="main-content">
		<div class="container">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">
			            标签管理面板
			        </h3>
			    </div>
			    <div class="panel-body" id='#ppa'>
			        <div class="row">
		        		<tage-serch></tage-serch>
			        </div>
			        <div class="row">
			        	<el-table
					      :data="{{$tageDate}}"
					      style="width: 100%">
					      <el-table-column
					        prop="tage_content"
					        label="名称"
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
					        label="更新时间">
					      </el-table-column>

					       <el-table-column
					        label="操作">
					        <template scope="scope">
					        	<el-button-group>
							        <el-button type="danger" size="primary" icon="delete" onclick=test(1)></el-button>
							        <el-button type="info" size="primary" icon="edit" onclick=test(1)></el-button>
							    </el-button-group>
						    </template>
					      </el-table-column>

					    </el-table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function test()
	{
		alert(1)
	}
</script>
@endsection
