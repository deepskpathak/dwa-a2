<?php
/**
 * Class to operate on the form submission and return a result
 */

namespace DWA;


class BillSplitter
{
    /*
    * Properties
    */

    /*
    * Magic Method / Constructor
     * Didn't use explicitly as both members are more-or-less public
     * Could have used the way it has been done in Form.php but thi sis a reasonably small set of problem to solve.
     * Also, I am using same class to do various stuff. Ideally classes for validation and computation should be different
    */

/*    public function __construct() {



    }*/

    /*
     * Method to validate the form values
     * @params : sanitized POST data values
     * @return : validation = array with a status value and a message
     * */

    public function validate ($post) {
        $validation = array('status'=>1);
        if(trim($post['numberToSplit']) == "" || trim($post['amountToSplit']) == ""){
            $validation['status'] = 0;
            $validation['message'] = array_search('', $post)." cannot be empty";
        }
        if(!\is_numeric(trim($post['amountToSplit']))){
            $validation['status'] = 0;
            $validation['message'] = "Invalid Input in Amount. Please enter only Numeric values";
        }
        if(\is_nan(trim($post['numberToSplit']))){
            $validation['status'] = 0;
            $validation['message'] = "Invalid Input in Number to split. Please enter only Numeric values";
        }
        return $validation;
    }
    /*
     * Method to compute the bill and round up
     * @params : sanitized POST data values
     * @return : computed and (optionally) rounded up number
     * */
    public function calculate ($post) {
        $compute = $post['amountToSplit'] / $post['numberToSplit'];
        if(isset($post['roundUp']))
            $compute = round($compute);
        return $compute;
    }

}