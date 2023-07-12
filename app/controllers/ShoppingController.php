<?php 

/**
 * ShoppingController class
 */
class ShoppingController
{
	use Controller;

    private $shoppingModel;

    public function __construct()
    {
        $this->shoppingModel = new shopping;
    }

	public function index()
	{
		/**I'm using the index to test all main functions before building the frontend*/
		/** $results variable can be used to validate execution later (check return types)*/

		/** Create a test item */
		$itemDetails = [
			'name' => 'AirPod Max',
			'price' => 500.22,
			'description' => 'AirPods Max with Active Noise Cancellation Adaptive EQ, spatial audio, etc..',
		];

		/** Insert */
		$lastInsertedID = $this->shoppingModel->insert($itemDetails);

		/** Select 1 - After Insert */
		$itemsList = $this->shoppingModel->selectAll();

		/** Update */
		$updateItem = [
			'id' => 1,
			'name' => 'AirPod Max PLUS',
			'price' => 700.99,
			'description' => 'UPDATED -> AirPods Max PLUS adds 30 listening minutes to the battery...',
			'is_checked' => true
		];
		$result2 = $this->shoppingModel->update($updateItem, $lastInsertedID);

		/** Select 2 - After Update */
		$itemsList2 = $this->shoppingModel->selectAll();

		/** Delete */
		$result3 = $this->shoppingModel->delete($lastInsertedID);

		/** Select 3 - After Delete */
		$itemsList3 = $this->shoppingModel->selectAll();

		$this->buildView('shopping', [
			'itemsList' => $itemsList,
			'itemsList2' => $itemsList2,
			'itemsList3' => $itemsList3
		]);

	}

}
