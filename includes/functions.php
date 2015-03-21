<?php

function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            // trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            trigger_error($handle->errorInfo(), E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = array())
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);

            // render header
         //   require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
         //   require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }


    function apologize ($apology, $title = "")
    {
        render("apology.php", array("title" => $title, "apology" => $apology));
    }

function getDistrict ($district)
{
	switch ($district)
	{
		case 'ahmedabad': return 1; break;
		case 'amreli': return 2; break;
		case 'anand': return 3; break;
		case 'aravalli': return 4; break;
		case 'banaskantha': return 5; break;
		case 'bharuch': return 6; break;
		case 'bhavnagar': return 7; break;
		case 'botad': return 8; break;
		case 'chhotaudaipur': return 9; break;
		case 'dahod': return 10; break;
		case 'dang': return 11; break;
		case 'devbhoomidwarka': return 12; break;
		case 'gandhinagar': return 13; break;
		case 'girsomnath': return 14; break;
		case 'jamnagar': return 15; break;
		case 'junagadh': return 16; break;
		case 'kutch': return 17; break;
		case 'kheda': return 18; break;
		case 'mahisagar': return 19; break;
		case 'mehsana': return 20; break;
		case 'morbi': return 21; break;
		case 'narmada': return 22; break;
		case 'navsari': return 23; break;
		case 'panchmahal': return 24; break;
		case 'patan': return 25; break;
		case 'porbandar': return 26; break;
		case 'rajkot': return 27; break;
		case 'sabarkantha': return 28; break;
		case 'surat': return 29; break;
		case 'surendranagar': return 30; break;
		case 'tapi': return 31; break;
		case 'vadodara': return 32; break;
		case 'valsad': return 33; break;
		default: return 0; break;		
	}
}

$districtsArray = array("none", "ahmedabad", "amreli", "anand", "aravalli", "banaskantha", "bharuch", "bhavnagar", "botad", "chhotaudaipur", "dahod", "dang", "devbhoomidwarka", "gandhinagar", "girsomnath", "jamnagar", "junagadh", "kutch", "kheda", "mahisagar", "mehsana", "morbi", "narmada", "navsari", "panchmahal", "patan", "porbandar", "rajkot", "sabarkantha", "surat", "surendranagar", "tapi", "vadodara", "valsad");


?>