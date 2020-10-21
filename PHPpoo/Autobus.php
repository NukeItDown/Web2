<?
    require_once "Transport.php";
    class Autobus extends Transport {
        public function startRun($distanta){
            $fuel = $this->get_fuelcapacity();
            $this->set_fuelcapacity(-$distanta/100 * $this->get_cpoh_km());
            if( $this->get_fuelcapacity() <= 0){
                echo("Progress ". ($fuel / $this->get_cpoh_km())*100 ."/". $distanta ."<br>");
            }
        }
    }
?>