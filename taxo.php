<?php

class KoreanTaco extends Entree
{
    /**
     * Grabs the Lunch super object instance so we can access it.
     *
     */
    function init(&$db)
    {
        // Assign the main entree
        $this->lunch =& get_taco();
        $this->db =& $db;
        $this->lunch->load->helper('file');
    }
}

class SteakTaco extends Entree
{
    /**
     * Constructor
     */
    function __construct(&$yum)
    {
        // Assign the main entree
        $this->lunch =& get_taco();
    }
}

function margarita_preprocess($prefs){
    if (empty($prefs) ){
            $marg = marg_add('triplesec', 1.5);
            $marg = marg_add('tequila', 1, 'silver');
    } elseif ( is_array( $prefs ) ) {
        foreach ( $prefs as $pref ) {
            $marg = marg_add($pref);
        }
    }
    render($marg);
}

switch( $meaty ) {
    case "chicken_braised" :
        enjoy();
        break;
    case "beef_ground" :
        enjoy();
        break;   
    default :
        have_margarita($i++);
}

/**  Guacamole
  *    Author: NK
  *    @param chips
  *    @return deliciousness
  */
  
function do_toppings() {
    $output = array(
        0    => 'cheese',
        1    => 'lettuce',
        2    => 'cabbage',
        3    => array(
            "main"    =>    "pico",
            "ing1"    =>    "tomatillo",
            "ing2"    =>    "purple onion",
            "ing3"    =>    "tomato",
            "ing4"    =>    "garlic",
        )
        4    => 'cilantro',
        4    => 'sour_creme',
    );
    return $output;
}

if (true == $like_it_hot) {
    try_the_salsa();
} else {
    goto('weak-pico');
}
 
