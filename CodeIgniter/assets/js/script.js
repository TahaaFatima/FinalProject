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