$(document).ready(function(){
	$(".question-form").goldCarrotForm({
		url: '/site/review-add',
		attributes: {
		    title: {
		        label: 'Заголовок комментария',
		        rules: [
		            'required',
		        ]
            },
            text: {
		        label: 'Описание комментария',
		        rules: [
		            'required',
		        ]
		    },
        },
        onSuccess: function(data){
            console.log('success', data)
            $('.error-summary').html(data.message).fadeIn('fast');
            setTimeout(function(){
                $('.error-summary').html("").fadeOut('fast');
            }, 5000);
        },
        onError: function(data){
            console.log('error', data)
        },
    })
});