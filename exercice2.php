 <?php
    class Factorielle
    {
        public function calculateFactorielle($number)
        {
            $resultat = 1;
            if ($number < 2) {
                return $resultat;
            } else {
                return $resultat * $number * $this->calculateFactorielle($number - 1);
            }
        }
    }

    $factorielle = new Factorielle();
    $resultat = $factorielle->calculateFactorielle(3);
    echo $resultat. "\n";
?>