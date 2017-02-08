<?php

	//receive data
	$data = $_REQUEST;
	//passing question
	$question = $data["questionNumber"];

	//result array
	$result = array();

	//data array
	$questionAnswers = array(
		array( 'number'	 => '1',   'possibleQuestions' => 'what is your name'    ),
		array( 'number'	 => '1',   'possibleQuestions' => 'how old are you'    ),
		array( 'number'	 => '1',   'possibleQuestions' => 'where are you from'    ),
		array( 'number'  => '2',   'possibleQuestions' => 'favorite food'    ),
		array( 'number'  => '2',   'possibleQuestions' => 'favorite movie'    ),
		array( 'number'  => '2',   'possibleQuestions' => 'favorite song'    ),
		array( 'number'  => '3',   'possibleQuestions' => 'favorite blog'    ),
		array( 'number'  => '3',   'possibleQuestions' => 'favorite website'    ),
		array( 'number'  => '3',   'possibleQuestions' => 'favorite tv show'    ),
		array( 'number'  => '4',   'possibleQuestions' => 'favorite sport'    ),
		array( 'number'  => '4',   'possibleQuestions' => 'how did you hear about us'    ),
		array( 'number'  => '4',   'possibleQuestions' => 'where do you live'    )
	
	);


	for ($count= 0; $count < count($questionAnswers); $count++) {

		if (stripos($questionAnswers[$count]['number'], $question) !== false ) {

			array_push($result, $questionAnswers[$count]);
		
		}

	}

	//return as json
	echo json_encode($result);


?>