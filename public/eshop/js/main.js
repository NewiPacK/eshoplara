/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

function cart(cart){


    $("#cart .modal-body").html(cart);

    $("#cart").modal();

}



$(".add-to-cart").click(function(e){
    e.preventDefault();


    var id = $(this).data("id");
    var path= $(this).data("url");




    $.ajax({


        url: path,
        type: "GET",
        data: { id: id},


        success:function(res){

//console.log(res);
            cart(res);
        },

        error:function(){


            alert("Error");
        }


    });




});



function plus(id,path1,qty) {





    $.ajax({


        url: path1,
        type: "GET",
        data: { id: id, qty:qty},


        success:function(res){

            //console.log(res);
            cart(res);
        },

        error:function(){


            alert("Error");
        }


    });



}

function minus(id,path1,qty) {





    $.ajax({


        url: path1,
        type: "GET",
        data: { id: id, qty:qty},


        success:function(res){

            //console.log(res);
            cart(res);
        },

        error:function(){


            alert("Error");
        }


    });



}

function remove(id,path1) {


    $.ajax({


        url: path1,
        type: "GET",
        data: {id: id},


        success: function (res) {

            //console.log(res);
            cart(res);
        },

        error: function () {


            alert("Error");
        }


    });

}

    function destroy(path1) {





        $.ajax({


            url: path1,
            type: "GET",


            success:function(res){

                //console.log(res);
                cart(res);
            },

            error:function(){


                alert("Error");
            }


        });




}