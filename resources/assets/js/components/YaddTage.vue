<template>
	<div class="box">
		<div class="tage-box">
			<el-tag
			  v-for="tag in tags"
			  :key="tag.name"
			  :closable="true"
			  :type="tag.type"
			  :close-transition="false"
			  @close="handleClose(tag)"
			>
			{{tag.name}}
			</el-tag>
			<el-button type="text" size="mini" @click="a=!a"><i class="el-icon-plus"></i>添加标签</el-button>
		</div>
		<div class="add-box">
			<el-card class="box-card" v-show='a'>
			  <div v-for="o in 4" :key="o" class="text item">
			    {{'列表内容 ' + o }}
			  </div>
			</el-card>
		</div>
	</div>
</template>

<script type="text/javascript">
	export default{
		data(){
			return{
				tags: [
		          { name: '标签一', type: '' },
		          { name: '标签二', type: 'gray' },
		          { name: '标签三', type: 'primary' },
		          { name: '标签四', type: 'success' },
		          { name: '标签五', type: 'warning' },
		          { name: '标签一', type: '' },
		          { name: '标签二', type: 'gray' },
		          { name: '标签三', type: 'primary' },
		          { name: '标签四', type: 'success' },
		          { name: '标签五', type: 'warning' },
		          { name: '标签一', type: '' },
		          { name: '标签二', type: 'gray' },
		          { name: '标签三', type: 'primary' },
		          { name: '标签四', type: 'success' },
		          { name: '标签五', type: 'warning' },
		          { name: '标签六', type: 'danger' }
	        	],
	        	inputVisible: false,
        		inputValue: '',
        		a:false
			}
		},
		methods:{
			handleClose(tag){
				this.tags.splice(this.tags.indexOf(tag), 1);
			}
		},

	}
</script>

<style scoped>
.box .tage-box 
{
	padding: 15px 0;
}
.add-box
{
	padding-bottom: 10px;
}
.el-tag 
{
	margin-right: 10px;
}
.box-card{
	    /* float: right; */
    /* float: right; */
    display: flex;
}
</style>