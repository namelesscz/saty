<?php
class ControllerExtensionShippingMultishipping extends Controller {
  const ICON_WIDTH = 104;
  const ICON_HEIGHT = 59;
  const ICON_POST_WIDTH = 21;
  const ICON_POST_HEIGHT = 21;
  
	const SERVICE_2_XML = 'http://napostu.ceskaposta.cz/vystupy/napostu.xml';
  const SERVICE_3_XML = 'https://www.pplbalik.cz/ASM/Ktm.asmx/GetKTMList?couCode=';
  const SERVICE_4_XML = 'https://api.ulozenka.cz/v2/branches.xml';
  const SERVICE_5_XML = 'http://www.zasilkovna.cz/api/{code}/branch.xml';
  const SERVICE_6_XML = 'http://dpdparcelshop.cz/export/xml';
  
  private $countries = array(
    56 => 'ČR',
    189 => 'SR'
  );
  
	public function index() {

	}
  
  public function reloadDestinations() {
    $service_id = 2;

    while ($service_id < 8)
    {
      $service_constant = 'SERVICE_' . $service_id . '_XML';
      
      if (defined('static::' . $service_constant))
      {
        switch ($service_id)
        {
          case 2:               
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYHOST => false,
                // CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_URL => self::SERVICE_2_XML
            ));

            $curl_response = curl_exec($curl);

            curl_close($curl);
            
            $xml = simplexml_load_string($curl_response);
            
            if (!empty($xml))
            {           
              $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
              
              foreach ($xml->row as $row)
              {
				        if ((string) $row->V_PROVOZU == 'A') continue;
                                  
                $extra_data = array();
                
                if (!empty($row->BANKOMAT))
                {
                  if ((string) $row->BANKOMAT == 'A')
                  {
                    $extra_data['cashmachine'] = true;
                  }
                }
                
                if (!empty($row->PARKOVISTE))
                {
                  if ((string) $row->PARKOVISTE == 'A')
                  {
                    $extra_data['parking'] = true;
                  }
                }
                
                if (!empty($row->VIKEND))
                {
                  if ((string) $row->VIKEND == 'A')
                  {
                    $extra_data['weekend'] = true;
                  }
                }
                
                if (!empty($row->PRODL_DOBA))
                {
                  if ((string) $row->PRODL_DOBA == 'A')
                  {
                    $extra_data['long_open'] = true;
                  }
                }
                
                if (!empty($row->KOMPLET_SERVIS))
                {
                  if ((string) $row->KOMPLET_SERVIS == 'A')
                  {
                    $extra_data['complete_servis'] = true;
                  }
                }
                                
                if (!empty($row->OTV_DOBA))
                {
                  $i = 0;
                  
                  $extra_data['hours'] = array();
                  
                  foreach ($row->OTV_DOBA->den as $open_day => $open_data)
                  {
                    $i++;
                    
                    $extra_data['hours'][] = array(
                      'day' => $i,
                      'from' => (string) $open_data->od_do->od,
                      'to' => (string) $open_data->od_do->do,
                    );  
                  }
                }
                                                 
          		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
                  SET 
                    branch_id = '" . (string) $row->PSC . "',
                    service_id = " . (int) $service_id . ",
                    country = 'ČR',
                    city = '" . (string) $row->NAZ_PROV . "',
                    address = '" . (string) $row->ADRESA . "',
                    postcode = '" . (string) $row->PSC . "',
                    extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";
    
                $this->db->query($sql);
              }
            }     
            break;
            
          case 3:         
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                // CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_URL => self::SERVICE_3_XML
            ));

            $curl_response = curl_exec($curl);

            curl_close($curl);
            
            $xml = simplexml_load_string($curl_response);
            
            if (!empty($xml))
            {         
              $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
              
              foreach ($xml->KTMDetail as $row)
              {
                $extra_data = array();
                
                if (!empty($row->gpsN) && !empty($row->gpsE))
                {
                  $extra_data['map_data'] = array(); 
                  
                  $extra_data['map_data'][] = (float) $row->gpsN;
                  $extra_data['map_data'][] = (float) $row->gpsE; 
                }                
                
                if (!empty($row->openTime))
                {
                  $extra_data['hours'] = (string) $row->openTime; 
                }
                
                if (!empty($row->customerName1))
                {
                  $extra_data['name'] = (string) $row->customerName1; 
                }
                
                if (!empty($row->position))
                {
                  $extra_data['description'] = (string) $row->position; 
                }
                                
          		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
                  SET 
                    branch_id = '" . (string) $row->KTMID . "',
                    service_id = " . (int) $service_id . ",
                    country = 'ČR',
                    city = '" . (string) $row->city . "',
                    address = '" . (string) $row->street1 . "',
                    postcode = '" . (string) $row->zipCode . "',
                    extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";
    
                $this->db->query($sql);
              }
            }         
            break;
            
          case 4:
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                // CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_URL => self::SERVICE_4_XML
            ));

            $curl_response = curl_exec($curl);

            curl_close($curl);

            $xml = simplexml_load_string($curl_response);
            
            if (!empty($xml))
            {
              $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
              
              foreach ($xml->branch as $row)
              {                 
                $extra_data = array();
                
                if (!empty($row->gps))
                {
                  $extra_data['map_data'] = array(); 
                  
                  $extra_data['map_data'][] = (float) $row->gps->latitude;
                  $extra_data['map_data'][] = (float) $row->gps->longitude; 
                }                
                
                if (!empty($row->openingHours))
                {
                  $i = 0;
                  
                  $extra_data['hours'] = array();
                  
                  foreach ($row->openingHours->regular as $regular)
                  {
                    foreach ($regular as $open_day => $open_data)
                    {
                      $i++;
                                            
                      $extra_data['hours'][] = array(
                        'day' => $i,
                        'from' => (string) $open_data->hours->open,
                        'to' => (string) $open_data->hours->close,
                      );  
                    }
                  }
                }
                                
                if (!empty($row->otherInfo))
                {
                  $extra_data['description'] = (string) $row->otherInfo; 
                }
                
                if (!empty($row->partner))
                {
                  $extra_data['partner'] = (int) $row->partner; 
                }
                 
                if (!empty($row->picture))
                {
                  $extra_data['image'] = (string) $row->picture; 
                }     
   
                if (!empty($row->phone))
                {
                  $extra_data['telephone'] = (string) $row->phone; 
                }
                
                if (!empty($row->email))
                {
                  $extra_data['email'] = (string) $row->email; 
                }
                
                if (!empty($row->name))
                {
                  $extra_data['name'] = (string) $row->name; 
                }
                                                
          		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
                  SET 
                    branch_id = '" . (string) $row->id . "',
                    service_id = " . (int) $service_id . ",
                    country = '" . str_replace(array('CZE', 'SVK'), array('ČR', 'SR'), (string) $row->country) . "',
                    city = '" . (string) $row->town . "',
                    address = '" . (string) $row->street . " " . (string) $row->houseNumber . "',
                    postcode = '" . (string) $row->zip . "',
                    extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";
    
                $this->db->query($sql);
              }
            }
            break;
            
          case 5:        
            if ($this->config->get('multishipping_zasilkovna_code')) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                // CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_URL => str_replace('{code}', $this->config->get('multishipping_zasilkovna_code'), self::SERVICE_5_XML)
            ));

            $curl_response = curl_exec($curl);

            curl_close($curl);

            $xml = simplexml_load_string($curl_response);

            if (!empty($xml))
            {
              $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
              
              foreach ($xml->branches->branch as $row)
              {                          
                $extra_data = array();
                
                if (!empty($row->latitude) && !empty($row->longitude))
                {
                  $extra_data['map_data'] = array(); 
                  
                  $extra_data['map_data'][] = (float) $row->latitude;
                  $extra_data['map_data'][] = (float) $row->longitude; 
                }                
                
                if (!empty($row->opening_hours->short_html))
                {
                  $extra_data['hours'] = (string) $row->opening_hours->short_html;
                }
 
                if (!empty($row->place))
                {
                  $extra_data['name'] = (string) $row->place; 
                }
                                
                if (!empty($row->directions))
                {
                  $extra_data['description'] = (string) $row->directions; 
                }
                                 
                if (!empty($row->photos->photo->normal))
                {
                  $extra_data['image'] = (string) $row->photos->photo->normal; 
                }     
   
                if (!empty($row->phone))
                {
                  $extra_data['telephone'] = (string) $row->phone; 
                }
                
                if (!empty($row->email))
                {
                  $extra_data['email'] = (string) $row->email; 
                }
                                                                        
          		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
                  SET 
                    branch_id = '" . (string) $row->id . "',
                    service_id = " . (int) $service_id . ",
                    country = '" . str_replace(array('cz', 'sk'), array('ČR', 'SR'), (string) $row->country) . "',
                    city = '" . (string) $row->city . "',
                    address = '" . (string) $row->street . "',
                    postcode = '" . str_replace(' ', '', (string) $row->zip) . "',
                    extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";
    
                $this->db->query($sql);
              }
            }
            }
            break;
            
          case 6:
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                // CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_URL => self::SERVICE_6_XML
            ));

            $curl_response = curl_exec($curl);

            curl_close($curl);

            $xml = simplexml_load_string($curl_response);

            if (!empty($xml))
            {
              $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
              
              foreach ($xml->parcelshop as $row)
              {
                $extra_data = array();
                
                if (!empty($row->latitude) && !empty($row->longitude))
                {
                  $extra_data['map_data'] = array(); 
                  
                  $extra_data['map_data'][] = (float) $row->latitude;
                  $extra_data['map_data'][] = (float) $row->longitude; 
                }                
                
                if (!empty($row->opening_hours))
                {
                  $i = 0;
                  
                  $extra_data['hours'] = array();
                  
                  foreach ($row->opening_hours->opening as $open_data)
                  {
                    $i++;
                    
                      $extra_data['hours'][] = array(
                        'day' => $i,
                        'from' => (string) $open_data->openMorning,
                        'to' => (string) $open_data->closeAfternoon,
                      );
                  }
                }
 
                if (!empty($row->company))
                {
                  $extra_data['name'] = (string) $row->company; 
                }
   
                if (!empty($row->phone))
                {
                  $extra_data['telephone'] = (string) $row->phone; 
                }
                
                if (!empty($row->email))
                {
                  $extra_data['email'] = (string) $row->email; 
                }
                                                                                               
          		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
                  SET 
                    branch_id = '" . (string) $row->id . "',
                    service_id = " . (int) $service_id . ",
                    country = 'ČR',
                    city = '" . (string) $row->city . "',
                    address = '" . (string) $row->street . " " . (string) $row->house_number . "',
                    postcode = '" . (string) $row->postcode . "',
                    extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";
    
                $this->db->query($sql);
              }
            }
            break;
        }
      } else {
        require DIR_SYSTEM . 'library/GeisPointSoapClient.php';
        
        $geis = new GeisPointSoapClient;
        
        $destinations = json_decode($geis->searchGP('SK'));
    
        if (!empty($destinations))
        {
    			$this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id);
          
          foreach ($destinations as $destination)
          {
            $extra_data = array();

            if (!empty($destination->phone))
            {
              $extra_data['telephone'] = (string) $destination->phone; 
            }
            
            if (!empty($destination->openining_hours))
            {
              $extra_data['hours'] = (string) $destination->openining_hours; 
            }
            
            if (!empty($destination->email))
            {
              $extra_data['email'] = (string) $destination->email; 
            }
            
            if (!empty($destination->photo_url))
            {
              $extra_data['image'] = (string) $destination->photo_url; 
            }
            
            if (!empty($destination->gpsn) && !empty($destination->gpse))
            {
              $extra_data['map_data'] = array(); 
              
              $extra_data['map_data'][] = (float) $destination->gpsn;
              $extra_data['map_data'][] = (float) $destination->gpse; 
            }
            
            if (!empty($destination->note))
            {
              $extra_data['description'] = (string) $destination->note; 
            }
            
            if (!empty($destination->name))
            {
              $extra_data['name'] = (string) $destination->name; 
            }
                        
      		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
              SET 
                branch_id = '" . (string) $destination->idGP . "',
                service_id = " . (int) $service_id . ",
                country = 'SR',
                city = '" . (string) $destination->city . "',
                address = '" . (string) $destination->street . "',
                postcode = '" . (string) $destination->postcode . "',
                extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";

            $this->db->query($sql);
          }
        }

        $destinations = json_decode($geis->searchGP('CZ'));
    
        if (!empty($destinations))
        {
         
          foreach ($destinations as $destination)
          {
            $extra_data = array();

            if (!empty($destination->phone))
            {
              $extra_data['telephone'] = (string) $destination->phone; 
            }
            
            if (!empty($destination->openining_hours))
            {
              $extra_data['hours'] = (string) $destination->openining_hours; 
            }
            
            if (!empty($destination->email))
            {
              $extra_data['email'] = (string) $destination->email; 
            }
            
            if (!empty($destination->photo_url))
            {
              $extra_data['image'] = (string) $destination->photo_url; 
            }
            
            if (!empty($destination->gpsn) && !empty($destination->gpse))
            {
              $extra_data['map_data'] = array(); 
              
              $extra_data['map_data'][] = (float) $destination->gpsn;
              $extra_data['map_data'][] = (float) $destination->gpse; 
            }
            
            if (!empty($destination->note))
            {
              $extra_data['description'] = (string) $destination->note; 
            }
            
            if (!empty($destination->name))
            {
              $extra_data['name'] = (string) $destination->name; 
            }
                        
      		  $sql = "INSERT INTO " . DB_PREFIX . "multishipping_destination 
              SET 
                branch_id = '" . (string) $destination->idGP . "',
                service_id = " . (int) $service_id . ",
                country = 'ČR',
                city = '" . (string) $destination->city . "',
                address = '" . (string) $destination->street . "',
                postcode = '" . (string) $destination->postcode . "',
                extra_data = '" . $this->db->escape(serialize($extra_data)) . "'";

            $this->db->query($sql);
          }
        }
      }
      
      $service_id++;
    }
    
    $this->response->redirect(HTTP_SERVER . 'admin/index.php?route=extension/shipping/multishipping&token=' . $this->request->get['token']);
  }
  
  public function search_service_2() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_city = (string) $this->request->get['city'];
    $filter_postcode = (string) $this->request->get['postcode'];
    $service_id = (int) $this->request->get['service_id'];
    
    if (!empty($filter_city) && !empty($filter_postcode))
    {
      $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND LOWER(city) LIKE '" . $this->db->escape(strtolower($filter_city)) . "%' AND postcode = '" . $this->db->escape($filter_postcode) . "' ORDER BY postcode ASC");
    } else if (!empty($filter_city))
    {
      $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND LOWER(city) LIKE '" . $this->db->escape(strtolower($filter_city)) . "%' ORDER BY postcode ASC");
    } else if (!empty($filter_postcode))
    {
      $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND postcode = '" . $this->db->escape($filter_postcode) . "' ORDER BY postcode ASC");
    }

    foreach ($sql->rows as $row)
    {           
      $hours = array();
      $extra_data = unserialize($row['extra_data']);
            
      if (!empty($extra_data['hours']))
      {
        foreach ($extra_data['hours'] as $opening_day)
        {
          $hours[] = array(
            'text' => $this->language->get('text_day_' . $opening_day['day']),
            'from' => $opening_day['from'],
            'to' => $opening_day['to']
          );
        }
      }
            
      $json[] = array(
        'branch_id' => $row['branch_id'],
        'city' => $row['city'],
  			'address' => $row['address'],
        'legend_1' => (!empty($extra_data['cashmachine'])) ? true : false,
        'legend_2' => (!empty($extra_data['complete_servis'])) ? true : false,
        'legend_3' => (!empty($extra_data['parking'])) ? true : false,
        'legend_4' => (!empty($extra_data['long_open'])) ? true : false,
        'legend_5' => (!empty($extra_data['weekend'])) ? true : false,
        'hours' => $hours,
      );
    } 
    
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));  
  }

  public function search_service_3() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_branch_id = (string) $this->request->get['branch_id'];
    $service_id = (int) $this->request->get['service_id'];
    
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($filter_branch_id) . "'");
    
    if (!empty($sql->row))
    {
      $row = $sql->row;
      
      $extra_data = unserialize($row['extra_data']);
      
      $json['name'] = $extra_data['name'];
      $json['address'] = $row['address'] . '<br />' . $row['postcode'] . ' ' . $row['city'];
      $json['hours'] = $extra_data['hours'];
      $json['lat'] = $extra_data['map_data'][0];         
      $json['lon'] = $extra_data['map_data'][1];
      
  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json));
    }  
  }

  public function search_service_4() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_branch_id = (string) $this->request->get['branch_id'];
    $service_id = (int) $this->request->get['service_id'];
    
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($filter_branch_id) . "'");
    
    if (!empty($sql->row))
    {
      $row = $sql->row;
      
      $extra_data = unserialize($row['extra_data']);

      $json['hours'] = array();
      $json['name'] = $extra_data['name'];
      $json['image'] = (!empty($extra_data['image'])) ? $extra_data['image'] : '';
      $json['address'] = $row['address'] . '<br />' . $row['postcode'] . ' ' . $row['city'];
      $json['email'] = (!empty($extra_data['email'])) ? $extra_data['email'] : '';
      $json['telephone'] = (!empty($extra_data['telephone'])) ? $extra_data['telephone'] : ''; 
      $json['lat'] = $extra_data['map_data'][0];         
      $json['lon'] = $extra_data['map_data'][1];
      
      if (!empty($extra_data['hours']))
      {
        foreach ($extra_data['hours'] as $opening_day)
        {
          $json['hours'][] = array(
            'text' => $this->language->get('text_day_' . $opening_day['day']),
            'from' => $opening_day['from'],
            'to' => $opening_day['to']
          );
        }
      } 
      
  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json));
    }  
  }

  public function search_service_5() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_branch_id = (string) $this->request->get['branch_id'];
    $service_id = (int) $this->request->get['service_id'];
    
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($filter_branch_id) . "'");
    
    if (!empty($sql->row))
    {
      $row = $sql->row;
      
      $extra_data = unserialize($row['extra_data']);
      
      $json['name'] = $extra_data['name'];
      $json['image'] = $extra_data['image'];
      $json['address'] = $row['address'] . '<br />' . $row['postcode'] . ' ' . $row['city'];
      $json['email'] = $extra_data['email'];
      $json['telephone'] = $extra_data['telephone']; 
      $json['hours'] = $extra_data['hours'];
      $json['lat'] = $extra_data['map_data'][0];         
      $json['lon'] = $extra_data['map_data'][1];
      
  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json));
    }  
  }

  public function search_service_6() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_branch_id = (string) $this->request->get['branch_id'];
    $service_id = (int) $this->request->get['service_id'];
    
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($filter_branch_id) . "'");
    
    if (!empty($sql->row))
    {
      $row = $sql->row;
      
      $extra_data = unserialize($row['extra_data']);

      $json['hours'] = array();
      $json['name'] = $extra_data['name'];
      $json['address'] = $row['address'] . '<br />' . $row['postcode'] . ' ' . $row['city'];
      $json['telephone'] = $extra_data['telephone']; 
      $json['lat'] = $extra_data['map_data'][0];         
      $json['lon'] = $extra_data['map_data'][1];
      
      if (!empty($extra_data['hours']))
      {
        foreach ($extra_data['hours'] as $opening_day)
        {
          $json['hours'][] = array(
            'text' => $this->language->get('text_day_' . $opening_day['day']),
            'from' => $opening_day['from'],
            'to' => $opening_day['to']
          );
        }
      } 
      
  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json));
    }  
  }

  public function search_service_7() {
    $this->language->load('extension/shipping/multishipping');
    
    $json = array();
    
    $filter_branch_id = (string) $this->request->get['branch_id'];
    $service_id = (int) $this->request->get['service_id'];
    
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($filter_branch_id) . "'");
    
    if (!empty($sql->row))
    {
      $row = $sql->row;
      
      $extra_data = unserialize($row['extra_data']);
      
      $json['name'] = $extra_data['name'];
//      $json['image'] = $extra_data['image'];
      $json['address'] = $row['address'] . '<br />' . $row['postcode'] . ' ' . $row['city'];
      $json['email'] = $extra_data['email'];
      $json['telephone'] = $extra_data['telephone']; 
//      $json['hours'] = $extra_data['hours'];
      $json['lat'] = $extra_data['map_data'][0];         
      $json['lon'] = $extra_data['map_data'][1];
      
  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json));
    }  
  }
  
  public function select_destination() {
    $json = array();
    
    $this->load->model('extension/shipping/multishipping');
    
    $service_id = (int) $this->request->get['service_id'];
    $branch_id = (string) $this->request->get['branch_id'];
    
    $multishipping_info = $this->model_extension_shipping_multishipping->getBranch($service_id, $branch_id);
    
    if ($multishipping_info)
    {
      switch ($service_id)
      {
        case 2:
          $json['name'] = $multishipping_info['city'];
          $json['address'] = $multishipping_info['address'];
          break;

        case 3:
          $extra_data = unserialize($multishipping_info['extra_data']);
          
          $json['name'] = $extra_data['name'];
          $json['address'] = $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
          break;

        case 4:
          $extra_data = unserialize($multishipping_info['extra_data']);
          
          $json['name'] = $extra_data['name'];
          $json['address'] = $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
          break;
     
        case 5:
          $extra_data = unserialize($multishipping_info['extra_data']);
          
          $json['name'] = $extra_data['name'];
          $json['address'] = $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
          break;
          
        case 6:
          $extra_data = unserialize($multishipping_info['extra_data']);
          
          $json['name'] = $extra_data['name'];
          $json['address'] = $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
          break;
          
        case 7:
          $extra_data = unserialize($multishipping_info['extra_data']);
          
          $json['name'] = $extra_data['name'];
          $json['address'] = $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
          break;
      }

      $this->session->data['multishipping']['service_' . $service_id] = $branch_id;

  		$this->response->addHeader('Content-Type: application/json');
  		$this->response->setOutput(json_encode($json)); 
    } 
  }
  
  public function autocomplete() {
    $json = array();
    
    $filter_what_ok = array('city', 'postcode', 'address');
    
    $filter_value = (string) $this->request->get['filter_value'];
    $filter_what = (string) $this->request->get['filter_what'];
    $service_id = (int) $this->request->get['service_id'];
    
    if (!in_array($filter_what, $filter_what_ok))
    {
      exit;
    }
              
    if (strlen($filter_value) > 1 || true)
    {
      $countries_id = array();
                
      switch ($service_id)
      {
        case 3:
          $country = $this->config->get('multishipping_ppl_country');
          
          if ($country == 1)
          {
            if (!empty($this->session->data['shipping_address']['country_id']))
            {
              $countries_id[] = (int) $this->session->data['shipping_address']['country_id'];
            }    
          } else if ($country == 2) 
          {
            $countries_id = (array) $this->config->get('multishipping_ppl_countries');
          }
          break;
          
        case 4:
          $country = $this->config->get('multishipping_heurekapoint_country');
          
          if ($country == 1)
          {
            if (!empty($this->session->data['shipping_address']['country_id']))
            {
              $countries_id[] = (int) $this->session->data['shipping_address']['country_id'];
            }    
          } else if ($country == 2) 
          {
            $countries_id = (array) $this->config->get('multishipping_heurekapoint_countries');
          }
          break;  
          
        case 5:
          $country = $this->config->get('multishipping_zasilkovna_country');
          
          if ($country == 1)
          {
            if (!empty($this->session->data['shipping_address']['country_id']))
            {
              $countries_id[] = (int) $this->session->data['shipping_address']['country_id'];
            }    
          } else if ($country == 2) 
          {
            $countries_id = (array) $this->config->get('multishipping_zasilkovna_countries');
          }
          break; 
          
        case 6:
          $country = $this->config->get('multishipping_dpd_country');
          
          if ($country == 1)
          {
            if (!empty($this->session->data['shipping_address']['country_id']))
            {
              $countries_id[] = (int) $this->session->data['shipping_address']['country_id'];
            }    
          } else if ($country == 2) 
          {
            $countries_id = (array) $this->config->get('multishipping_dpd_countries');
          }
          break; 
          
        case 7:
          $country = $this->config->get('multishipping_geis_country');
          
          if ($country == 1)
          {
            if (!empty($this->session->data['shipping_address']['country_id']))
            {
              $countries_id[] = (int) $this->session->data['shipping_address']['country_id'];
            }    
          } else if ($country == 2) 
          {
            $countries_id = (array) $this->config->get('multishipping_geis_countries');
          }
          break; 
      }
                
      if (!empty($countries_id))
      {
        foreach ($countries_id as $country_key => $country_id)
        {
          $countries_id[$country_key] = str_replace(array_keys($this->countries), array_values($this->countries), $country_id);
        }
        
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND country IN ('" . implode('\', \'', $countries_id) . "') AND LOWER(" .$filter_what . ") LIKE '%" . $this->db->escape(strtolower($filter_value)) . "%' ORDER BY postcode ASC");
      } else {
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND LOWER(" .$filter_what . ") LIKE '%" . $this->db->escape(strtolower($filter_value)) . "%' ORDER BY postcode ASC");
      }
                
      foreach ($sql->rows as $row)
      {
        $extra_data = unserialize($row['extra_data']);
        
        switch ($service_id)
        {
          case 2:
            $json[] = array(
      				'postcode' => $row['postcode'],
      				'address' => $row['address'],      
      				'city' => $row['city']
            );          
            break; 

          case 3:            
            $json[] = array(
              'branch_id' => $row['branch_id'],
      				'postcode' => $row['postcode'],
      				'address' => $row['address'] . ', ' . $row['postcode'] . ' ' . $row['city'],      
      				'city' => $extra_data['name']
            );          
            break;

          case 4:            
            $json[] = array(
              'branch_id' => $row['branch_id'],
      				'postcode' => $row['postcode'],
      				'address' => $row['address'] . ', ' . $row['postcode'] . ' ' . $row['city'],      
      				'city' => $extra_data['name']
            );          
            break;

          case 5:
            $json[] = array(
              'branch_id' => $row['branch_id'],
      				'postcode' => $row['postcode'],
      				'address' => $row['address'] . ', ' . $row['postcode'] . ' ' . $row['city'],      
      				'city' => $extra_data['name']
            );          
            break;

          case 6:
            $json[] = array(
              'branch_id' => $row['branch_id'],
      				'postcode' => $row['postcode'],
      				'address' => $row['address'] . ', ' . $row['postcode'] . ' ' . $row['city'],      
      				'city' => $extra_data['name']
            );          
            break;
            
          case 7:
            $json[] = array(
              'branch_id' => $row['branch_id'],
      				'postcode' => $row['postcode'],
      				'address' => $row['address'] . ', ' . $row['postcode'] . ' ' . $row['city'],      
      				'city' => $extra_data['name']
            );          
            break; 
        }
      } 
    }                                          
    
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));    
  }
  
	public function getModal() {
		$this->load->language('extension/shipping/multishipping');
		$this->load->model('extension/shipping/multishipping');
		$this->load->model('tool/image');
    
		$data['heading_title'] = $this->language->get('heading_title');

    $multishipping_id = (int) $this->request->get['multishipping_id'];

    $multishipping_info = $this->model_extension_shipping_multishipping->getMultishipping($multishipping_id);

    if (!empty($multishipping_info))
    {
      $service = 'service_' . $multishipping_info['service_id'];
              
      $data = array_merge($data, $this->$service($multishipping_info));
  
      $data['shipping_city'] = (!empty($this->session->data['shipping_address']['city'])) ? $this->session->data['shipping_address']['city'] : '';
      $data['shipping_postcode'] = (!empty($this->session->data['shipping_address']['postcode'])) ? $this->session->data['shipping_address']['postcode'] : '';
  
	$this->response->setOutput($this->load->view('extension/shipping/multishipping_modal/modal_' . $multishipping_info['service_id'], $data));
    }
	}
  
  public function service_2($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_2');
    $data['text_city'] = $this->language->get('text_city_2');
    $data['text_postcode'] = $this->language->get('text_postcode_2');
    $data['text_search'] = $this->language->get('text_search_2');
    $data['text_search_results'] = $this->language->get('text_search_results_2');
    $data['text_no_results'] = $this->language->get('text_no_results');
    $data['column_name'] = $this->language->get('column_name_2');
    $data['column_address'] = $this->language->get('column_address_2');
    $data['column_information'] = $this->language->get('column_information_2');
    $data['text_legend'] = $this->language->get('text_legend_2');
    $data['text_legend_1'] = $this->language->get('text_legend_1_2');
    $data['text_legend_2'] = $this->language->get('text_legend_2_2');
    $data['text_legend_3'] = $this->language->get('text_legend_3_2');
    $data['text_legend_4'] = $this->language->get('text_legend_4_2');
    $data['text_legend_5'] = $this->language->get('text_legend_5_2');
    $data['text_legend_6'] = $this->language->get('text_legend_6_2');
    $data['text_open_hours'] = $this->language->get('text_open_hours_2');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    
		if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/ceska_posta.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
		if (file_exists(DIR_IMAGE . 'multishipping/balik_na_postu.jpg')) {
		  $data['image_2'] = $this->model_tool_image->resize('multishipping/balik_na_postu.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_2'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
		if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_1.png')) {      
		  $data['image_legend_1'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_1.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}
    
    if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_2.png')) {      
		  $data['image_legend_2'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_2.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_2'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}
    
    if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_3.png')) {      
		  $data['image_legend_3'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_3.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_3'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}
    
    if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_4.png')) {      
		  $data['image_legend_4'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_4.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_4'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}
    
    if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_5.png')) {      
		  $data['image_legend_5'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_5.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_5'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}
    
    if (file_exists(DIR_IMAGE . 'multishipping/ceska_posta/icon_6.png')) {      
		  $data['image_legend_6'] = $this->model_tool_image->resize('multishipping/ceska_posta/icon_6.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		} else {
			$data['image_legend_6'] = $this->model_tool_image->resize('placeholder.png', self::ICON_POST_WIDTH, self::ICON_POST_HEIGHT);
		}

    return $data;
  }

  public function service_3($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_3');
    $data['text_city'] = $this->language->get('text_city_3');
    $data['text_search'] = $this->language->get('text_search_3');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    $data['text_destination_detail'] = $this->language->get('text_destination_detail');
    
		if (file_exists(DIR_IMAGE . 'multishipping/ppl.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/ppl.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
		if (file_exists(DIR_IMAGE . 'multishipping/ppl_parcelshop.jpg')) {      
		  $data['image_2'] = $this->model_tool_image->resize('multishipping/ppl_parcelshop.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_2'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
    return $data;
  }

  public function service_4($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_4');
    $data['text_city'] = $this->language->get('text_city_4');
    $data['text_search'] = $this->language->get('text_search_4');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    $data['text_destination_detail'] = $this->language->get('text_destination_detail');
    
		if (file_exists(DIR_IMAGE . 'multishipping/heurekapoint.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/heurekapoint.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
    return $data;
  }

  public function service_5($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_5');
    $data['text_city'] = $this->language->get('text_city_5');
    $data['text_search'] = $this->language->get('text_search_5');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    $data['text_destination_detail'] = $this->language->get('text_destination_detail');
    
		if (file_exists(DIR_IMAGE . 'multishipping/zasilkovna.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/zasilkovna.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
    return $data;
  }

  public function service_6($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_6');
    $data['text_city'] = $this->language->get('text_city_6');
    $data['text_search'] = $this->language->get('text_search_6');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    $data['text_destination_detail'] = $this->language->get('text_destination_detail');
    
		if (file_exists(DIR_IMAGE . 'multishipping/dpd.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/dpd.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
		if (file_exists(DIR_IMAGE . 'multishipping/dpd_parcelshop.jpg')) {
		  $data['image_2'] = $this->model_tool_image->resize('multishipping/dpd_parcelshop.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_2'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}

    return $data;
  }

  public function service_7($multishipping_info)
  {
    $data['title'] = $multishipping_info['name'];
    
    $data['text_loading'] = $this->language->get('text_loading');
    $data['text_help'] = $this->language->get('text_help_7');
    $data['text_city'] = $this->language->get('text_city_7');
    $data['text_search'] = $this->language->get('text_search_7');
    $data['text_select_destination'] = $this->language->get('text_select_destination');
    $data['text_close'] = $this->language->get('text_close');
    $data['text_destination_detail'] = $this->language->get('text_destination_detail');
    
		if (file_exists(DIR_IMAGE . 'multishipping/geis.jpg')) {      
		  $data['image_1'] = $this->model_tool_image->resize('multishipping/geis.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_1'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}
    
		if (file_exists(DIR_IMAGE . 'multishipping/geis_point.jpg')) {
		  $data['image_2'] = $this->model_tool_image->resize('multishipping/geis_point.jpg', self::ICON_WIDTH, self::ICON_HEIGHT);
		} else {
			$data['image_2'] = $this->model_tool_image->resize('placeholder.png', self::ICON_WIDTH, self::ICON_HEIGHT);
		}

    return $data;
  }
}
