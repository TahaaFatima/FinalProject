$(window).on('load', function () {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});
$(window).on('scroll', function () {
    divOuterHeight  = $('.navbar').outerHeight();
    windowScrollTop = $(this).scrollTop();
    
    if(windowScrollTop > divOuterHeight){
        $('.navbar').addClass('sticky');
    }else{
        $('.navbar').removeClass('sticky');
    }
});
$(document).ready(function () {
    
    // JQUERY UI TABS
    $("#tabs").tabs();

    // JQUERY UI DATEPICKER
    $('input.datepicker').datepicker({});
    
    // JQUERY UI TIMEPICKER
    $('input.timepicker').timepicker({});
    
    $('input.timepicker-appointment').timepicker({});
    
    // RATEYO - RATING STARS
    $(".rateYo").rateYo({

        onSet: function (rating, rateYoInstance) {

            $('.hidden-rating').val(rating);
        }
    });

    $('.fetch-rating').each(function(){
        identity = $(this).attr('id');
        shading  = $(this).attr('data-rating');
        console.log(identity);
        $('#'+identity).rateYo({
            rating : shading,
            readOnly : true
        })
    })

    // CHATBOX
    $('.send').on('click', function (e) {
        e.preventDefault();
        msg = $('input[name=message]').val();
        user_id = $('.user-id').val();

        data = { msg: msg, user_id: user_id };
        $.ajax({
            url: SITE_URL + "/chatbox/insert_messages",
            data: data,
            beforeSend: function() {
                $("#loading-image").show();
             },
            success: function (data) {
                $('input[name=message]').val('');
                $("#loading-image").hide();
            }
        })
    });

    console.log(SITE_URL)
    getChat();
    function getChat()
    {
        if ($('.chatarea').length) {
            li_length = $('.chatbox-listing > li').length;
            user_id = $('.user-id').val();
            data = { 
                offset: li_length,
                user_id: user_id
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

    // PROFILE PICTURE UPDATE
    $('#profile_edit').on('change', function(){
       var file     =   $(this).prop('files')[0];
       var formData =   new FormData();
       formData.append('userfile',file);
        $.ajax({
            url         :   SITE_URL+"/Doctors_Profile/image_upload",
            data        :   formData,
            type        :   "POST",
            processData :   false,
            datatype    :   "JSON",
            contentType :   false,
            cache       :   false,
            success     : function(){
                location.reload();
            }
        })
    })




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

 //CHATBOX
            //     if(ROLE_ID == 1){
            //         pat_id = $('.user-id').val();
            //         data = { 
            //             offset: li_length,
            //             pat_id: pat_id
            //         }
            //    // }else if(ROLE_ID == 2){
            //         doc_id = $('.user-id').val();
            //         data = { 
            //             offset: li_length,
            //             doc_id: doc_id
            //         }
            //    // }