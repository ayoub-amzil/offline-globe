<?php

namespace infos;

function ALoader(){
    $d = __DIR__.'/../asset/';
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

class Build{
    public function countries(){return Country::countries();}
    public function capitals(){return Capital::capitals();}
    public function flags(){return Flag::flags();}
    public function currencies(){return Currency::currencies();}
    public function codes(){return Code::codes();}
    public function languages(){return Language::languages();}

    public function checkCountryName($country){
        if(is_string($country)){
            return str_replace(" ","_",trim(strtolower($country)));
        }
        return 'Something went wrong with the name!';
    }

    // Country section
    public function getCountries(){
        $c = [];
        foreach ($this->countries() as $country){
            array_push($c,ucfirst(str_replace("_"," ",$country)));
        }
        return $c;
    }
    public function african(){
        return array_slice($this->getCountries(),0,53);
    }
    public function asia(){
        return array_slice($this->getCountries(),53,49);
    }
    public function europe(){
        return array_slice($this->getCountries(),102,45);
    }
    public function northAmerica(){
        return array_slice($this->getCountries(),147,23);
    }
    public function southAmerica(){
        return array_slice($this->getCountries(),170,13);
    }
    public function australia(){
        return array_slice($this->getCountries(),183,14);
    }


    // Capital section
    public function getCapital($country){
        $countryName = $this->checkCountryName($country);
        $listCapitals = $this->capitals();
        if(array_key_exists($countryName,$listCapitals)){
            return str_replace("_"," ",$listCapitals[$countryName]);
        } else { return "Something went wrong with capital"; }
    }

    // Flag section
    public function getNameFlag($country){
        $countryName = $this->checkCountryName($country);
        $listFlags = $this->flags();
        if(array_key_exists($countryName,$listFlags)){
            return $listFlags[$countryName];
        } else { return false; }
    }
    public function getImgFlag($type,$country){
        $basePath = dirname(__DIR__).'../../res/flags/';
        $ty = trim(strtolower($type));
        if ($ty !== "png" && $ty !== "svg") {
            return "($type) Invalid image type. Please provide 'png' or 'svg'.";
        }
        if(!$this->getNameFlag($country)){
            return "$country ins not a valid country!";
        }
        $imgPath = $basePath.$ty.'/'.$this->getNameFlag($country).'.'.$ty;
        if (file_exists($imgPath)) {
            if($ty=='png'){
                header('Content-Type: image/png');
                readfile($imgPath);
            }else{
                return file_get_contents($imgPath);
            }
        } else {
            return 'Image path seems incorrect!';
        }
        return 'Something went wrong with the image!';
    }

    // Code section
    public function getCode($country){
        $countryName = $this->checkCountryName($country);
        $listCodes = $this->codes();
        if(array_key_exists($countryName,$listCodes)){
            return $listCodes[$countryName];
        } else { return "Something went wrong with country code"; }
    }

    // Currency section
    public function getCurrency($i,$country){
        $i = trim(strtolower($i));
        $countryName = $this->checkCountryName($country);
        $listCurrency = $this->currencies();
        if(array_key_exists($countryName,$listCurrency)){
            if($i=='name' || $i=='code'){
                return $listCurrency[$countryName][$i];
            }elseif(empty($i) || $i=='' ){
                return ['name'=>$listCurrency[$countryName]['name'],'code'=>$listCurrency[$countryName]['code']];
            }else{
                return "($i) Invalid information type. Please provide 'code' or 'name'.";
            }
        } else { return "Something went wrong with currency"; }
    }

    // Language section
    public function getLanguage($country){
        $countryName = $this->checkCountryName($country);
        $listLanguage = $this->languages();
        if(array_key_exists($countryName,$listLanguage)){
            return $listLanguage[$countryName];
        } else { return "Something went wrong with language"; }
    }
}



