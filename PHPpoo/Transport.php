<?
    abstract class Transport{
        public $model = None;
        public $cpoh_km = NULL;
        public $fuelcapacity = 0;

        public function __construct($model, $cpoh_km, $fuelcapacity){
            $this->model = $model;
            $this->cpoh_km = $cpoh_km;
            $this->fuelcapacity = $fuelcapacity;  
        }

        public function startRun($distanta){
            $this->fuelcapacity -= $distanta/100 * $this->cpoh_km;
        }

        public function fillFuel($amount){
            $this->fuelcapacity += $amount;
        }

        public function leftFuel(){
            echo "Fuel left: ". $this->fuelcapacity ."<br>";
        }
    }
?>