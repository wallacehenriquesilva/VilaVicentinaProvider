<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('X-Requested-With: *');

//Imports
require 'vendor/autoload.php';

require_once 'service/UsuarioService.php';
require_once 'service/ContatoService.php';
require_once 'service/HomeService.php';
require_once 'service/VisitaService.php';
require_once 'service/ContribuaService.php';
require_once 'service/BazarService.php';
require_once 'service/CentroDiaService.php';
require_once 'service/TransparenciaService.php';
require_once 'service/HistoriaService.php';
require_once 'service/InformacoesUteisService.php';
require_once 'service/MensagemService.php';
require_once 'service/ServicoService.php';
require_once 'service/VoluntarioService.php';

//instancie o objeto do Slim
$app = new \Slim\Slim();

//Usuario
$app->get('/api/usuario', function () {
    $usuarioService = new UsuarioService();
    echo $usuarioService->find();
});

$app->post('/api/usuario', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->insert($json);
});

$app->post('/api/usuario/login', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->login($json);
});

$app->post('/api/usuario/recuperacao', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->recuperacao($json);
});

$app->put('/api/usuario', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->update($json);
});

$app->post('/api/usuario/redefinicao', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->redefinicao($json);
});

$app->delete('/api/usuario', function () use ($app) {
    $json = $app->request->getBody();
    $usuarioService = new UsuarioService();
    echo $usuarioService->delete($json);
});
//Usuario

//Contato
$app->get('/api/contato', function () {
    $contatoService = new ContatoService();
    echo $contatoService->find();
});

$app->post('/api/contato', function () use ($app) {
    $json = $app->request->getBody();
    $contatoService = new ContatoService();
    echo $contatoService->insert($json);
});

$app->put('/api/contato', function () use ($app) {
    $json = $app->request->getBody();
    $contatoService = new ContatoService();
    echo $contatoService->update($json);
});

$app->delete('/api/contato', function () use ($app) {
    $json = $app->request->getBody();
    $contatoService = new ContatoService();
    echo $contatoService->delete($json);
});
//Contato

//Home
$app->get('/api/home', function () {
    $homeService = new HomeService();
    echo $homeService->find();
});

$app->post('/api/home', function () use ($app) {
    $json = $app->request->getBody();
    $homeService = new HomeService();
    echo $homeService->insert($json);
});

$app->put('/api/home', function () use ($app) {
    $json = $app->request->getBody();
    $homeService = new HomeService();
    echo $homeService->update($json);
});

$app->delete('/api/home', function () use ($app) {
    $json = $app->request->getBody();
    $homeService = new HomeService();
    echo $homeService->delete($json);
});
//Home

//Visita
$app->get('/api/visita', function () {
    $visitaService = new VisitaService();
    echo $visitaService->find();
});

$app->post('/api/visita', function () use ($app) {
    $json = $app->request->getBody();
    $visitaService = new VisitaService();
    echo $visitaService->insert($json);
});

$app->put('/api/visita', function () use ($app) {
    $json = $app->request->getBody();
    $visitaService = new VisitaService();
    echo $visitaService->update($json);
});

$app->delete('/api/visita', function () use ($app) {
    $json = $app->request->getBody();
    $visitaService = new VisitaService();
    echo $visitaService->delete($json);
});
//Visita

//Contribua
$app->get('/api/contribua', function () {
    $contribuaService = new ContribuaService();
    echo $contribuaService->find();
});

$app->post('/api/contribua', function () use ($app) {
    $json = $app->request->getBody();
    $contribuaService = new ContribuaService();
    echo $contribuaService->insert($json);
});

$app->put('/api/contribua', function () use ($app) {
    $json = $app->request->getBody();
    $contribuaService = new ContribuaService();
    echo $contribuaService->update($json);
});

$app->delete('/api/contribua', function () use ($app) {
    $json = $app->request->getBody();
    $contribuaService = new ContribuaService();
    echo $contribuaService->delete($json);
});
//Contribua

//Bazar
$app->get('/api/bazar', function () {
    $bazarService = new BazarService();
    echo $bazarService->find();
});

$app->post('/api/bazar', function () use ($app) {
    $json = $app->request->getBody();
    $bazarService = new BazarService();
    echo $bazarService->insert($json);
});

$app->put('/api/bazar', function () use ($app) {
    $json = $app->request->getBody();
    $bazarService = new BazarService();
    echo $bazarService->update($json);
});

$app->delete('/api/bazar', function () use ($app) {
    $json = $app->request->getBody();
    $bazarService = new BazarService();
    echo $bazarService->delete($json);
});
//Bazar

//CentroDia
$app->get('/api/centroDia', function () {
    $centroDiaService = new CentroDiaService();
    echo $centroDiaService->find();
});

$app->post('/api/centroDia', function () use ($app) {
    $json = $app->request->getBody();
    $centroDiaService = new CentroDiaService();
    echo $centroDiaService->insert($json);
});

$app->put('/api/centroDia', function () use ($app) {
    $json = $app->request->getBody();
    $centroDiaService = new CentroDiaService();
    echo $centroDiaService->update($json);
});

$app->delete('/api/centroDia', function () use ($app) {
    $json = $app->request->getBody();
    $centroDiaService = new CentroDiaService();
    echo $centroDiaService->delete($json);
});
//CentroDia


//Transparencia
$app->get('/api/transparencia', function () {
    $transparenciaService = new TransparenciaService();
    echo $transparenciaService->find();
});

$app->post('/api/transparencia', function () use ($app) {
    $json = $app->request->getBody();
    $transparenciaService = new TransparenciaService();
    echo $transparenciaService->insert($json);
});

$app->put('/api/transparencia', function () use ($app) {
    $json = $app->request->getBody();
    $transparenciaService = new TransparenciaService();
    echo $transparenciaService->update($json);
});

$app->delete('/api/transparencia', function () use ($app) {
    $json = $app->request->getBody();
    $transparenciaService = new TransparenciaService();
    echo $transparenciaService->delete($json);
});
//Transparencia


//Historia
$app->get('/api/historia', function () {
    $historiaService = new HistoriaService();
    echo $historiaService->find();
});

$app->post('/api/historia', function () use ($app) {
    $json = $app->request->getBody();
    $historiaService = new HistoriaService();
    echo $historiaService->insert($json);
});

$app->put('/api/historia', function () use ($app) {
    $json = $app->request->getBody();
    $historiaService = new HistoriaService();
    echo $historiaService->update($json);
});

$app->delete('/api/historia', function () use ($app) {
    $json = $app->request->getBody();
    $historiaService = new HistoriaService();
    echo $historiaService->delete($json);
});
//Historia


//InformacoesUteis
$app->get('/api/informacoesUteis', function () {
    $informacoesUteisService = new InformacoesUteisService();
    echo $informacoesUteisService->find();
});

$app->post('/api/informacoesUteis', function () use ($app) {
    $json = $app->request->getBody();
    $informacoesUteisService = new InformacoesUteisService();
    echo $informacoesUteisService->insert($json);
});

$app->put('/api/informacoesUteis', function () use ($app) {
    $json = $app->request->getBody();
    $informacoesUteisService = new InformacoesUteisService();
    echo $informacoesUteisService->update($json);
});

$app->delete('/api/informacoesUteis', function () use ($app) {
    $json = $app->request->getBody();
    $informacoesUteisService = new InformacoesUteisService();
    echo $informacoesUteisService->delete($json);
});
//InformacoesUteis

//Mensagem
$app->get('/api/mensagem', function () {
    $mensagemService = new MensagemService();
    echo $mensagemService->find();
});

$app->post('/api/mensagem', function () use ($app) {
    $json = $app->request->getBody();
    $mensagemService = new MensagemService();
    echo $mensagemService->insert($json);
});

$app->put('/api/mensagem', function () use ($app) {
    $json = $app->request->getBody();
    $mensagemService = new MensagemService();
    echo $mensagemService->update($json);
});

$app->delete('/api/mensagem', function () use ($app) {
    $json = $app->request->getBody();
    $mensagemService = new MensagemService();
    echo $mensagemService->delete($json);
});
//Mensagem


//Servico
$app->get('/api/servico', function () {
    $servicoService = new ServicoService();
    echo $servicoService->find();
});

$app->post('/api/servico', function () use ($app) {
    $json = $app->request->getBody();
    $servicoService = new ServicoService();
    echo $servicoService->insert($json);
});

$app->put('/api/servico', function () use ($app) {
    $json = $app->request->getBody();
    $servicoService = new ServicoService();
    echo $servicoService->update($json);
});

$app->delete('/api/servico', function () use ($app) {
    $json = $app->request->getBody();
    $servicoService = new ServicoService();
    echo $servicoService->delete($json);
});
//Servico

//Voluntário
$app->get('/api/voluntario', function () {
    $voluntarioService = new VoluntarioService();
    echo $voluntarioService->find();
});

$app->post('/api/voluntario', function () use ($app) {
    $json = $app->request->getBody();
    $voluntarioService = new VoluntarioService();
    echo $voluntarioService->insert($json);
});

$app->put('/api/voluntario', function () use ($app) {
    $json = $app->request->getBody();
    $voluntarioService = new VoluntarioService();
    echo $voluntarioService->update($json);
});

$app->delete('/api/voluntario', function () use ($app) {
    $json = $app->request->getBody();
    $voluntarioService = new VoluntarioService();
    echo $voluntarioService->delete($json);
});
//Voluntário


//roda a aplicação Slim
$app->run();
?>
