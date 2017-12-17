<?php

class homepageController extends http\controller
{
    public static function show()
        {
	        $templateData['site_name'] = 'WSD Project';
		        self::getTemplate('homepage', $templateData);
			    }
			        public static function create()
				    {
				            print_r($_POST);
					        }
						}
						?>
