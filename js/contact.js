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
    })
});