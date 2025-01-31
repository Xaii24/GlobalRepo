<?php
namespace App\Controller;

use App\Controller\AppController;

class ProductsController extends AppController
{
public $Categories = null;
   public $Products = null;
   public $Items = null;

    public function initialize(): void
    {
        parent::initialize();
        // Load necessary models
        $this->loadModel('Products');
        $this->loadModel('Categories');
    }

    // Index action to list all products
    public function index()
    {
        $products = $this->Products->find('all');
        $this->set(compact('products')); // Pass products to the view
    }

    public function surgicalItems()
{
    // Find the "Surgical" product
    $surgicalProduct = $this->Products->find()
        ->where(['name' => 'Surgical'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$surgicalProduct) {
        throw new NotFoundException(__('Surgical product not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('surgicalProduct'));
}


public function viewItem($id = null)
{
    // Ensure the Items model is loaded
    $this->loadModel('Items');

    // Find the specific item
    $item = $this->Items->get($id, [
        'contain' => ['Products'] // Include the associated product data if needed
    ]);

    if (!$item) {
        throw new NotFoundException(__('Item not found.'));
    }

    // Pass the item to the view
    $this->set(compact('item'));
}

public function examinationItems()
{
    // Find the "Examination" product
    $examinationProduct = $this->Products->find()
        ->where(['name' => 'Examination'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$examinationProduct) {
        throw new NotFoundException(__('Examination product not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('examinationProduct'));
}
public function gownItems()
{
    // Find the "Examination" product
    $gownProduct = $this->Products->find()
        ->where(['name' => 'Gowns'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$gownProduct) {
        throw new NotFoundException(__('Gowns product not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('gownProduct'));
}

public function needleItems()
{
    // Find the "Needle" product
    $needleProduct = $this->Products->find()
        ->where(['name' => 'Needle Counter'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$needleProduct) {
        throw new NotFoundException(__('NeedleCounter product not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('needleProduct'));
}

public function canisterItems()
{
    // Find the "Canister" product
    $canisterProduct = $this->Products->find()
        ->where(['name' => 'Canister'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$canisterProduct) {
        throw new NotFoundException(__('Canisterproducts not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('canisterProduct'));
}

public function kitItems()
{
    // Find the "Canister" product
    $kitProduct = $this->Products->find()
        ->where(['name' => 'Kits'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$kitProduct) {
        throw new NotFoundException(__('KitProducts not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('kitProduct'));
}

public function packItems()
{
    // Find the "Canister" product
    $packProduct = $this->Products->find()
        ->where(['name' => 'Packs'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$packProduct) {
        throw new NotFoundException(__('PackProducts not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('packProduct'));
}

public function drapeItems()
{
    // Find the "Canister" product
    $drapeProduct = $this->Products->find()
        ->where(['name' => 'Drapes'])
        ->contain(['Items']) // Include related items
        ->first();

    if (!$drapeProduct) {
        throw new NotFoundException(__('DrapeProducts not found.'));
    }

    // Pass the product and its items to the view
    $this->set(compact('drapeProduct'));
}


    // View action to display a single product
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories'], // Include category data
        ]);
        $this->set(compact('product'));
    }

    // Add action to create a new product
    public function add()
    {
        $product = $this->Products->newEmptyEntity(); // Create new empty entity
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData()); // Patch data

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save the product.'));
        }
        $categories = $this->Categories->find('list'); // Get categories for the dropdown
        $this->set(compact('product', 'categories'));
    }

    // Edit action to update an existing product
    public function edit($id = null)
    {
        $product = $this->Products->get($id);

        if ($this->request->is(['post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData()); // Patch data

            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update the product.'));
        }
        $categories = $this->Categories->find('list');
        $this->set(compact('product', 'categories'));
    }

    // Delete action to remove a product
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('Unable to delete the product.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
