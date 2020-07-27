<?php
require('fpdf.php');


$dbhost = 'localhost';
$dbuser = 'root';     // ini berlaku di xampp
$dbpass = '';         // ini berlaku di xampp
$dbname = 'iof';

$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

$order_number = $_GET['orderNumber'];

$qry_invoice = "SELECT ot.id_order_table, ot.id_ticket, ot.id_payment, ot.id_status, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, t.id_ticket,  t.class, t.price_real, p.id_payment, p.payment, p.rek, s.id_status, s.status, ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6 FROM order_table ot INNER JOIN ticket t ON ot.id_ticket = t.id_ticket INNER JOIN payment p ON ot.id_payment = p.id_payment INNER JOIN status s ON ot.id_status = s.id_status INNER JOIN ticket_info ti ON ti.id_ticket = t.id_ticket WHERE ot.order_number = '$order_number'";

$exe_qry_invoice = mysqli_query($db, $qry_invoice);

class myPDF extends FPDF {
    function header()
    {
        $this->Ln(10);
        $this->Image('../assets/images/logo-sm.png', 65,15,20, 'C');


        $this->Ln(20);
        $this->SetFont('Times','B',16);
        $this->Cell(50);
        $this->Cell(30,5,"IT'S OUR FESTIVAL 2020",0,0,'C');

        $this->Ln(9);
        $this->SetFont('Times','',10);
        $this->Cell(50);
        $this->Cell(30,5,"Fri, Sat, Sun - 28, 29, 30 Aug 2020 - 6 PM to 2 AM ",0,0,'C');

        $this->Ln(7);
        $this->SetFont('Times','',10);
        $this->Cell(50);
        $this->Cell(30,5,'JIExpo Kemaroyan, Jakarta, Indonesia ',0,1,'C');

        $this->Ln(5);
    }

    function break(){
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'------------------------------------------------------------------------------------------------',0,1,'C');
      $this->Ln(5);
    }

    function body($db){
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'E-Voucher Type :',0,1,'C');

      $this->Ln(5);
      $this->SetFont('Times','',10);
      $this->Cell(50);

      $order_number = $_GET['orderNumber'];

      $qry_invoice = "SELECT ot.id_order_table, ot.id_ticket, ot.id_payment, ot.id_status, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, t.id_ticket,  t.class, t.price_real, p.id_payment, p.payment, p.rek, s.id_status, s.status, ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6 FROM order_table ot INNER JOIN ticket t ON ot.id_ticket = t.id_ticket INNER JOIN payment p ON ot.id_payment = p.id_payment INNER JOIN status s ON ot.id_status = s.id_status INNER JOIN ticket_info ti ON ti.id_ticket = t.id_ticket WHERE ot.order_number = '$order_number'";

      $exe_qry_invoice = mysqli_query($db, $qry_invoice);

      while ($row_order_table = mysqli_fetch_array($exe_qry_invoice)) {
        $this->Cell(30,5,$row_order_table['class'],0,1,'C');


      $this->Ln(2);
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,$row_order_table['info2'],0,1,'C');

      $this->Ln(2);
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'IDR ' . $row_order_table['price_real'], 0,1,'C');

      $this->Ln(2);
      $this->SetFont('Times','',8);
      $this->Cell(50);
      $this->Cell(30,5,'*Price Includes Tax 20%',0,1,'C');
      $this->Ln(5);
    }
}
    function break2(){
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'------------------------------------------------------------------------------------------------',0,1,'C');
      $this->Ln(5);
    }

    function semifooter($db){
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'VALID FOR 1 PERSON ONLY :',0,1,'C');

      $order_number = $_GET['orderNumber'];

      $qry_invoice = "SELECT ot.id_order_table, ot.id_ticket, ot.id_payment, ot.id_status, ot.order_number, ot.name, ot.id_number, ot.email, ot.phone_number, t.id_ticket,  t.class, t.price_real, p.id_payment, p.payment, p.rek, s.id_status, s.status, ti.id_ticket, ti.info1, ti.info2, ti.info3, ti.info4, ti.info5, ti.info6 FROM order_table ot INNER JOIN ticket t ON ot.id_ticket = t.id_ticket INNER JOIN payment p ON ot.id_payment = p.id_payment INNER JOIN status s ON ot.id_status = s.id_status INNER JOIN ticket_info ti ON ti.id_ticket = t.id_ticket WHERE ot.order_number = '$order_number'";

      $exe_qry_invoice = mysqli_query($db, $qry_invoice);

      $this->Ln(5);
      $this->SetFont('Times','',10);
      $this->Cell(50);
      while ($row_order_table = mysqli_fetch_array($exe_qry_invoice)) {
        $this->Cell(30,5,'Name : '.$row_order_table['name'],0,1,'C');

      $this->Ln(5);
      $this->Image('barcode.png',60,145,30, 'C');
      $this->Ln(8.5);

      $this->SetFont('Times','',8);
      $this->Cell(50);
      $this->Cell(30,5,$row_order_table['order_number'],0,1,'C');
      $this->Ln(5);
    }
}

    function break3(){
      $this->SetFont('Times','',10);
      $this->Cell(50);
      $this->Cell(30,5,'------------------------------------------------------------------------------------------------',0,1,'C');
      $this->Ln(5);
    }

    function footer(){
      $this->SetFont('Times','',7);
      $this->Cell(50);
      $this->Cell(30,5,'Once purchased ticket cannot be refunded.',0,1,'C');
      $this->Cell(50);
      $this->Cell(30,5,'The right to enter the festival area must exchange e-voucher for wristband.',0,1,'C');
      $this->Cell(50);
      $this->Cell(30,5,'Admission by full e-voucher only.',0,1,'C');
      $this->Cell(50);
      $this->Cell(30,5,'This e-voucher cannot be replaced if lost, stolen or damaged.',0,1,'C');
      $this->Cell(50);
      $this->Cell(30,5,'Purchase from or resale by unauthorised sources may invalidate the e-voucher.',0,1,'C');
      $this->Cell(50);
      $this->Cell(30,5,'Management has the right to change, postpone or cancel the event as necessary. If the event is canceled, there will be a refund.',0,1,'C');
      $this->Ln(5);
    }
}


$pdf = new myPDF();
$pdf->AddPage('P', 'A5', 0);
// $pdf->viewTable($db);
$pdf->break();
$pdf->body($db);
$pdf->break2();
$pdf->semifooter($db);
$pdf->break3();
while ($row_order_table = mysqli_fetch_array($exe_qry_invoice)) {
  $pdf->Output('Invoice-'.$row_order_table['order_number'].'.pdf','D');
}
?>
