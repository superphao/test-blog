<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    //var $layout = 'admin';
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout']);
        
    }
    
    public function index()
    {
        $this->viewBuilder()->setLayout('admin_1');
        $users = $this->paginate($this->Users);
        
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        $user = $this->Users->get($id, [
            'contain' => ['Articles']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Lưu thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Tài khoản chưa được lưu.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Lưu thành công.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Tài khoản chưa được lưu.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Xóa thành công.'));
        } else {
            $this->Flash->error(__('Không thể xóa tài khoản.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        //set layout
        $this->viewBuilder()->setLayout('admin');
        if($this->Auth->user('email'))
        {
            // user already login
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Tên đăng nhập hoặc mật khẩu không đúng.');
        }
    }
    public function logout()
    {
        $this->Flash->success('Bạn đã đăng xuất.');
        return $this->redirect($this->Auth->logout());
    }
    
    public function register()
    {
        $this->viewBuilder()->setLayout('admin');
    }
    
}
