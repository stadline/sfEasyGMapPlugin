<?php

if (!class_exists('sfCache'))
{
  class sfCache
  {
    
  }
}
/**
 * A fake cache class to be able to test the GMapClient class
 * @author Fabrice Bernhard
 */

class GMapClientTestCache extends sfCache
{
  public function get($key, $default = null)
  {
    $format = substr($key,0,3);
    switch($format)
    {
      case 'xml':
        return '<?xml version="1.0" encoding="UTF-8"?>
<GeocodeResponse>
 <status>OK</status>
 <result>
  <type>street_address</type>
  <formatted_address>60 Rue de Seine, 75006 Paris, France</formatted_address>
  <address_component>
   <long_name>60</long_name>
   <short_name>60</short_name>
   <type>street_number</type>
  </address_component>
  <address_component>
   <long_name>Rue de Seine</long_name>
   <short_name>Rue de Seine</short_name>
   <type>route</type>
  </address_component>
  <address_component>
   <long_name>6e Arrondissement</long_name>
   <short_name>6e Arrondissement</short_name>
   <type>sublocality</type>
   <type>political</type>
  </address_component>
  <address_component>
   <long_name>Paris</long_name>
   <short_name>Paris</short_name>
   <type>locality</type>
   <type>political</type>
  </address_component>
  <address_component>
   <long_name>Paris</long_name>
   <short_name>75</short_name>
   <type>administrative_area_level_2</type>
   <type>political</type>
  </address_component>
  <address_component>
   <long_name>Île-de-France</long_name>
   <short_name>IDF</short_name>
   <type>administrative_area_level_1</type>
   <type>political</type>
  </address_component>
  <address_component>
   <long_name>France</long_name>
   <short_name>FR</short_name>
   <type>country</type>
   <type>political</type>
  </address_component>
  <address_component>
   <long_name>75006</long_name>
   <short_name>75006</short_name>
   <type>postal_code</type>
  </address_component>
  <geometry>
   <location>
    <lat>48.8534920</lat>
    <lng>2.3369230</lng>
   </location>
   <location_type>ROOFTOP</location_type>
   <viewport>
    <southwest>
     <lat>48.8521430</lat>
     <lng>2.3355740</lng>
    </southwest>
    <northeast>
     <lat>48.8548410</lat>
     <lng>2.3382720</lng>
    </northeast>
   </viewport>
  </geometry>
 </result>
</GeocodeResponse>';
        break;
      case 'jso':
      default:
        return '{
   "results" : [
      {
         "address_components" : [
            {
               "long_name" : "60",
               "short_name" : "60",
               "types" : [ "street_number" ]
            },
            {
               "long_name" : "Rue de Seine",
               "short_name" : "Rue de Seine",
               "types" : [ "route" ]
            },
            {
               "long_name" : "6e Arrondissement",
               "short_name" : "6e Arrondissement",
               "types" : [ "sublocality", "political" ]
            },
            {
               "long_name" : "Paris",
               "short_name" : "Paris",
               "types" : [ "locality", "political" ]
            },
            {
               "long_name" : "Paris",
               "short_name" : "75",
               "types" : [ "administrative_area_level_2", "political" ]
            },
            {
               "long_name" : "Île-de-France",
               "short_name" : "IDF",
               "types" : [ "administrative_area_level_1", "political" ]
            },
            {
               "long_name" : "France",
               "short_name" : "FR",
               "types" : [ "country", "political" ]
            },
            {
               "long_name" : "75006",
               "short_name" : "75006",
               "types" : [ "postal_code" ]
            }
         ],
         "formatted_address" : "60 Rue de Seine, 75006 Paris, France",
         "geometry" : {
            "location" : {
               "lat" : 48.853492,
               "lng" : 2.336923
            },
            "location_type" : "ROOFTOP",
            "viewport" : {
               "northeast" : {
                  "lat" : 48.85484098029151,
                  "lng" : 2.338271980291502
               },
               "southwest" : {
                  "lat" : 48.85214301970851,
                  "lng" : 2.335574019708499
               }
            }
         },
         "types" : [ "street_address" ]
      }
   ],
   "status" : "OK"
}';
        break;
    }
  }

  public function set($key, $data, $lifetime = null)
  {
    return true;
  }
  public function has($key)
  {
    return true;
  }
  public function remove($key)
  {
    return true;
  }
  public function removePattern($pattern)
  {
    return true;
  }
  public function clean($mode = self::ALL)
  {
    return true;
  }
  public function getTimeout($key)
  {
    return null;
  }
  public function getLastModified($key)
  {
    return null;
  }

}
