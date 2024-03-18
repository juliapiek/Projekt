<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$lata,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$lata,&$oprocentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota == "") {
	$messages [] = 'Nie podano kwoty';
        }
        if ( $lata == "") {
	$messages [] = 'Nie podano lat';
        }
        if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
        }


	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
        if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$lata = intval($lata);
        $oprocentowanie = intval($oprocentowanie);
	
	//wykonanie operacji
    $miesieczneoprocentowanie = $oprocentowanie / 100 / 12;
    $miesiace = $lata * 12;
    $oplatamsc = ($kwota * $miesieczneoprocentowanie) / (1 - pow(1 + $miesieczneoprocentowanie, -$miesiace));

    if($oprocentowanie <= 10 ){
      $result = round($oplatamsc);
     }
    if ($oprocentowanie > 10 && $role == 'employee'){
    $messages [] = 'Tylko menadżer może obliczać tak wysokie oprocentowanie!';
    } else{
    $result = round($oplatamsc);
    }
    


	}

//definicja zmiennych kontrolera
$kwota = null;
$lata = null;
$oprocentowanie = null;
$miesieczneoprocentowanie = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota,$lata,$oprocentowanie);
if ( validate($kwota,$lata,$oprocentowanie,$messages) ) { // gdy brak błędów
	process($kwota,$lata,$oprocentowanie,$messages,$result);
}


include 'calc_view.php';