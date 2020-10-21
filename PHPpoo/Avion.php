<?
    require_once "Transport.php";
    class Avion extends Transport{
        public function startRun($distanta){
            if($this->max_distance() < $distanta)
                throw new Exception("NOT ENOUGH FUEL, ABORT OPERATION  <br>");

            $this->set_fuelcapacity(-$distanta/100 * $this->get_cpoh_km());
            return 1;
        }
    }
?>