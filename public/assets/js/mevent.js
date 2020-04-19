

console.log('hi');



$(".mslider").owlCarousel({
    // autoplay:true,
    items:3,
    loop:true,
    rtl:true,
    dots:false,
    margin:10,
    nav: true,
    navText:['<','>'],
    // navColor:['#df42b1'],
    navClass:['owl-prev','owl-next'],
    nacElement:'div',
    center: true,
    // responsive:{
    //     0:{
    //         items:1
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:12
    //     }
    // }
    // autoplayHoverPause:true,

    }
 );



//     $('arrange').ready(function() {
//         var clicks=0;
//         $('div').click(function() {
//             var id = $(this).attr('id');
//             clicks +=1;
//             // alert(clicks);
//             // $('#'+id).eq(2).addClass("half");
//             if(clicks==1){
//             $('#'+id).addClass("half");
//             }else if(clicks==2){
//             $('#'+id).addClass("none");

//             }

//             // alert(id);


//         });
// });

// SHIFT =====
$('arrange').ready(function() {
    var clicks=0;
    $('button').click(function() {
        var id = $(this).attr('id');
        var seatid=$('.'+id+' div:nth-child(3)').attr('id');
        // alert(seatid);

        $('.'+id+' div:nth-child(3)').addClass("half");
        // $.ajaxSetup({
        //     headers: {
        //         // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $.ajax({
            // url: "http://localhost/myphp/tamrin9-1/registercontroller/Register",
            url: "/seat_shift/{id}",


            dataType:'json',
            type:'GET',
            data:{"seatid":seatid

            },
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },

            success: function(response,status){
                alert(response['success']);


            },
                error: function(XMLHttpRequest,textStatus,errorThrown){

            }
            });



    });
});

// DELETE =====
$('arrange').ready(function() {
    // var clicks=0;
    $('div').click(function() {
        var id = $(this).attr('id');
        $('#'+id).addClass("none");
        // var sib=$('#'+id).text();
        var sibcount=$('#'+id).nextUntil("button").text().length;
        // alert(sib);
        var a=1
        // for(i=1;i<=sibcount;i++){

        // }
        var newsib=sib-1;
        $('#'+id).nextAll().text(newsib);
        // alert(sib);


        // alert(text);


        // alert(id);


    });
});
// $('arrange').ready(function() {
//     $('div').dblclick(function() {
//         var id = $(this).attr('id');
//         // alert(id);
//         // $('#'+id).eq(2).addClass("half");
//         $('#'+id).addClass("none");

//         // alert(id);

//         // var tdid = $(this).closest('td').attr('id');
//         // return false;
//     });
// });
