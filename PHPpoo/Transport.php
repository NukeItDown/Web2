<?
    abstract class Transport{
        public $model = None;
        private $cpoh_km = NULL;
        private $fuelcapacity = 0;

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

        public function max_distance(){
            return $this->fuelcapacity/$this->cpoh_km * 100;
        }

        public function get_cpoh_km(){
            return $this->cpoh_km;
        }

        public function get_fuelcapacity(){
            return  $this->fuelcapacity;
        }

        public function set_fuelcapacity($amount){
            $this->fuelcapacity += $amount;
        }
    }
?>