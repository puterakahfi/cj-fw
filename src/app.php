<?php

// cj-fw/src/app.php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;


class LeapYearController
{
    public function indexAction(Request $request)
    {
        if (is_leap_year($request->attributes->get('year'))) {
            return new Response('Yep, this is a leap year!');
        }
 
        return new Response('Nope, this is not a leap year.');
    }
}
 

function is_leap_year($year = null)
{
    if(null === $year){
      $year = date('Y');
    }

   return 0 == $year % 400 || ( 0 == $year % 4 && 0 != $year %100);
}

$routes = new Routing\RouteCollection();
$routes->add('hello', new ROuting\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => 'render_template',
))); 


$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'LeapYearController::indexAction',
)));
 


$routes->add('bye', new Routing\Route('/bye'));

return $routes;
