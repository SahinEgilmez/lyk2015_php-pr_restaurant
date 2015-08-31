<?php

function getAllQuestions(){
    $doWeHaveData = false;

    // data dosyası varsa soruları oradan oku
    if($_POST['ekle']){//add-questions postu geliyo ise burayı uygular.
        $questionsDataFilePath = "../data/questions.txt";

    }else {
        $questionsDataFilePath = "data/questions.txt";
   }

    if(file_exists($questionsDataFilePath)) {
        $questionsDataFile = fopen($questionsDataFilePath, "r");
        $encodedQuestions = fread($questionsDataFile, filesize($questionsDataFilePath));
        fclose($questionsDataFile);

        if($encodedQuestions){
            //dizi yapıp ver
            $questions = json_decode($encodedQuestions, true);
            $doWeHaveData = true;
        }
    }


    // yoksa standart diziyi gönder
    if(!$doWeHaveData) {
        $questions = array(
            array(
                'question' => "Cumhuriyet hangi yıl ilan edildi?",
                'options' => array(
                    'a' => '1919',
                    'b' => '1920',
                    'c' => '1922',
                    'd' => '1923',
                ),
                'answer' => 'd'
            ),
        );
    }
    return $questions;
}