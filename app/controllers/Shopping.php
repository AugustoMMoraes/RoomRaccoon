<?php 

use App\Controllers\Dashboard;

class Shopping
{
    use \Controller;

    private $shoppingModel;

    public function __construct()
    {
        $this->shoppingModel = new ShoppingModel();
    }

    public function index()
    {
		$itemsList = $this->shoppingModel->selectAll();

        $this->buildView('shopping', [
			'itemsList' => $itemsList
        ]);
		
    }

	public function edit($id){
		$item = $this->shoppingModel->selectItemById($id);
		$this->buildView('shopping.edit', [
			'item' => $item
        ]);

	}

}