<?php session_start();
$produsArrayId = array();
if (isset($_POST["add-item-submit"])) {
	$id = filter_input(INPUT_GET, "codProdus");
	$denumire = filter_input(INPUT_POST, "denumire");
	$pret = filter_input(INPUT_POST, "pret"); 
	$image = filter_input(INPUT_POST, "image");
	$cantitate = filter_input(INPUT_POST, "cantitate");
	$_SESSION['activityStatus'] = 'Post Confirm!';
	// verifica daca cosul contine produse
	if (isset($_SESSION["cos"])) {
		//cate produse sunt in cos
		$count = count($_SESSION['cos']);
		// lista care pastreaza id-urile produselos corespunzatoare pozitiei in lista SESSION['cos']
		$produsArrayId = array_column($_SESSION['cos'],'codProdus');
		// verifica daca produsul adaugat nu exista in cos
		if (!in_array($id, $produsArrayId)) {
			//adauga produsul in lista SESSION['cos'] la id count
			$_SESSION['cos'][$count] = array(
				'codProdus'=> $id,
				'image' => $image,
				'denumire'=>$denumire,
				'pret'=> $pret,
				'cantitate'=> $cantitate );
			$_SESSION['activityStatus'] = 'Produs adaugat in cos!';
			header("Location: ..".$_SESSION['currentSessionUrl']."");
			exit();	
		} //daca produsul exista doar aduna cantitatiile produselor identice
		else { 
			for ($i=0; $i < count($produsArrayId) ; $i++) {
				if ($produsArrayId[$i] == $id) {
					$_SESSION['cos'][$i]['cantitate'] += $cantitate;
					$_SESSION['activityStatus'] = 'Produs adaugat in cos!';
					header("Location: ..".$_SESSION['currentSessionUrl']."");
					exit();
				}
			}
		}	
	}
	// daca cosul nu contine produse
	else {
		$_SESSION['cos'][0] = array(
			'codProdus'=> $id,
			'image' => $image,
			'denumire'=>$denumire,
			'pret'=> $pret,
			'cantitate'=> $cantitate );
		$_SESSION['activityStatus'] = 'Produs adaugat in cos!';
		header("Location: ..".$_SESSION['currentSessionUrl']."");
		exit();
	}
}
//daca actiunea este delete
if (filter_input(INPUT_GET, "action") == 'delete') {
	// trecere prin tot cosul pana gasim idul din $_GET
	foreach($_SESSION['cos'] as $key => $produsArray){
		if ($produsArray['codProdus'] == filter_input(INPUT_GET ,"codProdus")) {
			//sterge produsul selectat din cos cu id-ul 
			unset($_SESSION['cos'][$key]);
		}	
	}
	//resetam lista care pastreaza id-urile produselos corespunzatoare pozitiei in lista SESSION['cos']
	$_SESSION['cos'] = array_values($_SESSION['cos']);
	$_SESSION['activityStatus'] = 'Produs sters din cos!';
		header("Location: ..".$_SESSION['currentSessionUrl']."");
		exit();
}
//daca actiunea este empty
if (filter_input(INPUT_GET, "action") == 'empty') {
	// resetam sesiunea la valoare nula
	unset($_SESSION['cos']);	
	$_SESSION['activityStatus'] = 'Cosul a fost golit!!';
	header("Location: ..".$_SESSION['currentSessionUrl']."");
	exit();
}
?>