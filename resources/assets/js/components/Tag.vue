<template>
	<div class="tag-div">
		<a href=""  class="tag-a color-1 "  :style="{'background-color':'{{mmessage}}'}">{{mmessage}}</a>
	</div>
</template>
<script>
    export default {
        props: ['mmessage'],
        data()
        {
            return {
                colortag: 'black'
            }
        },
        created:function(){
            // $('.tag-a:before').css('border-right-color',colortag)    //`this` 指向 vm 实例
            console.log($('.tag-a:before'))
        }
    }
</script>
<style socped>
.tag-div
{
	
}
.tag-a{
	display: inline-block;
    text-decoration: none;
    font-weight: 400;
    font-size: 10px;
    color: #fff;
    height: 18px;
    line-height: 18px;
    float: left;
    padding: 0 5px 0 10px;
    position: relative;
    border-radius: 0 5px 5px 0;
    margin: 5px 9px 5px 8px;
    font-family: Menlo,Monaco,Andale Mono,lucida console,Courier New,monospace;
}
.tag-a:before 
{
    border: 9px solid transparent;
    content: " ";
    width: 0;
    height: 0;
    position: absolute;
    top: 0;
    left: -18px;
}
.tag-a:after
{
	content: " ";
    width: 4px;
    height: 4px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0 0 1px rgba(0,0,0,.3);
    position: absolute;
    top: 7px;
    left: 2px;
}
.color-1:before
{
    border-right-color: black;
}
</style>