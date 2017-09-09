<template>
	<div class="y-look" >
		<img :src="imageurl" class="img-responsive" @click="handlePictureCardPreview">
		<div class="button-box">
			<a href="####" v-show="lookBool" @click="lookClose">
				<span class="el-icon-circle-close look-close">
				</span>
			</a>
		</div>
		<el-dialog v-model="dialogVisible" size="tiny">
		  <img width="100%" :src="dialogImageUrl" alt="如果你看到了，这句话。说明后台出事了">
		</el-dialog>
	</div>
</template>
<script>
export default{
	props: ['imageurl'],
	data(){
		return{
			dialogVisible:false,
			dialogImageUrl:'',
			lookBool: true
		}
	},
	methods: {
		handlePictureCardPreview(file) {
	        this.dialogImageUrl = this.imageurl;
	        this.dialogVisible = true;
	      },
	      lookClose(){
	      	console.log(this)
	      	this.$emit('rua')
	      }
	}
}
</script>
<style scoped>
.y-look{
    width: 100%;
    height: 100%;
    max-height: 350px;
    position: relative;
    overflow-y: scroll;
}
.button-box
{
	position: absolute;
    left: 96%;
    top: 3%;
}
.look-close
{
    color: gray;
    font-size: 40px;
}
</style>