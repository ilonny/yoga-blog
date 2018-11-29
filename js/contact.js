$(document).ready(function(){
	$(".question-form").goldCarrotForm({
		url: '/site/question-add',
		attributes: {
		    topic: {
		        label: 'Заголовок вопроса',
		        rules: [
		            'required',
		        ]
            },
            question: {
		        label: 'Описание вопроса',
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
            }, 3000);
        },
        onError: function(data){
            console.log('error', data)
        },
    })
});