-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/10/2020 às 22:53
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testebase`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalhes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp1nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp1conteudo` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp1link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp2nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp2conteudo` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp2link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp3nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp3conteudo` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp3link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp4nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp4conteudo` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp4link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id`, `name`, `curso`, `detalhes`, `ch`, `tp1nome`, `tp1conteudo`, `tp1link`, `tp2nome`, `tp2conteudo`, `tp2link`, `tp3nome`, `tp3conteudo`, `tp3link`, `tp4nome`, `tp4conteudo`, `tp4link`, `created_at`, `updated_at`) VALUES
(2, 'Vinicius Onorato Carvalho', 'HTML + CSS', 'Neste curso vamos aprender a utiliar o html css', '60', 'Instalando VsCode para editar códigos HTML', 'Para fazer o download do Visual Studio Code, acesse o endereço:  https://code.visualstudio.com/, Na página inicial já possível ver botão verde para o download. Ele está disponível para Windows, MacOS.\r\nApós o download a instalação padrão consiste em seguir os passos até o fim.\r\nFeita a instalação, abra o vs code, (pode pesquisar por “code” na busca por programas, caso não encontre onde foi instalado) .\r\nPara escolher a pasta do seu projeto e começar a desenvolver, acesso o menu File > Open Folder', 'https://www.youtube.com/watch?v=49K-Zxc8A7A', 'Conhecendo as Tags HTML', 'As tags são usadas para informar ao navegador a estrutura do site. Ou seja: quando se escreve um código em HTML, as tags serão interpretadas pelo navegador, produzindo assim a estrutura e o conteúdo visual da página.\r\n\r\nA principal característica das tags é estarem sempre dentro dos sinais de chevron (sinal de “maior que” e “menor que”), ou seja: < >.\r\nAs tags HTML são divididas em dois tipos: as que precisam de fechamento e as que não precisam de fechamento. As tags que precisam de fechamento possuem a sintaxe <tag> </tag>, já as que não precisam de fechamento possuem como estrutura <tag/>.\r\n\r\nAlém disso, uma mesma tag pode receber um ou mais atributos, que possuirá um valor que modifica sua estrutura ou funcionalidade.\r\n\r\nAtributos\r\nOs atributos são usados para personalizar as tags, modificando sua estrutura ou funcionalidade. Igualmente, os atributos são utilizados para atribuir uma classe ou id a um elemento.\r\nA maioria das tags tem seus próprios atributos. Contudo, existem alguns atributos genéricos que podem ser utilizados na maioria das tags HTML, vamos estudá-los:\r\n\r\nclass=”…“ – Atribui uma classe ao elemento (uma classe pode ser utilizada para um ou mais elementos);\r\nid=”…“ – Atribui um id ao elemento (um id deve ser único, ou seja atribuído a um único elemento);\r\nstyle=”…” – Permite incluir elementos CSS (estilos) dentro da tag;\r\nlang=”…” – Define o idioma principal do elemento;\r\ntitle=”…” – Define o título do elemento;\r\nalt=”…” – Define um texto alternativo e, por isso, é muito utilizado em imagens, auxilia nas práticas de SEO;\r\nhidden – Oculta o elemento;\r\nalign=”…” – Permite definir o padrão de alinhamento desse elemento, como por exemplo: right, center, left e justify;\r\nwidth=”…” – Define uma largura para o elemento;\r\nheight=”…” – Define uma altura para o elemento.\r\nEssas são os principais atributos, porém existem diversos outros que devem ser estudados e podem ser utilizados no seu código.', 'https://www.youtube.com/watch?v=7pqp3IKyC0s', 'Inserindo CSS nas Páginas HTML', 'Este é o método que apresenta maior versatilidade. Um arquivo externo CSS pode ser ligado a quantas páginas desejarmos, desta forma deixando a manutenção de um site muito mais fácil (um arquivo CSS controla o visual do site inteiro). Para este método, utilizamos o elemento link, da seguinte forma:\r\n\r\n<link href=\"css/arquivo.css\" rel=\"stylesheet\">\r\nA tag link é uma tag vazia, assim como br e meta. O atributo href indica o endereço do arquivo CSS (hiper-referência), nesse exemplo um arquivo chamado \"arquivo.css\" dentro de uma pasta \"css\". O atributo rel determina a relação deste \"link\" com a página, aqui sendo stylesheet ou folha de estilos. Se estivéssemos utilizando a sintaxe XHTML, também é necessário o atributo type com o valor text/css.\r\n\r\nAtenção: a tag link não é utilizada para fazer \"links\" no site como dizemos informalmente. Para links, é utilizada a tag a (anchor or âncora), que veremos na unidade 3.\r\n\r\nEsse método é o que tem menor precedência em relação aos outros. Ou seja, estilos aplicados utilizando os outros métodos abaixo terão preferência de aplicação em caso de um conflito (estilos aplicados a um mesmo elemento). Veremos mais detalhes sobre cascata, herança e precedência na unidade 2.', 'https://www.youtube.com/watch?v=GPK8A-A156o', 'Sites Responsivos CSS', 'Para criar site responsivo, você vai precisar acessar seus arquivos CSS. Para fazer isso, você precisa se conectar ao servidor em que os arquivos do seu site estão armazenados.\r\n\r\nNavegue até o diretório em que o arquivo CSS está e o abra usando qualquer tipo de editor de texto. Lá estarão todas as classes do estilo do seu site.\r\n\r\nAqui, vamos definir uma classe que só será carregada quando a largura de tela do dispositivo for de 900 pixels ou meno4. E, ainda, vai alterar a largura da classe “.menu” para 100% do tamanho da tela do navegador.\r\n\r\nUm media query que permite fazer isso deve se parecer com este código abaixo:\r\n\r\n@media only screen and (max-device-width: 900px) {\r\n/* .menu { width:100%; } */\r\n}\r\nPasso 2 – Mudando propriedades de elementos para criar site responsivo\r\nNormalmente, não é preciso mudar todas as propriedades da classe CSS. Isso porque os valores de, por exemplo, cor de fundo, cor de texto e similares, não mudam. A menos que você queira que eles tenham algum tipo de mudança mais para a frente.\r\n\r\nEntretanto, propriedades como largura, altura ou margens são quase sempre mudados. Vamos explicar o exemplo que usamos no Passo 1.\r\n\r\nConsidere a situação em que a largura do menu de um site esteja fixada para 900 pixels. Ao abrir esse mesmo site em um dispositivo com tamanho de tela menor que 900 pixels, o site site ganharia uma barra de rolagem horizontal e o menu  não seria mostrado por inteiro.\r\n\r\nNão é confortável navegar em um site assim e é por isso que reescrevemos o código para adaptar a largura do menu do site para 100%. Isso significa que, qualquer que seja o tamanho de tela do dispositivo, a largura do menu vai ser exatamente a mesma da largura da tela.\r\n\r\nSe deixarmos a largura do menu fixado (neste exemplo, em 1200 pixels), teremos a situação da imagem abaixo.', 'https://www.youtube.com/watch?v=H91DhKPjhPk', '2020-10-20 22:28:59', '2020-10-20 23:51:54'),
(3, 'Professor Fred', 'PHP', 'Utilizando o PHP na criação de sistemas web', '90', 'Instalando o PHP', 'Instalando o PHP\r\nEditando as Configurações do PHP\r\n1 – Faça o Download do PHP 7.4 clicando aqui ou usando o link https://windows.php.net/downloads/releases/php-7.4.4-nts-Win32-vc15-x64.zip. Esse arquivo pode ser salvo em qualquer lugar de sua preferência.\r\n\r\n2 – Descompacte o arquivo resultado do download do item anterior e copie a pasta resultante para a raiz do seu disco. Após isso, renomeie a mesma para que fique com o seguinte caminho. C:\\php74 (Contando que a raiz do seu disco é C:\\).\r\n\r\n3 – Dentro da pasta C:\\php74, procure o arquivo php.ini-development e renomeie o mesmo para php.ini.\r\n\r\n4 – Abra o recém nomeado arquivo php.ini com um editor de texto qualquer (Notepad, Notepad++, Atom ou Sublime Text).\r\n\r\n5 – Ainda nesse arquivo, busque pela configuração memory_limit = 128M e mude de 128M para 1G. (O aumento de memoria não é obrigatório, mas é recomendado).', 'https://www.youtube.com/watch?v=KwEilZK5d04', 'Criando Estrutura MVC no PHP', 'A principal vantagem de usar o padrão MVC (acrônimo para Model View Controller) é a separação das responsabilidades que você tem entre as camadas. Cada camada possui sua responsabilidade referente a uma parte do trabalho da sua aplicação. Outra vantagem é a facilidade nas manutenções posteriores da sua aplicação, pois em aplicações onde apenas um arquivo “faz tudo” a manutenção se torna uma tarefa complicada e cara.', 'https://www.youtube.com/watch?v=A1rVfAZ4hk8', 'Criando rotas no PHP', 'Construir um sistema de rotas para a aplicativos é sem dúvida muito interessante. E quero que você fique fera nisso!\r\nÉ uma técnica moderna e que deixará seus aplicativos muito mais elegantes!\r\nExistem muitas formas de se construir um, mas tenho certeza que o modo como construiremos aqui, vai deixar você muito satisfeito!\r\nEstou escrevendo estes artigos da maneira que eu sempre quis encontrar quanto estava tentando aprender a criar o primeiro sistema de rotas. Espero que, se não for exatamente o que você espera, mesmo assim lhe sirva de boa base para o que você procura!\r\n\r\nO que são url amigáveis?\r\nPara criar um sistema de rotas bem feito, você precisa compreender o que são url amigáveis.\r\n\r\nEm resumo podemos dizer que são URLs bem mais fáceis de entender do que o método convencional.\r\nA estrutura de diretórios será assim:\r\n\r\nApp\r\nController.php\r\nsrc\r\npublic\r\nindex.php\r\nroutes\r\nroutes.php\r\nsrc\r\nRouter.php\r\nRouteCollection.php\r\nRequest.php\r\nDispacher.php\r\n.htaccess\r\nbootstrap.php', 'https://www.youtube.com/watch?v=_7yG_K8gFbI', 'Criando Controladores no PHP', 'Os controllers (controladores) fazem parte da arquitetura MVC. São objetos de classes que estendem de yii\\base\\Controller e são responsáveis pelo processamento das requisições e por gerar respostas. Em particular, após assumir o controle de applications, controllers analisarão os dados de entradas obtidos pela requisição, passarão estes dados para os models (modelos), incluirão os resultados dos models (modelos) nas views (visões) e finalmente gerarão as respostas de saída.\r\nOs controllers são compostos por unidades básicas chamadas de ações que podem ser tratados pelos usuários finais a fim de realizar a sua execução.\r\nNa ação view (definido pelo método actionView()), o primeiro código carrega o model conforme o ID solicitado; Se o model for devidamente carregado, a ação irá exibi-lo utilizado a view chamada de view. Caso contrário, a ação lançará uma exceção.\r\n\r\nNa ação create (definido pelo método actionCreate()), o código é parecido. Primeiro ele tenta popular o model usando os dados da requisição em seguida os salva. Se ambos forem bem sucedidos, a ação redirecionará o navegador para a ação view com o novo ID criado pelo model. Caso contrário, a ação exibirá a view create na qual os usuário poderão fornecer os dados necessários.', 'https://www.youtube.com/watch?v=IrqgI7TovcI', '2020-10-20 22:54:16', '2020-10-20 23:49:27'),
(4, 'Professor Berg', 'Framework Laravel', 'Utilizando a Framework larável para criação de sistemas', '70', 'Instalando o Laravel', '1. Instalar Servidor Web Apache\r\nPara o Laravel funcionar, você vai precisar do Apache. Ele é uma das ferramentas de servidor HTTP mais populares, sendo que é bem provável que sua VPS já o tenha instalado. \r\n\r\nPor sorte, é bem fácil de checar isso. Assim que se conectar ao servidor usando SSH, verifique que um serviço de sistema Apache existe. Para fazer isso, execute o comando abaixo\r\nsudo systemctl status apache2\r\nComo você pode notar, não tem um serviço Apache na nossa VPS. É por isso que temos que instalá-la. Para isso, execute o comando a seguir.\r\n\r\nsudo apt install apache2\r\n Por padrão, o Ububtu inicia o Apache já durante o processo de carregamento do sistema. \r\n\r\nAgora, se você está usando um firewall, é necessário estabelecer uma regra no firewall para que o Apache possa ser executado com liberdade. Caso não tenha um firewall instalado, você pode pular esta etapa.', 'https://www.youtube.com/watch?v=s9CH7-U7-ZQ', 'Iniciando projeto larável', 'Criando meu site com Laravel\r\nApós ter o Laravel instalado podemos começar a utilizá-lo, para criarmos um novo projeto seja um site ou aplicação devemos utilizar o comando new, seguido pelo nome do projeto, por exemplo:\r\n\r\nlaravel new meu-primeiro-site\r\nBashCopy\r\nAguarde o Composer realizar o download e configurar todas as dependências do projeto (isso pode demorar um pouco, depende da sua internet).\r\n\r\nAo término das configurações uma pasta com o nome do projeto deve ter sido criada no local onde você rodou o comando new, no nosso caso, uma pasta chamada meu-primeiro-site foi criada. Abrindo essa pasta em um editor de código (por exemplo o VS Code) podemos ver a seguinte estrutura:\r\n\r\nEstrutura de um projeto Laravel\r\n\r\nSim, note que tem bastante pastas e arquivos (não irei explicar um por um para não perder o foco do post), essa é a estrutura padrão de um projeto criado com Laravel, cada pasta e arquivo tem sua finalidade (assunto para um próximo post).\r\n\r\nSubindo meu primeiro site\r\nAssim como todos os outros cli, o Laravel também possuí um comando para subir o servidor do projeto, podemos fazer isso utilizando o comando:\r\n\r\nphp artisan serve\r\nBashCopy\r\nOnde devemos ter a seguinte resposta:\r\n\r\nResposta do servidor rodando\r\n\r\nBasicamente a resposta está dizendo:\r\n\r\nSeu servidor Laravel de desenvolvimento está rodando localmente (127.0.0.1) na porta 8000, para acessar o projeto vá até o endereço http://127.0.0.1:8000 em seu navegador.\r\n\r\nTambém podemos acessar via http://localhost:8000, pois, localhost seria como um “DNS” (apelido) para o IP 127.0.0.1.', 'https://www.youtube.com/watch?v=6lL1lk3K8KE', 'Criando Models e Migrations', 'As Models são classes responsáveis pela administração dos dados. Elas são inseridas no diretório \\app\r\n\r\nAs Migrations foram criadas no Laravel para o uso do controle de versão e o compartilhamento das alterações de um BD entre os desenvolvedores de uma equipe. Com uma Migration, é possível construir ou modificar as tabelas do seu banco sem a necessidade de realizar isso manualmente no phpMyAdmin.\r\n\r\nAntes de criar as Migrations você precisa criar um banco de dados em branco no phpMyAdmin e inserir seus dados de acesso para conexão presentes no arquivo .env que se encontra na pasta raiz do seu projeto.\r\n\r\nVamos ao que interessa:\r\n\r\n1 - Para criar uma Model, é necessário abrir o Windows PowerShell ou CMD e navegar até a pasta C: com o comando \"cd \\\" e logo após, navegar até a pasta do seu projeto com o comando \"cd \\xampp\\htdocs\\nomeDoSeuProjeto\" (estou supondo que você utiliza o Xampp). Após isso, basta executar o comando:\r\n\r\n\"php artisan make:model NomeDaModel -m\"\r\n2 - Uma model então é criada dentro da pasta citada no passo 1. Além disso, é criado uma migration com o mesmo nome da model no caminho (\\database\\migrations).\r\n\r\n3 - Se você quiser criar somente a Model. Execute o comando: \"php artisan make:model NomeDaModel\"\r\n4 - Se você quiser criar somente a Migration. Execute o comando: \"php artisan make:migration NomeDaMigracao\"\r\n\r\n5 - O comando \"php artisan make:migration create_table_products --create=products\" cria, por exemplo, uma migration da tabela products já com os métodos up e down.\r\n\r\nMétodo UP - Responsável pela implementação das atualizações do banco, criar uma tabela, atualizar uma coluna, etc.\r\n\r\nMétodo Down - O inverso da função UP. Reverte o banco de dados ao estado anterior a esta atualização.\r\n\r\n6 - Após criar suas migrations com os dados de interesse e fazer sua conexão como banco, utilize o comando \"php artisan migrate\" no terminal para construir as tabelas.', 'https://www.youtube.com/watch?v=A1qHjtHdhBU', 'Middlewares (filtros) no Laravel', 'Middleware é um poderoso mecanismo do laravel que permite filtrar requisições http em sua aplicação.\r\n\r\nO laravel já possui alguns filtros embutido, como filtros de autenticação, filtro para usuários não autenticados, filtro para API, filtro de CORS para headers, filtro de CSRF para proteção contra este ataque em requisições http POST, PUT, PATH e DELETE.\r\n\r\nE também é possível criar middlewares (filtros) personalizados no laravel para validar regras especificas de sua aplicação. É possível validar qualquer coisa com middlewares, como por exemplo se o usuário está ativo (neste caso pode restringir o acesso a apena usuários ativos), pode validar se o usuário concordou com os termos de uso, pode validar se o usuário tem permissão para fazer algo, e etc.\r\n\r\nOs middlewares personalizados no laravel ficam /app/Http/Middleware/ e o arquivo de definição dos middlewares é /app/Http/Kernel.php', 'https://www.youtube.com/watch?v=YwHRSe9_zpI', '2020-10-20 23:21:24', '2020-10-20 23:47:48'),
(5, 'Professor Heldon', 'Python', 'Neste Curso vamos aprender a utilizar o Python', '40', 'Instalando o Python', 'Para programar em Python é necessário fazer o download do arquivo de instalação que está no site principal, para baixar o arquivo, vá no item “Downloads” e clique no link que tem o nome da versão mais recente estável. Na data de publicação desse conteúdo, a versão é a 3.7.4.\r\nApós o término do download, abra o executável para começar a instalação do Python. A tela inicial da instalação abrirá, como na Figura 3. Marque a opção “Add Python 3.7 to Path”, para já deixar o Python configurado nas variáveis de ambiente do Windows. Clique em “Install Now” e aguarde até que a instalação seja concluída', 'https://www.youtube.com/watch?v=VuKvR1J2LQE&t=1s', 'Criando Classes em Python', 'Criar uma classe em Python é bastante simples\r\n\r\nPara definir o nome da classe usamos a palavra reservada class - class Pessoa: - Após o nome da classe devemos adicionar dois pontos\r\n\r\nPara criar um método usamos a palavra reservada def. O construtor é um método reservado chamado _init>. O parâmetro self é obrigatório e os demais são definidor por nós. - def _init_(self, nome, idade):\r\n\r\nAqui está o corpo do método, sempre identado como manda a sintaxe da linguagem - self.nome = nome\r\nself.idade = idade\r\n\r\nA partir daí podemos definir quantos métodos precisarmos.', 'https://www.youtube.com/watch?v=j6B8shHXzks', 'Criando [Arrays] em Python', 'Um array em NumPy é uma tabela multidimensional de elementos do mesmo tipo, indexados por uma tupla de inteiros positivos. As dimensões são chamadas de eixos (axes).\r\n\r\nA classe básica é o ndarray que também tem o apelido de array. Note que o numpy.array é diferente do tipo nativo do Python array.array que só manipula arrays de uma dimensão e apresenta menos funcionalidades.\r\n\r\nPrincipais atributos da ndarray\r\nndarray.ndim: um inteiro que corresponde ao número de eixos (dimensões) do array.\r\n\r\nndarray.shape: uma tupla contendo as dimensões do array, ou comprimento do array em cada eixo. O comprimento dessa tupla é o número de dimensões ndim.\r\n\r\nndarray.size: número total de elementos no array. Equivale ao produto dos elementos de shape.\r\n\r\nndarray.dtype: descreve o tipo dos elementos do array. Além dos tipos nativos do Python, como int e float, o NumPy oferece seus próprios tipos, como numpy.int32, numpy.int16, numpy.float64, etc.\r\n\r\nndarray.itemsize: indica o tamanho de cada elemento do array em bytes. Por exemplo, para elementos do tipo numpy.float64, o tamanho em 8 bytes (= 64 bits / 8 bits).\r\n\r\nndarray.data: referência para a área de memória onde os dados do array ficam realmente armazenados. Em geral não utilizamos esse atributo, pois utilizamos índices para acessar os elementos.', 'https://www.youtube.com/watch?v=_aZOe9RJM4s', 'Criando Dicionários em Python', 'Todos os tipos de dados compostos que estudamos em detalhes até agora — strings, listas e tuplas — são coleções sequenciais. Isto significa que os itens na coleção estão ordenados da esquerda para a direita e eles usam números inteiros como índices para acessar os valores que eles contêm.\r\n\r\nDicionário é um tipo diferente de coleção. Ele é um tipo de mapeamento nativo do Python. Um mapa é uma coleção associativa desordenada. A associação, ou mapeamento, é feita a partir de uma chave, que pode ser qualquer tipo imutável, para um valor, que pode ser qualquer objeto de dados do Python.\r\n\r\nComo exemplo, vamos criar um dicionário para traduzir palavras em inglês para Espanhol. Para este dicionário, as chaves são strings.\r\n\r\nUma maneira de criar um dicionário é começar com o dicionário vazio e adicionar pares chave-valor. O dicionário vazio é denotado {}\r\nprimeira atribuição cria um dicionário chamado eng2sp. As outras atribuições adicionam novos pares chave-valor para o dicionário. O lado esquerdo define o dicionário e a chave a ser associada. O lado direito define o valor a ser associado a essa chave. Nós podemos imprimir o valor atual do dicionário da maneira usual. Os pares chave-valor do dicionário são separados por vírgulas. cada par contém uma chave e um valor separado por dois pontos.\r\n\r\nA ordem dos pares pode não ser a que você esperava. O Python usa algoritmos complexos, projetados para acesso muito rápido, para determinar onde os pares chave-valor são armazenadas em um dicionário. Para os nossos propósitos, podemos pensar que esta ordenação é imprevisível.\r\n\r\nOutra maneira de criar um dicionário é fornecer uma lista de pares chave-valor usando a mesma sintaxe que a saída anterior', 'https://www.youtube.com/watch?v=ZWj8o692qGY', '2020-10-20 23:36:12', '2020-10-20 23:36:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_18_032603_create_sessions_table', 1),
(7, '2020_10_18_035017_create_cursos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eTAPamaqQGzWyStzrWHJ2Q7HSYWVHUVO5B01q0pw', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjlMNUJDSWViNXZwamJlcDhZZ3QzMEZKVFZUR3ZrYmJFNXJwc2NkVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1603227127),
('zyxi1n5MYgBbONZK7BvVEh1YQKD3m1Wa9eVTvBu9', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.75 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoic2YzUVROMlR6UnZXekZ1cFg2VW5IaHp0U2p0cUVCZnQ1TGZiSkRCVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkYzZFbU5FaUFVd2RPY0dRUHBwcXVhLlVxUGRwcXM3LlNBUGtwRHNuTGMuSDZHOWdCaUxKU08iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGM2RW1ORWlBVXdkT2NHUVBwcHF1YS5VcVBkcHFzNy5TQVBrcERzbkxjLkg2RzlnQmlMSlNPIjt9', 1603226583);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'VINICIUS ONORATO CARVALHO', 'carvalho.vinicius163@gmail.com', NULL, '$2y$10$c6EmNEiAUwdOcGQPppqua.UqPdpqs7.SAPkpDsnLc.H6G9gBiLJSO', NULL, NULL, NULL, NULL, NULL, '2020-10-20 21:57:36', '2020-10-20 21:57:36');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
