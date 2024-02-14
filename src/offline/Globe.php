<?php

namespace offline;

function ALoader(){
    $d = __DIR__ . '/../asset/';
    $classes = glob($d . '/*.php');
    foreach ($classes as $class) {
        require_once $class;
    }
}
spl_autoload_register(ALoader());

use Asset\Capital;
use Asset\Country;
use Asset\Language;
use Asset\Flag;
use Asset\Code;
use Asset\Currency;

class Globe{
    private function getCountries(){return Country::countries();}
    private function getCapitals(){return Capital::capitals();}
    private function getFlags(){return Flag::flags();}
    private function getCurrencies(){return Currency::currencies();}
    private function getCodes(){return Code::codes();}
    private function getLanguages(){return Language::languages();}

    private function checkCountryName($country){
        if(is_string($country)){
            return str_replace(" ","_",trim(strtolower($country)));
        }
        return 'Something went wrong! Please refer to the reference for the complete list of names available.';
    }

    // Country section
    public function Countries(){
        $c = [];
        foreach ($this->getCountries() as $country){
            array_push($c,ucfirst(str_replace("_"," ",$country)));
        }
        return $c;
    }
    public function African(){
        return array_slice($this->Countries(),0,53);
    }
    public function Asia(){
        return array_slice($this->Countries(),53,49);
    }
    public function Europe(){
        return array_slice($this->Countries(),102,45);
    }
    public function NorthAmerica(){
        return array_slice($this->Countries(),147,23);
    }
    public function SouthAmerica(){
        return array_slice($this->Countries(),170,13);
    }
    public function Australia(){
        return array_slice($this->Countries(),183,14);
    }


    // Capital section
    public function Capital($country){
        $countryName = $this->checkCountryName($country);
        $listCapitals = $this->getCapitals();
        if(array_key_exists($countryName,$listCapitals)){
            return str_replace("_"," ",$listCapitals[$countryName]);
        } else { return "The capital you are looking for does not exist."; }
    }

    // Flag section
    private function getNameFlag($country){
        $countryName = $this->checkCountryName($country);
        $listFlags = $this->getFlags();
        if(array_key_exists($countryName,$listFlags)){
            return $listFlags[$countryName];
        } else { return false; }
    }
    public function Flag($country,$type='svg',$dir='flags'){
        $venDirFlags = dirname(__DIR__).'../../res/flags/';
        $ty = trim(strtolower($type));
        if ($ty !== "png" && $ty !== "svg") {
            return "($type) is an invalid image type. Please, provide 'png' or 'svg'.";
        }
        if(!$this->getNameFlag($country)){
            return "$country is not a valid country!";
        }
        $imgFlagPath = $venDirFlags.$ty.'/'.$this->getNameFlag($country).'.'.$ty;
        $pubFlagDir = public_path($dir.'/');
        if (!file_exists($pubFlagDir)) {
            mkdir($pubFlagDir, 0755, true);
        }
        $pubFlagPath = $pubFlagDir.$this->getNameFlag($country).'.'.$ty;
        copy($imgFlagPath,$pubFlagPath);
        return $dir.'/'.$this->getNameFlag($country).'.'.$ty;
    }

    // Code section
    public function Code($country){
        $countryName = $this->checkCountryName($country);
        $listCodes = $this->getCodes();
        if(array_key_exists($countryName,$listCodes)){
            return $listCodes[$countryName];
        } else { return "The code you are looking for does not exist."; }
    }

    // Currency section
    public function Currency($country,$i=''){
        $i = trim(strtolower($i));
        $countryName = $this->checkCountryName($country);
        $listCurrency = $this->getCurrencies();
        if(array_key_exists($countryName,$listCurrency)){
            if($i=='name' || $i=='code'){
                return $listCurrency[$countryName][$i];
            }elseif(empty($i) || $i= ''){
                return ['name'=>$listCurrency[$countryName]['name'],'code'=>$listCurrency[$countryName]['code']];
            }else{
                return "($i) is an invalid type of information. Please, provide 'code', 'name' or leave it empty.";
            }
        } else { return "The currency you are looking for does not exist."; }
    }

    // Language section
    public function Language($country){
        $countryName = $this->checkCountryName($country);
        $listLanguage = $this->getLanguages();
        if(array_key_exists($countryName,$listLanguage)){
            return $listLanguage[$countryName];
        } else { return "Something went wrong with language"; }
    }
}
