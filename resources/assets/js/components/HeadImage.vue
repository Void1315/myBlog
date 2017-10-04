<template>
<div>
<el-upload
  v-if="nohasImage"
  class="upload-demo"
  drag
  :data=form
  name='image'
  list-type="picture"
  :on-success="getImage"
  :on-preview="handlePictureCardPreview"
  :action=url>
  <i class="el-icon-upload"></i>
  <div class="el-upload__text">选择一个文章封面，拖动到此，或<em>点击上传</em></div>
</el-upload>
<y-look v-else="nohasImage" :imageurl="imageUrl" v-on:rua="closeLook"></y-look>
<el-dialog v-model="dialogVisible" size="tiny">
  <img width="100%" :src="dialogImageUrl" alt="">
</el-dialog>
</div>
</template>
<script>
  export default {
    props: ['url','_token'],
    data() {
      return {
        dialogImageUrl: '',
        dialogVisible: false,
        form: {_token: this._token},
        imageUrl : '',
        nohasImage : true
      };
    },
    methods: {
      handleRemove(file, fileList) {
        console.log(file, fileList);
      },
      handlePictureCardPreview(file) {
        this.dialogImageUrl = file.url;
        this.dialogVisible = true;
      },
      getImage(file){
        this.imageUrl = file.data[0]
        this.nohasImage = false
        console.log()
      },
      closeLook(){
        this.nohasImage = true
        console.log(2)
      }
    }
  }
</script>
<style scoped>
.el-upload
{
    width: 100%;
} 
.el-upload-dragger
{
    width: 100%;
}
</style>