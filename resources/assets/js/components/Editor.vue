<template>
    <div style="min-width: 666px;">
        <div id="editorElem" style="text-align:left"></div>
        <input type="hidden" name="content" v-model="editorContent">
        <el-button @click="open">Yes!</el-button>
    </div>

</template>

<script>
    import E from 'wangeditor'
    export default {
      props: ['_token','url'],
      data () {
        return {
          editorContent: ''
        }
      },
      methods:{
        open(info) {
          this.$message('消息:'+info);
        }
      },
      mounted() {
        var editor = new E('#editorElem')
        var vue = 'a'
        editor.customConfig.onchange = (html) => {
          this.editorContent = html
        }
        editor.customConfig.zIndex = 100
        // editor.customConfig.uploadImgShowBase64 = true   // 使用 base64 保存图片
        editor.customConfig.uploadImgServer = this.url
        editor.customConfig.uploadFileName = 'image'
        editor.customConfig.uploadImgParams = {
              _token: this._token   // 属性值会自动进行 encode ，此处无需 encode
        }
        editor.customConfig.customAlert = this.open
        editor.create()
      }
    }
</script>

<style scoped>

</style>