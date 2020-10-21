<?
    require_once "Transport.php";
    class Avion extends Transport{
        public function startRun($distanta){
            $this->fuelcapacity -= $distanta/100 * $this->cpoh_km;
            if($this->fuelcapacity <= 0){
                echo("NOT ENOUGH FUEL, ABORT OPERATION  <br>");
                $this->fuelcapacity += $distanta/100 * $this->cpoh_km;
                return 0;
            }
            return 1;
        }
    }
?>