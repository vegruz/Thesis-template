public function httpRequestArduino()
{
	$data = [
		'codice_chiave' => "klgfrfteqcabzawpqrft",
		'id_varco' => "1",
		'Host' => "fabkey.testing.com",
		'User-Agent' => "arduino-ethernet",
		'X-Authorization-Token' => "2c0bc4ab56c59ce277697c53bc6e7860",
		'X-Authorization-Time' => "12345"
		];
	$response = $this->json('POST', '/api/verifica_accesso',$data);
	$response->assertStatus(200);
	$response->assertJson(['status' => true]);
	$response->assertJson(['return_message' => "#1#"]);
}