<?php
if (!empty($_SESSION['cos'])) {
    $total= 0;
    echo '<h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Coșul meu</span>
            <span class="badge badge-primary badge-pill">'.count($_SESSION["cos"]).'</span>
        </h4>
        <hr>
        <ul class="list-group mb-3">';
    foreach($_SESSION["cos"] as $keys => $values){
        $subtotal = number_format($values['pret'] * $values['cantitate'],2);
        echo'<li class="list-group-item d-flex justify-content-between lh-condensed">
                <img src="'.$values['image'].'" alt="'.$values['denumire'].'" width="40" height="40">
                <div>
                    <h6 class="my-0">'.$values['denumire'].'</h6>
                    <small class="text-muted">Cantitate: '.$values['cantitate'].'</small>
                </div>
                <span class="text-muted">'.$subtotal.' Lei</span>
            </li>';
        $total = number_format($total + $subtotal,2);
    };
    echo '<li class="list-group-item d-flex justify-content-between">
            <span>Total (RON)</span>
            <strong>'.$total.' Lei</strong>
        </li>
        </ul>'; 
} else {
    echo '<h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Cosul este Gol</span>
            <span class="badge badge-secondary badge-pill">0</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Nici un produs...</h6>
                <small class="text-muted"></small>
            </div>
            <span class="text-muted"></span>
            </li>
        <ul>';
}
echo '<div class="card p-2 mb-3">
        <a href="cos.php" class="btn btn-danger m-1"> << Înapoi la Cosul meu</a> 
        <a href="produse.php" class="btn btn-warning m-1"> <<< Continua Cumparaturile </a>
        <a href="#" class="btn btn-success m-1"> Finalizare Comanda >>> </a>    
    </div>';
echo '<h4 class="d-flex text-center mb-3">
    <span class="text-muted">Adresa facturare</span>
    </h4>
    <hr>
    <div class="card p-2">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Prenume</label>
                <input type="text" class="form-control" id="firstName" placeholder="Prenume" value="'.$_SESSION["prenumeUtil"].'" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Nume</label>
                <input type="text" class="form-control" id="lastName" placeholder="Nume" value="'.$_SESSION["numeUtil"].'" disabled>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="exemplu@example.com" value="'.$_SESSION["emailUtil"].'"b disabled>
            </div>
        <div class="form-group">
            <label for="address">Adresa</label>
            <textarea class="form-control" id="address" rows="3" disabled>'.$_SESSION["adresaUtil"].'</textarea>
        </div>
    </div>';
?>