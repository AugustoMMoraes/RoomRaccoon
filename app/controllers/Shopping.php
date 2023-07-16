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

    public function delete($id)
    {
		$item = $this->shoppingModel->selectItemById($id);
		$this->buildView('shopping.delete', [
			'item' => $item
        ]);
    }

    public function deleteItem($id)
    {
        if($this->shoppingModel->delete($id)){
            $message = [
                'error' => false,
                'message' => 'Sucessfully deleted item'
            ];

            $this->buildView('shopping.delete', [
                'item' => null,
                'message' => $message
            ]);
        };
    }

    public function add()
    {
        $this->buildView('shopping.add');
    }

    public function addItem()
    {
        $message = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $itemDetails = $this->shoppingModel->sanitizeAddItemPost($_POST);
            if($this->shoppingModel->insert($itemDetails)){
                $message = [
                    'error' => false,
                    'message' => 'Sucessfully added item'
                ];

                $this->buildView('shopping.add',[
                    'message' => $message
                ]);
            } else{
                $message = [
                    'error' => true,
                    'message' => 'Error adding item'
                ];
            };
        } else{
            $this->buildView('shopping.add',[
                'message' => $message
            ]);
        }
    }

    public function save($id = null)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $data = $_POST;
            $validatedId = $this->shoppingModel->validateShoppingItem($data);
    
            if ($validatedId) {
                if($this->shoppingModel->update($data, $validatedId)){
                    $message = [
                        'error' => false,
                        'message' => 'Sucessfully updated item'
                    ];
                } else{
                    $message = [
                        'error' => true,
                        'message' => 'Error updating the item'
                    ];
                }

                $item = $this->shoppingModel->selectItemById($validatedId);
                
                $this->buildView('shopping.edit', [
                    'item' => $item,
                    'message' => $message
                ]);
            } else{
                header('Location: ' . $_SERVER['REQUEST_URI']);
                exit();
            }
        }
        else{
            $message = [
                'error' => true,
                'message' => 'Something went wrong, Please reload the page.'
            ];

            $this->buildView('message', [
                'message' => $message
            ]);

        }
    }

}