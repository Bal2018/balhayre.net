 

function submitArticle(){
    RoadsterMate.request({
        url:"/article/upload",
        type :"POST",
        data : {
            "article":{
                title : '',
                contents :'',
                image :'',
                categories : '',
                isuseful: ''
            }
        },
        onSuccess:(resp => {
            console.log(resp)

        })
    })


}
// Initialize the editor.
$('.editor-content').froalaEditor();
//# sourceMappingURL=RizBlog.js.map