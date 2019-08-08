<?php
namespace AiFaiz\Malaysia;

class MyStates{
	
	public $states;
	
	public function __construct(){
		$this->states = MyState::statesList();
	}
	
	private static function statesList(){
		// list source: https://en.wikipedia.org/wiki/States_and_federal_territories_of_Malaysia
		$states = [];
		
		$states[] = ['id'=>'1','code'=>'JHR', 'name' => 'Johor'];
		$states[] = ['id'=>'2','code' => 'KDH', 'name' => 'Kedah'];
		$states[] = ['id'=>'3','code' => 'KTN', 'name' => 'Kelantan'];
		$states[] = ['id'=>'4','code' => 'MLK', 'name' => 'Melaka'];
		$states[] = ['id'=>'5','code' => 'NSN', 'name' => 'Negeri Sembilan' ];
		$states[] = ['id'=>'6','code' => 'PHG', 'name' => 'Pahang'];
		$states[] = ['id'=>'7','code' => 'PNG', 'name' => 'Pulau Pinang'];
		$states[] = ['id'=>'8','code' => 'PRK', 'name' => 'Perak'];
		$states[] = ['id'=>'9','code' => 'PLS', 'name' => 'Perlis'];
		$states[] = ['id'=>'10','code' => 'SBH', 'name' => 'Sabah'];
		$states[] = ['id'=>'11','code' => 'SWK', 'name' => 'Sarawak'];
		$states[] = ['id'=>'12','code' => 'SGR', 'name' => 'Selangor'];
		$states[] = ['id'=>'13','code' => 'TRG', 'name' => 'Terengganu'];
		$states[] = ['id'=>'14','code' => 'KUL', 'name' => 'Kuala Lumpur'];
		$states[] = ['id'=>'15','code' => 'LBN', 'name' => 'Labuan'];
		$states[] = ['id'=>'16','code' => 'PJY', 'name' => 'Putrajaya'];
		
		$stateCollection = collect($states);
		return $stateCollection;
	}
	
	public static function states(){
		return MyStates::statesList();
	}
	
	public static function stateByCode($code){
		$states = MyStates::statesList()->where('code',$code)->first();
		if(isset($states['name']) && !empty($states['name'])):
			return $states['name'];
		endif;
		
		return '-';
	}
}