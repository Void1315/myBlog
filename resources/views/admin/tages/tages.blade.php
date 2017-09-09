@extends('admin.layout.layout')
@section('tage')
<div class="main">
	<div class="main-content">
		<div class="container">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <h3 class="panel-title">
			            标签管理面板
			        </h3>
			    </div>
			    <div class="panel-body">
			        <div class="row">
		        		<tage-serch></tage-serch>
			        </div>
			        <div class="row">
			        	<el-table
					      :data="{{$tageDate}}"
					      style="width: 100%">
					      <el-table-column
					        prop="content"
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
					    </el-table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection