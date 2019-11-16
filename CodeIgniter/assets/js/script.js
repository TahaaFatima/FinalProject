// $(document).ready(function(){
//     $('.submit_chat').on('click',function(e){
//         e.preventDefault();

//         chat_msgs = $('.message_sent').val();

//         $.ajax({
//             url : SITE_URL+'/Chatbox/insert_messages',
//             type: "post",
//             data: {message_sent:chat_msgs}
//         })
//     })

//     setInterval(function(){
//         $.ajax({
//             url : SITE_URL+'/Chatbox/get_messages',
//             success : function(response){
//                 $('.show_chats').html(response);
//             }
//         })    
//     },1000)
// })