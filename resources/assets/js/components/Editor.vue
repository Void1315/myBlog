<template>
    <div style="min-width: 666px;">
      <div class="title-box">
        <textarea placeholder="请输入标题"></textarea>
      </div>
      <div id="editorElem" style="text-align:left"></div>
      <input type="hidden" name="content" v-model="editorContent">
      <el-button type="primary" size="large">发布文章</el-button>
    </div>
</template>
<script>
    import E from 'wangeditor'
    import Vue from 'vue'
    export default {
      props: ['_token','url'],
      data () {
        return {
          editorContent: ''
        }
      },
      methods:{
      },
      mounted() {
        var editor = new E('#editorElem')
        var lel = new Vue()
        editor.customConfig.onchange = (html) => {
          this.editorContent = html
        }
        editor.customConfig.zIndex = 1
        // editor.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片
        editor.customConfig.uploadImgServer = this.url
        editor.customConfig.uploadFileName = 'image'
        editor.customConfig.uploadImgParams = {
              _token: this._token   // 属性值会自动进行 encode ，此处无需 encode
        }
        editor.customConfig.uploadImgHooks = {
          success:function(){
            lel.$message(
            {
              message: '图片上传成功！',
              type: 'success'
            })
          },
          error:function(){
            lel.$message.error('图片上传失败！')
          }
        }
        editor.create()
      }
          
    }
</script>

<style scoped>
.title-box
{
    margin: 16px 0;
    border: 0;
    padding: 0;
    height: auto;
    width: 100%;
    position: relative;
}
.title-box textarea
{
    height: 44px;
    min-height: 44px;
    display: block;
    width: 100%;
    border: 0;
    font-size: 32px;
    line-height: 1.4;
    font-weight: 700;
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    padding: 0;
    overflow: hidden;
    font-family: inherit;
    font-weight: inherit;
    background: transparent;
    border: none;
    outline: none;
    resize: none;
    background-color: white;
}
</style>