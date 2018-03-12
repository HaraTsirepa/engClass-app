$(document).ready(function(){

	// when the user clicks the button of a theory page
	$('.like-btn').on('click', function(){
		var post_id = $(this).data('id');
		//var id_user = $(this).data('code');
		//var name = $(this).data('code');
		$clicked_btn = $(this);

		// for the "like" button, you can only like or unlike. no dislike action...
		if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
			action = 'like';
		} else if ($clicked_btn.hasClass('fa-thumbs-up')) {
			action = 'unlike';
		}

		$.ajax({
			url: 'singular_plural_nouns.php',
			type: 'post',
			data: {
				'action': action,
				'post_id': post_id
				//'id_user': id_user
				//'name': name
			},
			success: function(data){
				res = JSON.parse(data);

				if (action == 'like') {
					$clicked_btn.removeClass('fa-thumbs-o-up');
					$clicked_btn.addClass('fa-thumbs-up');
				}
				else if(action == 'unlike'){
					$clicked_btn.removeClass('fa-thumbs-up');
					$clicked_btn.addClass('fa-thumbs-o-up');
				}

				// Display number of likes and dislikes
				$clicked_btn.siblings('span.likes').text(res.likes);
				$clicked_btn.siblings('span.dislikes').text(res.dislikes);

				// if the user previously disliked this post, change dislike button styles accordingly
				$clicked_btn.siblings('button.fa-thumbs-down').removeClass('fa-thumbs-down').addClass('fa-thumbs-o-down');
			}
		});

	});


	// if the user clicks on the dislike button ...
	$('.dislike-btn').on('click', function(){
		var post_id = $(this).data('id');
		//var id_user = $(this).data('code');
		var name = $(this).data('code');
		$clicked_btn = $(this);
	
		if ($clicked_btn.hasClass('fa-thumbs-o-down')) {
			action = 'dislike';
		} else if($clicked_btn.hasClass('fa-thumbs-down')){
			action = 'undislike';
		}
		
		$.ajax({
			url: 'singular_plural_nouns.php',
			type: 'post',
			data: {
				'action': action,
				'post_id': post_id
				//'id_user': id_user
				//'name': name
			},
			success: function(data){
				res = JSON.parse(data);
	
				if (action == "dislike") {
					$clicked_btn.removeClass('fa-thumbs-o-down');
					$clicked_btn.addClass('fa-thumbs-down');
				} else if(action == "undislike") {
					$clicked_btn.removeClass('fa-thumbs-down');
					$clicked_btn.addClass('fa-thumbs-o-down');
				}
	
				$clicked_btn.siblings('span.likes').text(res.likes);
				$clicked_btn.siblings('span.dislikes').text(res.dislikes);
				
				// if the user previously liked this post, change like button styles accordingly
				$clicked_btn.siblings('button.fa-thumbs-up').removeClass('fa-thumbs-up').addClass('fa-thumbs-o-up');
			}
		});	
	
	});


});
