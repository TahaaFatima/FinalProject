// $(document).ready(function(){
//     $('.search_form').on('submit',function(e){
//         e.preventDefault();
//         selected_opt = [];

//              $(this).find('option:selected').each(function(i,v){
//                 // if($(this).is(":selected")){ 
//                     selected_opt.push($(this).attr('value'));
//                 // }
//              });
//              console.log(selected_opt);

//          $.ajax({
//             url : SITE_URL+'/Search/searching',
//             type: "post",
//             data: {values_selected:selected_opt}
//          })
//     })
// })

//     setInterval(function(){
//         $.ajax({
//             url : SITE_URL+'/Chatbox/get_messages',
//             success : function(response){
//                 $('.show_chats').html(response);
//             }
//         })    
//     },1000)
// })
$(document).ready(function () {
    $(function () {
        $("#tabs").tabs();
    });

    $('.send').on('click', function (e) {
        e.preventDefault();
        msg = $('input[name=message]').val();
        doc_id = $('.doc-id').val();

        data = { msg: msg, doc_id: doc_id };
        $.ajax({
            url: SITE_URL + "/chatbox/insert_messages",
            data: data,
            success: function (data) {
                $('input[name=message]').val('')
            }
        })
    });

    console.log(SITE_URL)
    getChat();
    function getChat()
    {
        if ($('.chatarea').length) {
            li_length = $('.chatbox-listing > li').length;
            
                
                doc_id = $('.doc-id').val();
                data = { offset: li_length,
                            doc_id: doc_id
                }
                $.ajax({
                    url: SITE_URL + "/chatbox/get_messages",
                    data: data,
                    success: function (data) {
                        $('.chatbox-listing').append(data);
                        li_length = $('.chatbox-listing > li').length;
                        getChat();
                    }
                }) 
    
    
        }

    }
});
// $(document).ready(function(){
//     $('.send').on('click', function(e){
//         e.preventDefault();
//         reviews = $('input[name=yourReview]').val();

//         data = {reviews:reviews};
//         $.ajax({
//             url:SITE_URL+"/Reviews/insertReviews",
//             data:data,
//             success:function(){
//                 $('input[name=yourReview]').val('')
//             }
//         })
//     })
// })