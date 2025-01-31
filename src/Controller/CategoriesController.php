<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController
{
   public $Categories = null;
   public $Products = null;
   public $Items = null;


    public function initialize(): void
    {
        parent::initialize();
        // Load any models you need for this controller
        $this->loadModel('Categories');
        $this->loadModel('Products'); // If you want to access the products table in this controller
    }

    // Index action to list all categories
    public function index()
    {
        $categories = $this->Categories->find('all'); // Get all categories
        $this->set(compact('categories')); // Pass categories to the view
    }

    // Action to show all products in the "Gloves" category
    public function surgical()
{
    // Find the "Gloves" category
    $glovesCategory = $this->Categories->find()
        ->where(['name' => 'Gloves'])
        ->first();

    if ($glovesCategory) {
        // Find the "Surgical" product under the "Gloves" category
        $surgicalProduct = $this->Products->find()
            ->where(['category_id' => $glovesCategory->id, 'name' => 'Surgical'])
            ->first();

        if ($surgicalProduct) {
            // Find the items under the "Surgical" product
            $items = $this->Items->find()
                ->where(['product_id' => $surgicalProduct->id])
                ->all();

            // Pass the items to the view
            $this->set(compact('items'));
        } else {
            $this->Flash->error('No Surgical products found under Gloves.');
        }
    } else {
        $this->Flash->error('The Gloves category does not exist.');
    }
}


    // View action to show products within a specific category
 public function view($id)
 {
     $category = $this->Categories->get($id);
     // Fetch the products associated with this category
     $products = $this->Categories->Products->find('all', [
         'conditions' => ['Products.category_id' => $id]
     ]);
     // Pass both category and products data to the view
     $this->set(compact('category', 'products'));
 }

    // Add action to create a new category
    public function add()
    {
        $category = $this->Categories->newEmptyEntity(); // Create a new empty entity
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData()); // Patch data from the form

            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save the category.'));
        }
        $this->set(compact('category'));
    }

    // Edit action to update a category
    public function edit($id = null)
    {
        $category = $this->Categories->get($id); // Get the category by ID

        if ($this->request->is(['post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData()); // Patch data from the form

            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the category.'));
        }

        $this->set(compact('category'));
    }

    // Delete action to remove a category
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']); // Allow only post or delete method

        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('Unable to delete the category.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
