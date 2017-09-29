<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class EmpledosController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for empledos
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Empledos', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $empledos = Empledos::find($parameters);
        if (count($empledos) == 0) {
            $this->flash->notice("The search did not find any empledos");

            $this->dispatcher->forward([
                "controller" => "empledos",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $empledos,
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
     * Edits a empledo
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $empledo = Empledos::findFirstByid($id);
            if (!$empledo) {
                $this->flash->error("empledo was not found");

                $this->dispatcher->forward([
                    'controller' => "empledos",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $empledo->id;

            $this->tag->setDefault("id", $empledo->getId());
            $this->tag->setDefault("huella", $empledo->getHuella());
            $this->tag->setDefault("nombre", $empledo->getNombre());
            $this->tag->setDefault("puesto", $empledo->getPuesto());
            $this->tag->setDefault("domicilio", $empledo->getDomicilio());
            $this->tag->setDefault("telefono", $empledo->getTelefono());
            $this->tag->setDefault("fechadeingreso", $empledo->getFechadeingreso());
            $this->tag->setDefault("foto", $empledo->getFoto());
            
        }
    }

    /**
     * Creates a new empledo
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'index'
            ]);

            return;
        }

        $empledo = new Empledos();
        $empledo->setId($this->request->getPost("id"));
        $empledo->setHuella($this->request->getPost("huella"));
        $empledo->setNombre($this->request->getPost("nombre"));
        $empledo->setPuesto($this->request->getPost("puesto"));
        $empledo->setDomicilio($this->request->getPost("domicilio"));
        $empledo->setTelefono($this->request->getPost("telefono"));
        $empledo->setFechadeingreso($this->request->getPost("fechadeingreso"));
        $empledo->setFoto($this->request->getPost("foto"));
        

        if (!$empledo->save()) {
            foreach ($empledo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("empledo was created successfully");

        $this->dispatcher->forward([
            'controller' => "empledos",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a empledo edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $empledo = Empledos::findFirstByid($id);

        if (!$empledo) {
            $this->flash->error("empledo does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'index'
            ]);

            return;
        }

        $empledo->setId($this->request->getPost("id"));
        $empledo->setHuella($this->request->getPost("huella"));
        $empledo->setNombre($this->request->getPost("nombre"));
        $empledo->setPuesto($this->request->getPost("puesto"));
        $empledo->setDomicilio($this->request->getPost("domicilio"));
        $empledo->setTelefono($this->request->getPost("telefono"));
        $empledo->setFechadeingreso($this->request->getPost("fechadeingreso"));
        $empledo->setFoto($this->request->getPost("foto"));
        

        if (!$empledo->save()) {

            foreach ($empledo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'edit',
                'params' => [$empledo->id]
            ]);

            return;
        }

        $this->flash->success("empledo was updated successfully");

        $this->dispatcher->forward([
            'controller' => "empledos",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a empledo
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $empledo = Empledos::findFirstByid($id);
        if (!$empledo) {
            $this->flash->error("Empleado Borrado");

            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'index'
            ]);

            return;
        }

        if (!$empledo->delete()) {

            foreach ($empledo->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "empledos",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("empledo was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "empledos",
            'action' => "index"
        ]);
    }

}
