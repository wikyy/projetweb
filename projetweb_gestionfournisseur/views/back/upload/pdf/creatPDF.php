<?Php
include "../../../../entities/fournisseur.php";
include "../../../../core/fournisseurC.php";
if (isset($_GET['ID'])) {
    require('fpdf.php');
    class PDF extends FPDF
    {

        // En-tête
        function Header()
        {
            $fournisseur1C = new fournisseurC();
            $result = $fournisseur1C->recupererfournisseur($_GET['ID']);
            $image = '';
            $name = '';
            $ID = '';
            foreach ($result as $row) {
                $image = $row['image'];
                $name = $row['nom_fournisseur'];
                $ID = $row['id_fournisseur'];
            }
            // Logo
            $this->Image('../../' . $image, 10, 6, 40);

            $this->SetFont('Arial', 'B', 20);
            $this->Cell(276, 10, 'Mr/Mme ' . $name, 0, 0, 'C');
            $this->Ln();

            $this->SetFont('Times', '', 14);
            $this->Cell(276, 20, 'ID : ' . $ID, 0, 0, 'C');
            // Saut de ligne
            $this->Ln(40);
        }
        // Pied de page
        function Footer()
        {
            // Positionnement à 1,5 cm du bas
            $this->SetY(-15);
            // Police Arial italique 8
            $this->SetFont('Arial', 'I', 8);
            // Numéro de page
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
        function headerTableGeneral($w)
        {
            $this->Ln(20);
            $this->SetFont('Courier', 'B', 20);
            $this->Cell(100, 20, 'Information generale : ', 0, 0, 'C');
            $this->Ln(30);
            $this->SetFont('Arial', 'B', 12);
            $this->SetFillColor(59, 78, 135);
            $this->SetTextColor(255, 255, 255);
            $this->Cell($w, 10, 'nom', 1, 0, 'C', true);
            $this->Cell($w, 10, 'email ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Adresse ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Numero Telephone ', 1, 0, 'C', true);

            $this->Ln();
        }
        function viewTableGeneral($w)
        {
            $fournisseur1C = new fournisseurC();
            $result = $fournisseur1C->recupererfournisseur($_GET['ID']);
            $image = '';
            $name = '';
            $ID = '';
            $mail='';
            $adresse='';
            $numtel=0;
            foreach ($result as $row) {
                $image = $row['image'];
                $name = $row['nom_fournisseur'];
                $ID = $row['id_fournisseur'];
                $mail = $row['mail'];
                $adresse = $row['adresse'];
                $numtel = $row['numtel'];
            }
            $this->SetFont('Times', '', 12);
            $this->SetTextColor(0, 0, 0);
            $this->Cell($w, 10, $name, 1, 0, 'C');
            $this->Cell($w, 10, $mail, 1, 0, 'C');
            $this->Cell($w, 10, $adresse, 1, 0, 'C');
            $this->Cell($w, 10, $numtel, 1, 0, 'C');
            $this->Ln();
        }
    }
    $pdf = new PDF();
    $RowWidth = 55;
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTableGeneral($RowWidth);
    $pdf->viewTableGeneral($RowWidth);
    $pdf->Ln(20);
    $pdf->Output('I');
}
