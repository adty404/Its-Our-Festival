<?php
  include '../config/database.php';

  $qry_getticket = "SELECT t.id_ticket, t.class, t.price, t.price_real,
                    ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6
                    FROM ticket t, ticket_info ti WHERE t.id_ticket = ti.id_ticket";
  $exe_ticket = mysqli_query($db, $qry_getticket);

//lineups bisa
//column id, name, picture,twitter, facebook, instagram,linkedin


//rundown days bisa
//column id, day, date, month, year -> if day=first || id=1 class=active


//isi rundown dicoba
//<div class="panel-heading" role="tab" id="headingOne">  -> heading"One", One is problem
/*
    COLLAPSE ONE
    <a role="button" data-toggle="collapse"
        data-parent="#accordion" href="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">

    COLLAPSE TWO
    <a class="collapsed" role="button" data-toggle="collapse"
        data-parent="#accordion" href="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
*/
/*
    GENRE COMMA PROBLEM
    <h4 class="author-info">Genre <span>Synthpop</span> , <span>Contemporary R&B</span></h4>
*/
/*
    COLLAPSEONE, HEADINGONE, FIRST COLLAPSE IN,
    <div id="collapseOne" class="panel-collapse collapse in"
        role="tabpanel" aria-labelledby="headingOne">
*/
?>
