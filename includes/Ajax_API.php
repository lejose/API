<?php

require(__DIR__ . '/includes/TokenController');

class Ajax_API extends API_Config {

    public function __construct()
    {
		$this->checkToken();
        
    }
	
	
	private checkToken(){
		$token = new TokenController();
        if (token->init()) {
            echo $this->filterRequest($_GET);
        } else {
            echo json_encode(['data' => null, 'error' => 'Bad token']);
        }
	}

    private function filterRequest($data)
    {
        switch ($data['table']) {

            case "articles" :
                return json_encode(['data' => $this->getOneFrom($data['table'], $data['data']), 'error' => null]);
                break;


            case "users"
                return json_encode(['data' => $this->getOneFrom($data['table'], $data['data']), 'error' => null]);
                break;

            default : 
                return json_encode(['data' => null, 'error' => 'Bad table']);

        }

}