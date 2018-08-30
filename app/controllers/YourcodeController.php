<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class YourcodeController extends ControllerBase {

    public function initialize() {
        $this->tag->setTitle('YourCode');
        parent::initialize();
    }

    public function indexAction() {
        $this->session->conditions = null;
        $this->view->form = new YourCodeForm;
        $usuario = $this->session->get('auth', 'id');
        $this->tag->setDefault('userId', $usuario['id']);
    }

    public function searchAction() {
        $numberPage = 1;

        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Yourcode", $this->request->getPost());
            $this->persistent->searchParams = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }
        $parameters = array();
        if ($this->persistent->searchParams) {
            $parameters = $this->persistent->searchParams;
        }
        $misCodigos = Yourcode::find($parameters);
        if (count($misCodigos) == 0) {
            $this->flash->notice("The search did not find any snippet code in your account");
            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "index",
                  ]
            );
        }

        $paginator = new Paginator(array(
           "data" => $misCodigos,
           "limit" => 10,
           "page" => $numberPage
        ));

        $this->view->page = $paginator->getPaginate();
        $this->view->companies = $misCodigos;
    }

    public function newAction() {
        $this->view->form = new YourcodeForm(null, array('edit' => true));
    }

    public function editAction($id) {

        if (!$this->request->isPost()) {

            $codigo = Yourcode::findFirstById($id);
            if (!$codigo) {
                $this->flash->error("Snippet Code was not found");

                return $this->dispatcher->forward(
                      [
                         "controller" => "yourcode",
                         "action" => "index",
                      ]
                );
            }

            $this->view->form = new YourcodeForm($codigo, array('edit' => true));
        }
    }

    public function createAction() {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "index",
                  ]
            );
        }

        $form = new YourcodeForm;
        $codigo = new Yourcode();

        $data = $this->request->getPost();
        if (!$form->isValid($data, $codigo)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "new",
                  ]
            );
        }

        if ($codigo->save() == false) {
            foreach ($codigo->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "new",
                  ]
            );
        }

        $form->clear();

        $this->flash->success("A new snippet coded was added successfully to your account");

        return $this->dispatcher->forward(
              [
                 "controller" => "yourcode",
                 "action" => "index",
              ]
        );
    }

    /**
     * Saves current company in screen
     *
     * @param string $id
     */
    public function saveAction() {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "index",
                  ]
            );
        }

        $id = $this->request->getPost("id", "int");
        $codigo = Yourcode::findFirstById($id);
        if (!$codigo) {
            $this->flash->error("This snippet code does not exist");

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "index",
                  ]
            );
        }

        $form = new YourcodeForm;

        $data = $this->request->getPost();
        if (!$form->isValid($data, $company)) {
            foreach ($form->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "new",
                  ]
            );
        }

        if ($codigo->save() == false) {
            foreach ($company->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "new",
                  ]
            );
        }

        $form->clear();

        $this->flash->success("Your snippet code was updated successfully");

        return $this->dispatcher->forward(
              [
                 "controller" => "yourcode",
                 "action" => "index",
              ]
        );
    }

    public function deleteAction($id) {

        $codigo = Yourcode::findFirstById($id);
        if (!$codigo) {
            $this->flash->error("This snippet code was not found");

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "index",
                  ]
            );
        }

        if (!$codigo->delete()) {
            foreach ($codigo->getMessages() as $message) {
                $this->flash->error($message);
            }

            return $this->dispatcher->forward(
                  [
                     "controller" => "yourcode",
                     "action" => "search",
                  ]
            );
        }

        $this->flash->success("This snippet code was deleted from your account");

        return $this->dispatcher->forward(
              [
                 "controller" => "yourcode",
                 "action" => "index",
              ]
        );
    }

}
