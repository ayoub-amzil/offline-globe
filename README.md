
# __Offline Globe__

Offline country data for PHP Laravel framework. Over 200 countries, capitals, flags, languages, currencies. No internet needed.
This packages uses the 7 model continent, and this is a [Reference](https://github.com/ayoub-amzil/offline-globe/blob/main/countries.txt) for all the countries included.


## __Installation__
```bash
  cd my-laravel-project
  composer require ayoub-amzil/offline-globe
```
    
## __Usage/Examples__
__Import class__
```php
use offline\Globe; 
```
__Create an instance__
```php
$globe = new Globe();
```
__Functions available__

Return an array type value of all countries available
```php
$globe->Countries()
```
Return an array type value of African countries
```php
$globe->African()
```
Return an array type value of Asian countries
```php
$globe->Asian()
```
Return an array type value of Australian countries
```php
$globe->Australia()
```
Return an array type value of European countries
```php
$globe->Europe()
```
Return an array type value of North America countries
```php
$globe->NorthAmerica()
```
Return an array type value of South America countries
```php
$globe->SouthAmerica()
```
Return the country code of the given country. The function accept one argument of type string.
```php
$globe->Code('Morocco') // MA (return type: string)
```
Return the capital of the given country. The function accept one argument of type string.
```php
$globe->Capital('japan') // Tokyo (return type: string)
```
Return the Languages spoken in the given country. The function accept one argument of type string.
```php
$globe->Language('jamaica') // ['english', 'jamaican_patois'] (return type: array)
```
Return the currency used in the given country. The function accept one or two arguments
```php
// It can take only the country (mandatory)
$globe->Currency('Canada') // ['name' => 'Canadian Dollar', 'code' => 'CAD'] (return type: array)

// Or the country plus one type of information
// name (option)
$globe->Currency('canada','name') // Canadian Dollar (return type: string)
// code (option)
$globe->Currency('canada','code') // CAD (return type: string)
```
Return the flag of the given country. The function accept three arguments. Country,  type of the flag, and a directory name where the flags are saved. 
```php
// country (mandatory)
return view('welcome',
            ['flag'=>$globe->flag('united states')]
        ); //  (return type: string)

// In your template
<img src="{{$flag}}" alt="image">
```
```php
// type (option) [default=svg]
return view('welcome',
            ['flag'=>$globe->flag('united states','png')]
        ); //  (return type: string)

// In your template
<img src="{{$flag}}" alt="image">
```
```php
// directory name (option) [default=flags]
// PS:  if you want to change your directory name, you have to set the type before
return view('welcome',
            ['flag'=>$globe->flag('united states','png','images')]
        ); //  (return type: string)

// In your template
<img src="{{$flag}}" alt="image">
```

## __Authors__

[@ayoub-amzil](https://github.com/ayoub-amzil/)
## __License__

[MIT](https://choosealicense.com/licenses/mit/)


## __Contributing__

Contributions are always welcome!




## __Acknowledgements__

 - [Flagpedia](https://flagpedia.net/about)
 