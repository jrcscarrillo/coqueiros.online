<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class VehicleController extends ControllerBase
{
    public function initialize() {
        $this->tag->setTitle('Transporte');
        parent::initialize();
    }

    public function indexAction() {
        $this->session->conditions = null;
        $this->view->form = new VehicleForm;
    }

    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Vehicle', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "ListID";

        $vehicle = Vehicle::find($parameters);
        if (count($vehicle) == 0) {
            $this->flash->notice("The search did not find any vehicle");

            $this->dispatcher->forward([
                "controller" => "vehicle",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $vehicle,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a vehicle
     *
     * @param string $ListID
     */
    public function editAction($ListID)
    {
        if (!$this->request->isPost()) {

            $vehicle = Vehicle::findFirstByListID($ListID);
            if (!$vehicle) {
                $this->flash->error("vehicle was not found");

                $this->dispatcher->forward([
                    'controller' => "vehicle",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->ListID = $vehicle->getListid();

            $this->tag->setDefault("ListID", $vehicle->getListid());
            $this->tag->setDefault("TimeCreated", $vehicle->getTimecreated());
            $this->tag->setDefault("TimeModified", $vehicle->getTimemodified());
            $this->tag->setDefault("EditSequence", $vehicle->getEditsequence());
            $this->tag->setDefault("Name", $vehicle->getName());
            $this->tag->setDefault("IsActive", $vehicle->getIsactive());
            $this->tag->setDefault("Description", $vehicle->getDescription());
            $this->tag->setDefault("Status", $vehicle->getStatus());
            
        }
    }

    /**
     * Creates a new vehicle
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'index'
            ]);

            return;
        }

        $vehicle = new Vehicle();
        $vehicle->setListid($this->request->getPost("ListID"));
        $vehicle->setTimecreated($this->request->getPost("TimeCreated"));
        $vehicle->setTimemodified($this->request->getPost("TimeModified"));
        $vehicle->setEditsequence($this->request->getPost("EditSequence"));
        $vehicle->setName($this->request->getPost("Name"));
        $vehicle->setIsactive($this->request->getPost("IsActive"));
        $vehicle->setDescription($this->request->getPost("Description"));
        $vehicle->setStatus($this->request->getPost("Status"));
        

        if (!$vehicle->save()) {
            foreach ($vehicle->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("vehicle was created successfully");

        $this->dispatcher->forward([
            'controller' => "vehicle",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a vehicle edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'index'
            ]);

            return;
        }

        $ListID = $this->request->getPost("ListID");
        $vehicle = Vehicle::findFirstByListID($ListID);

        if (!$vehicle) {
            $this->flash->error("vehicle does not exist " . $ListID);

            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'index'
            ]);

            return;
        }

        $vehicle->setListid($this->request->getPost("ListID"));
        $vehicle->setTimecreated($this->request->getPost("TimeCreated"));
        $vehicle->setTimemodified($this->request->getPost("TimeModified"));
        $vehicle->setEditsequence($this->request->getPost("EditSequence"));
        $vehicle->setName($this->request->getPost("Name"));
        $vehicle->setIsactive($this->request->getPost("IsActive"));
        $vehicle->setDescription($this->request->getPost("Description"));
        $vehicle->setStatus($this->request->getPost("Status"));
        

        if (!$vehicle->save()) {

            foreach ($vehicle->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'edit',
                'params' => [$vehicle->getListid()]
            ]);

            return;
        }

        $this->flash->success("vehicle was updated successfully");

        $this->dispatcher->forward([
            'controller' => "vehicle",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a vehicle
     *
     * @param string $ListID
     */
    public function deleteAction($ListID)
    {
        $vehicle = Vehicle::findFirstByListID($ListID);
        if (!$vehicle) {
            $this->flash->error("vehicle was not found");

            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'index'
            ]);

            return;
        }

        if (!$vehicle->delete()) {

            foreach ($vehicle->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "vehicle",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("vehicle was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "vehicle",
            'action' => "index"
        ]);
    }

}
