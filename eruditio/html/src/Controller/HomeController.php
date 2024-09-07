<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use App\Model\Table\HouseTable;
class HomeController extends AppController
{

    public function index(){
        return $this->render('home');
    }

    public function getAll(){
        $housesTable = $this->fetchTable('House');
        $houses = $housesTable->find('all')->toArray();  // Find all users
        $h = [];
        foreach($houses as $house){
            $h[] = $house->toArray();
        }
        // Convert the query result to an array
        $this->set([
            'houses' => $houses,      // The array you want to return
            '_serialize' => ['houses']  // Tells CakePHP to serialize 'users' to JSON
        ]);
        // Ensure the response type is JSON
        return $this->response->withType("application/json")->withStringBody(json_encode(['data'=>$h]));
    }


}