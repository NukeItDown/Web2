<?
    require_once "Transport.php";
    class Autobus extends Transport {
        public function startRun($distanta){
            $fuel = $this->fuelcapacity;
            $this->fuelcapacity -= $distanta/100 * $this->cpoh_km;
            if($this->fuelcapacity <= 0){
                echo("Progress ". ($fuel / $this->cpoh_km)*100 ."/". $distanta ."<br>");
            }
        }
    }
?>