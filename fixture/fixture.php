<?php

include 'connection.php';
try {
    $conn = initializeFixture();
    echo "-------- CRIANDO TABELAS --------\n";
    $conn->exec("CREATE TABLE tb_content("
            . "id_content INT NOT NULL AUTO_INCREMENT,"
            . "content LONGTEXT,"
            . "PRIMARY KEY(id_content)"
            . ");");

    $conn->exec("CREATE TABLE tb_route("
            . "request VARCHAR(20) NOT NULL,"
            . "tittle VARCHAR(20) NOT NULL,"
            . "content INT,"
            . "FOREIGN KEY (content) REFERENCES tb_content(id_content)"
            . ");");

    echo "-------- INSERIRNDO DADOS --------\n";


    $conn->exec("INSERT INTO tb_content VALUES (
    1,'Home é um documentário lançado em 2009, produzido pelo jornalista, 
    fotógrafo e ambientalista francês Yann Arthus-Bertrand. O filme é 
    inteiramente composto de imagens aéreas de vários lugares da Terra. 
    Mostra-nos a diversidade da vida no planeta e como a humanidade está 
    ameaçando o equilíbrio ecológico. O filme foi lançado simultaneamente 
    ao redor do mundo em 5 de junho nos cinemas, em DVD, Blu-ray, na 
    televisão e no YouTube, disponibilizado em 181 países. Home teve sua 
    estreia no festival mundial Dawn Breakers International Film Festival 
    em 2012. O filme foi financiado pela PPR, uma holding francesa 
    especializada em artigos de luxo. É totalmente gratuito e sem lucros 
    comerciais.
    Em Portugal, a estreia deste documentário foi feita através do canal 
    RTP 2, pelas 20 horas');");    
    
    $conn->exec("INSERT INTO tb_content VALUES (
    2,
    'No Direito Empresarial, atividade empresarial, ou empresa, é uma 
    atividade econômica exercida profissionalmente pelo empresário por meio 
    da articulação dos fatores produtivos para a produção ou circulação de 
    bens ou de serviços. O conceito jurídico de empresa não pode ser 
    entendido como um sujeito de direito, uma pessoa jurídica, tampouco o 
    local onde se desenvolve a atividade econômica.');");   
    
    $conn->exec("INSERT INTO tb_content VALUES (
    3,
    'Um serviço é o equivalente intangível de um bem, não resulta na 
    propriedade de algo, pois o serviço pode ou não estar interligado a um 
    produto físico. A prestação de serviços é uma atividade onde, em geral, 
    o comprador não obtém a posse exclusiva da coisa adquirida (salvo o 
    caso em que exista contrato de exclusividade).
    Os benefícios do serviço prestado, caso lhe seja atribuído um preço, 
    devem ser evidentes para o comprador, ao ponto de este estar disposto 
    a pagar para o obter.
    A intangibilidade do serviço incita o consumidor a informar-se sobre a 
    qualidade do serviço com consumidores que já o experimentaram.
    Os serviços públicos são aqueles que são pagos pela sociedade como um 
    todo através de taxas ou outros meios semelhantes.
    Compondo e orquestrando os níveis adequados de recursos, competências, 
    engenho e experiência para a realização de benefícios específicos aos 
    consumidores dos serviços, os prestadores de serviços operam numa 
    economia sem restrições derivadas do transporte e armazenamento de 
    mercadorias.
    Por outro lado, fornecer serviços pode exigir um marketing consistente 
    e uma actualização constante face à concorrência, que também beneficia 
    das reduzidas restrições físicas.
    Apesar da natureza intangível dos serviços, muitos setores de serviços 
    exigem grandes estruturas e equipamentos físicos, e consomem grandes 
    quantidades de recursos. São exemplo disso os serviços de transporte, 
    telecomunicações e o setor militar.
    Diz-se que os fornecedores de serviços formam o setor terciário de uma 
    economia.
    A busca e cobrança constante dos clientes por bons serviços, obriga a 
    um entendimento e aperfeiçoamento maior de marketing e relacionamento. 
    A formação de bons prestadores de serviço vem se tornando um grande 
    desafio e extraordinário nicho de mercado.');");    
    
    
    $conn->exec("INSERT INTO tb_content VALUES (
    4,
    'De forma geral, um produto é uma espécie de compilação de diversos fatores');");
    
    $conn->exec("INSERT INTO tb_route VALUES ('home','Home',1);");
    $conn->exec("INSERT INTO tb_route VALUES ('empresa','Empresa',2);");    
    $conn->exec("INSERT INTO tb_route VALUES ('servicos','Serviços',3);");    
    $conn->exec("INSERT INTO tb_route VALUES ('produtos','Produtos',4);");
    
} catch (Exception $ex) {
    echo "Excessão: $ex->getMessage()\n";
    echo "Excessão: $ex->getTraceAsString()\n";
}